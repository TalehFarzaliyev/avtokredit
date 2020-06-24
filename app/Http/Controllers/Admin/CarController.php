<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\BodyType;
use App\Models\Company;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Transmission;
use App\Models\Gear;
use App\Models\Color;
use App\Models\Currency;
use App\Models\CarImage;
use App\Models\TechnicalSpecification;
use App\Http\Requests\CarRequest;
use App\Http\Requests\CarUpdateRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class CarController extends Controller
{
    public function __construct()
    {
         $this->middleware('permission:car-list|car-create|car-edit|car-delete', ['only' => ['index','store']]);
         $this->middleware('permission:car-create', ['only' => ['create','store']]);
         $this->middleware('permission:car-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:car-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $column = \request('column','id');
        $order = \request('order','DESC');

        $query = Car::query();

        $query = $query->with('car_brand')
                        ->with('car_model')
                        ->with('color')
                        ->with('fuel_type')
                        ->with('body_type')
                        ->with('city')
                        ->with('company')
                        ->with('currency')
                        ->with('city')
                        ->with('transmission')
                        ->with('gear')
                        ->where($this->searchWhere());


        if (in_array($column, getFillable(new car(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);


        $cars = $query->appends(request()->query());
        $car_brands = CarBrand::where('status',1)->get();
        $car_models = CarModel::where('status',1)->get();
        $colors = Color::where('status',1)->get();

        //dd($cars);

        return view('admin.pages.car.index', compact('cars','car_brands','car_models','colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_brands = CarBrand::where('status',1)->get();
        $car_models = CarModel::where('status',1)->get();
        $body_types = BodyType::where('status',1)->get();
        $companies = Company::where('status',1)->get();
        $cities = City::where('status',1)->get();
        $fuel_types = FuelType::where('status',1)->get();
        $colors = Color::where('status',1)->get();
        $transmissions = Transmission::where('status',1)->get();
        $gears = Gear::where('status',1)->get();
        $currencies = Currency::where('status',1)->get();
        $technical_specifications = TechnicalSpecification::where('status',1)->get();
        return view('admin.pages.car.create',compact('car_brands','car_models','body_types','companies','cities','fuel_types','colors','transmissions', 'gears', 'currencies','technical_specifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {

        $data = $request->all();


        //dd($data);

        $car= Car::create($data);

        $path = public_path('uploads/'.$id);
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        foreach ($request->file('images') as $image) {
            $filename = $image->store($id, ['disk' => 'uploads']);
            CarImage::create([
                'car_id'=> $car->id,
                'image' => $filename
            ]);
            Image::make(public_path('uploads/'.$filename))->fit(360, 270)->save(public_path('uploads/thumbs/'.$filename), 80, 'jpg');
        }
        // }

        return redirect(route('admin.car.index'))->with(_sessionmessage());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $edit_models = CarModel::where('car_brand_id',$car->car_brand_id)->get();
        $images = CarImage::where('car_id',$id)->get();
        $car_brands = CarBrand::where('status',1)->get();
        $car_models = CarModel::where('status',1)->get();
        $body_types = BodyType::where('status',1)->get();
        $companies = Company::where('status',1)->get();
        $cities = City::where('status',1)->get();
        $fuel_types = FuelType::where('status',1)->get();
        $colors = Color::where('status',1)->get();
        $transmissions = Transmission::where('status',1)->get();
        $gears = Gear::where('status',1)->get();
        $currencies = Currency::where('status',1)->get();
        $technical_specifications = TechnicalSpecification::where('status',1)->get();
        return view('admin.pages.car.edit',compact('car','car_brands','car_models','body_types','companies','cities','fuel_types','colors', 'gears', 'transmissions','currencies','technical_specifications','images','edit_models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarUpdateRequest $request, $id)
    {



        $car = Car::findOrFail($id);

        $data = $request->all();

        //dd($data);

        $path = public_path('uploads/'.$id);
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        if ($request->file('images'))
        {
            $request->validate([
                'images.*'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000' //multi image validate Rauf
            ]);

            foreach ($request->file('images') as $image) {
                $filename = $image->store($id, ['disk' => 'uploads']);
                CarImage::create([
                    'car_id'=> $car->id,
                    'image' => $filename
                ]);

                Image::make(public_path('uploads/'.$filename))->fit(360, 270)->save(public_path('uploads/thumbs/'.$filename), 80, 'jpg');
            }

        }

        $car->update($data);

        return redirect(route('admin.car.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::findOrFail($id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }



   protected function searchWhere(){
        $filter = [];

       if (request('mileage'))  $filter[] = ['mileage', 'like', '%'.request('mileage').'%'];
        if (request('price'))  $filter[] = ['price', 'like','%'.request('price').'%'];
        if (request('email'))  $filter[] = ['email', 'like','%'.request('email').'%'];
        if (request('power'))  $filter[] = ['power', 'like','%'.request('power').'%'];
        if (request('description'))  $filter[] = ['description', 'like','%'.request('description').'%'];
        if (request('phone'))  $filter[] = ['phone', 'like','%'.request('phone').'%'];
        if (request('year'))  $filter[] = ['year', 'like','%'.request('year').'%'];
        if (request('name'))  $filter[] = ['name', 'like','%'.request('name').'%'];
        if (request('phone'))  $filter[] = ['phone', 'like','%'.request('phone').'%'];
        if (request('car_brand_id'))  $filter[] = ['car_brand_id', '=',request('car_brand_id')];
        if (request('car_model_id'))  $filter[] = ['car_model_id', '=',request('car_model_id')];
        if (request('color_id'))  $filter[] = ['color_id', '=',request('color_id')];
        if (request('status'))  $filter[] = ['status', '=',request('status')];
        return $filter;

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function image_delete(Request $request){
        $car_image = CarImage::find($request->id);
        $car_image->delete();
        return response(['status' => true]);
    }
}
