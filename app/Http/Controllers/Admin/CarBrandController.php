<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarBrand;
use App\Http\Requests\CarBrandRequest;
use Illuminate\Support\Facades\DB;



class CarBrandController extends Controller
{
    public function __construct()
    {
         $this->middleware('permission:car-brand-list|car-brand-create|car-brand-edit|car-brand-delete', ['only' => ['index','show']]);
         $this->middleware('permission:car-brand-create', ['only' => ['create','store']]);
         $this->middleware('permission:car-brand-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:car-brand-delete', ['only' => ['destroy']]);
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

        $query = CarBrand::query();

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new Carbrand(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        //dd(DB::getQueryLog()); // Show results of log

        $car_brands = $query->appends(request()->query());

        return view('admin.pages.car_brand.index', compact('car_brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.car_brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarBrandRequest $request)
    {
        $allrequest = $request->all();
        CarBrand::create($allrequest);
        return redirect(route('admin.car_brand.index'))->with(_sessionmessage());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CarBrand $car_brand)
    {
        return view('admin.pages.car_brand.edit',compact('car_brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarBrandRequest $request, CarBrand $car_brand)
    {
        $all_request = $request->all();
        $car_brand->update($all_request);
        return redirect(route('admin.car_brand.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_brand = CarBrand::findOrFail($id);
        $car_brand->delete();

        $arr = _sessionmessage(null,null,null,true);

        return response($arr);
    }

    protected function searchWhere(){

        $filter = [

            (request('name'))      ? ['name', 'like', '%'.request('name').'%'] : null,
            (!is_null(request('status')))    ? ['status', '=', request('status')] : null

        ];

        return array_filter($filter);
    }
}
