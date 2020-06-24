<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddCarRequest;
use App\Http\Requests\PhoneGsmRequest;
use App\Models\Car;
use App\Models\BodyType;
use App\Models\CarBrand;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\Color;
use App\Models\Currency;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Gear;
use App\Models\TechnicalSpecification;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Cookie;


class AutoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query = Car::query();

        $query = $query->with('car_brand')
            ->with('car_model')
            ->with('color')
            ->with('fuel_type')
            ->with('body_type')
            ->with('company')
            ->with('currency')
            ->with('city')
            ->with('transmission')
            ->with('gear')
            ->where($this->searchWhere());

        if (\request('technical_specification_id')){
            foreach (\request('technical_specification_id') as $technical){
                $query = $query->orWhere('technical_specification_id', 'like', '%"'.$technical.'"%');
            }
        }



        if(request('sort') == 'created_at'){
            $query = $query->orderBy('created_at', 'DESC');
        }elseif (request('sort') == 'price_asc'){
            $query = $query->orderBy('price', 'ASC');
        }elseif (request('sort') == 'price_desc'){
            $query = $query->orderBy('price', 'DESC');
        }elseif (request('sort') == 'mileage'){
            $query = $query->orderBy('mileage', 'ASC');
        }elseif (request('sort') == 'reg_year'){
            $query = $query->orderBy('year', 'DESC');
        }
        $query = $query->paginate(10);
        $autos = $query->appends(request()->query());

        $car_models = CarModel::all();
        $car_brands = CarBrand::all();
        $currencies = Currency::all();
        $cities = City::all();

        return view('site.pages.index', compact('autos', 'car_brands', 'currencies', 'cities','car_models'));
    }

    public function view($id)
    {
        $car = Car::findOrfail($id);
        $car->timestamps = false;
        $car->update(['visit' => $car->visit+1]);

        if($car->company_id) {
            //$cars = Car::where('company_id', $car->company_id)->paginate(12);
            $cars = Car::paginate(12);
        } else {
            //$cars = Car::where('car_brand_id', $car->car_brand_id)->paginate(12);
            $cars = Car::paginate(12);
        }

        $bookmarks =  unserialize(session('bookmarks'));
        $bookmarks = is_array($bookmarks) ? $bookmarks : [];

        if($car->company_id) {
            return view('site.pages.autos_autosalon', compact( 'car', 'cars', 'bookmarks'));
        } else {
            return view('site.pages.autos', compact( 'car', 'cars', 'bookmarks'));
        }
    }

    public function expire($id, Request $request)
    {
        $input = $request->all();
        $car = Car::where('id', $id)->where('pin_code', $input['pincode'])->get();
        if(!$car->isEmpty()) {
            return response()->json(['message' => 'PIN düzgün deyil.']);
        } else {
            return response()->json(['message' => 'PIN düzgün deyil.'], 422);
        }
    }

    public function edit($id, Request $request) {
        $input = $request->all();
        $car = Car::where('id', $id)->where('pin_code', $input['pincode'])->first();
        if($car) {
            $car_brands = CarBrand::all();
            $currencies = Currency::all();
            $cities = City::all();
            $transmissions = Transmission::all();
            $gears = Gear::all();
            $technical_specifications = TechnicalSpecification::all();
            $body_types = BodyType::all();
            $fuel_types = FuelType::all();
            $colors = Color::all();
            return view('site.pages.edit_car', compact('car_brands', 'currencies', 'cities', 'transmissions', 'gears', 'technical_specifications', 'body_types', 'fuel_types', 'colors', 'car'));
        } else {
            return back();
        }
    }

    public function addBookmark(Request $request,$id){
        $arr = [];
        if (session('bookmarks')){
            $arr = unserialize(session('bookmarks'));
            $arr = is_array($arr) ? $arr : [];
            array_push($arr, $id);
            session()->put('bookmarks',serialize(array_unique($arr)));
            session()->save();
        }else{
            session()->put('bookmarks',serialize([$id]));
            session()->save();
        }

        $js = "$('.js-bookmark-item-".$id."').addClass('hide');\n\n$('.js-unbookmark-item-".$id."').removeClass('hide');";
        return response($js, 200)
            ->header('Content-Type', 'text/javascript');
    }
    public function deleteBookmark($id){
        if (session('bookmarks')){
            $arr = unserialize(session('bookmarks'));
            if (is_array($arr)){
                $arr = array_unique($arr);

                $key = array_search($id,$arr);
                if ($key or $key == '0'){
                    unset($arr[$key]);
                }
                session()->put('bookmarks',serialize(array_unique($arr)));
                session()->save();
            }
        }
        $js = "$('.js-bookmark-item-".$id."').removeClass('hide');\n\n$('.js-unbookmark-item-".$id."').addClass('hide');";
        return response($js, 200)
            ->header('Content-Type', 'text/javascript');
    }

    public function search()
    {
        $car_brands = CarBrand::all();
        $currencies = Currency::all();
        $cities = City::all();
        $transmissions = Transmission::all();
        $gears = Gear::all();
        $technical_specifications = TechnicalSpecification::all();
        $body_types = BodyType::all();
        $fuel_types = FuelType::all();
        $colors = Color::all();

        $cars = Car::paginate();

        return view('site.pages.search', compact('cars', 'car_brands', 'currencies', 'cities', 'transmissions', 'gears', 'technical_specifications', 'body_types', 'fuel_types', 'colors'));
    }

    public function getCarModels($id)
    {
        if (!\request()->ajax()) return;
        $models = CarModel::where('car_brand_id', $id)->get();
        if ($models->count()) {
            return response()->json($models);
        }
        abort(404);
    }


    public function add()
    {
        $car_brands = CarBrand::all();
        $currencies = Currency::all();
        $cities = City::all();
        $transmissions = Transmission::all();
        $gears = Gear::all();
        $technical_specifications = TechnicalSpecification::all();
        $body_types = BodyType::all();
        $fuel_types = FuelType::all();
        $colors = Color::all();


        return view('site.pages.add_car', compact('car_brands', 'currencies', 'cities', 'transmissions', 'gears', 'technical_specifications', 'body_types', 'fuel_types', 'colors'));
    }

    public function store(AddCarRequest $request)
    {

        $data = $request->all();
        $car = Car::create($data);

        $path = public_path('uploads/'.$car->id);
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        foreach ($request->get('images') as $image) {
            File::move(public_path('uploads/'.$image), public_path('uploads/'.$car->id.'/'.$image));
            CarImage::create([
                'car_id'    => $car->id,
                'image'     => $car->id.'/'.$image
            ]);
        }
        return redirect(route('autos/success', $car->id));
    }

    public function success($id)
    {
        $car = Car::findOrFail($id);
        return view('site.pages.success', compact('car'));
    }

    public function checkNumber(PhoneGsmRequest $request)
    {
//        \session(['phone' => $request->get('phone')]);
//        $phone = $request->get('phone');

        \session()->put('phone', $request->get('phone'));
        \session()->save();

        $counts_html = '<div class="text-success">'. __('front.you'). ' '. $request->get('phone'). ' '. __('front.one_post_with_this_number').'</div>';
        return ['valid' => true, 'phone' => $request->get('phone'), 'counts_html' => $counts_html, 'desc_html' => 'Sagol', "left" => ["total" => 1, "free" => 1, "paid" => 0]];

    }


    public function pond(Request $request)
    {
        $arr = [];
        foreach ($request->file('images') as $image) {
            $filename = $image->store('', ['disk' => 'uploads']);
            $arr[] = $filename;
        }

        Image::make(public_path('uploads/'.$filename))->fit(150, 120)->save(public_path('uploads/thumbs/'.$filename), 80, 'jpg');

        return '<div class="pond-img"><div class="pond-img-thumb-container"><a target="_blank"><img class="pond-img-thumb" src="'.url('uploads/thumbs/'.$filename).'" /></a></div><div class="pond-img-actions"><a class="pond-img-delete" href="#" title="Silmək"></a><a class="pond-img-rotate" href="/pond/rotate?angle=90&amp;id=2020%2F05%2F07%2F15%2F31%2F44%2Fd0b0862a-c92a-41f7-8bd9-0295104f8e55%2F75514_ognngdFpUzptvlee6JXb8A.jpg">↻</a><a class="pond-img-rotate" href="/pond/rotate?angle=-90&amp;id=2020%2F05%2F07%2F15%2F31%2F44%2Fd0b0862a-c92a-41f7-8bd9-0295104f8e55%2F75514_ognngdFpUzptvlee6JXb8A.jpg">↺</a></div><input name="images[]" type="hidden" value="'.$filename.'" /></div>';
    }

    protected function searchWhere(){
        $filter = [];

        if (request('price_max'))  $filter[] = ['price', '<=', request('price_max')];
        if (request('price_min'))  $filter[] = ['price', '>=', request('price_min')];
        if (request('min_mileage'))  $filter[] = ['mileage', '>=', request('min_mileage')];
        if (request('max_mileage'))  $filter[] = ['mileage', '<=', request('max_mileage')];
        if (request('min_engine_volume'))  $filter[] = ['engine_volume', '>=', request('min_engine_volume')];
        if (request('max_engine_volume'))  $filter[] = ['engine_volume', '<=', request('max_engine_volume')];
        if (request('max_year'))  $filter[] = ['year', '<=', request('max_year')];
        if (request('min_year'))  $filter[] = ['year', '>=', request('min_year')];
        if (request('car_brand_id'))  $filter[] = ['car_brand_id', '=',request('car_brand_id')];
        if (request('car_model_id'))  $filter[] = ['car_model_id', '=',request('car_model_id')];
        if (request('fuel_type_id'))  $filter[] = ['fuel_type_id', '=',request('fuel_type_id')];
        if (request('body_type_id'))  $filter[] = ['body_type_id', '=',request('body_type_id')];
        if (request('transmission_id'))  $filter[] = ['transmission_id', '=',request('transmission_id')];
        if (request('color'))  $filter[] = ['color_id', '=',request('color')];
        if (request('gear'))  $filter[] = ['gear_id', '=',request('gear')];
        if (request('currency_id'))  $filter[] = ['currency_id', '=',request('currency_id')];
        if (request('barter'))  $filter[] = ['barter', '=',request('barter')];
        if (request('credit'))  $filter[] = ['credit', '=',request('credit')];
        if (request('deposit'))  $filter[] = ['deposit', '=',request('deposit')];
        if (request('city_id'))  $filter[] = ['city_id', '=',request('city_id')];

        if (request('used') == '1')  $filter[] = ['mileage' , '>' , 0]; elseif (request('used') == '0') $filter[] = ['mileage' , '=' , 0];

        return array_filter($filter);

    }


}
