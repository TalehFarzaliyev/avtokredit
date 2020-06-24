<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\CarBrand;
use App\Http\Requests\CarModelRequest;


class CarModelController extends Controller
{
    public function __construct()
    {
         $this->middleware('permission:car-model-list|car-model-create|car-model-edit|car-model-delete', ['only' => ['index','store']]);
         $this->middleware('permission:car-model-create', ['only' => ['create','store']]);
         $this->middleware('permission:car-model-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:car-model-delete', ['only' => ['destroy']]);
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

        $query = CarModel::query();

        $query = $query->with('car_brand')->where($this->searchWhere());

        if (in_array($column, getFillable(new CarModel(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        $car_models = $query->appends(request()->query());

        $car_brands = CarBrand::all();

        return view('admin.pages.car_model.index', compact('car_models', 'car_brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_brands = CarBrand::where('status',1)->get();
        return view('admin.pages.car_model.create',compact('car_brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarModelRequest $request)
    {
        $all_request = $request->all();
        CarModel::create($all_request);
        return redirect(route('admin.car_model.index'))->with(_sessionmessage());
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
     * @param CarModel $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Carmodel $car_model)
    {
        $car_brands = CarBrand::where('status',1)->get();
        return view('admin.pages.car_model.edit',compact('car_brands','car_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarModelRequest $request
     * @param CarModel $car_model
     * @return \Illuminate\Http\Response
     */
     public function update(CarModelRequest $request, CarModel $car_model)
    {
        $all_request = $request->all();
        $car_model->update($all_request);
        return redirect(route('admin.car_model.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CarModel $car_model
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(CarModel $car_model)
    {
        $car_model->delete();
        $arr = _sessionmessage(null,null,null,true);
        return response($arr);
    }

    protected function searchWhere(){

        $filter = [
            (request('name'))      ? ['name', 'like', '%'.request('name').'%'] : null,
            (request('car_brand_id'))    ? ['car_brand_id', '=',request('car_brand_id')] : null,
            (!is_null(request('status')))    ? ['status', '=',request('status')] : null
        ];

        return array_filter($filter);
    }
    public function ajax(Request $request){
    $car_models= CarModel::where('car_brand_id',$request->brand_id)->get();
    return \Response::json($car_models);
    }
}
