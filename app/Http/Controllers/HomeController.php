<?php

namespace App\Http\Controllers;

use App\Models\BodyType;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\Color;
use App\Models\Currency;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Gear;
use App\Models\Page;
use App\Models\TechnicalSpecification;
use App\Models\Transmission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('setlocale');
    }

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


        $query = $query->paginate(10);


        $autos = $query->appends(request()->query());
        $car_models = CarModel::all();
        $car_brands = CarBrand::all();
        $currencies = Currency::all();
        $cities = City::all();

        return view('site.pages.index', compact('car_brands','car_models', 'currencies', 'cities', 'autos'));
    }

    public function bookmarks()
    {
        $arr = unserialize(session('bookmarks'));
        $arr = is_array($arr) ? $arr : [];

        $autos = Car::whereIn('id', $arr)->get();
        return view('site.pages.bookmarks', compact('autos'));

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

        return array_filter($filter);

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

        return view('site.pages.search', compact('car_brands', 'currencies', 'cities', 'transmissions', 'gears', 'technical_specifications', 'body_types', 'fuel_types', 'colors'));
    }

    public function autos()
    {
        $company = 1;

        if($company) {
            return view('site.pages.autos_company');
        }
        return view('site.pages.autos');
    }



    public function taxi()
    {
        return view('site.pages.company');
    }

    public function autosalons()
    {
        return view('site.pages.autosalon');
    }

    public function autosalon_inner()
    {
        return view('site.pages.autosalon_inner');
    }

//    public function ajax(Request $request)
//    {
//        $car_models= CarModel::where('car_brand_id',$request->brand_id)->get();
//        return \Response::json($car_models);
//    }

    public function page($slug)
    {
        $page = Page::whereTranslation('slug', $slug)->first();

        return view('site.pages.page', compact('page'));
    }
}
