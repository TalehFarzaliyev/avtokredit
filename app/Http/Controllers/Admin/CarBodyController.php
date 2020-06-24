<?php

/**
 * Rauf Abbas
 * rafo.abbas@gmail.com
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarBodyRequest;
use App\Models\CarBody;
use Illuminate\Http\Request;

class CarBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('permission:car-body-list|car-body-create|car-body-edit|car-body-delete', ['only' => ['index','store']]);
         $this->middleware('permission:car-body-create', ['only' => ['create','store']]);
         $this->middleware('permission:car-body-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:car-body-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $column = request('column','id');
        $order = \request('order','DESC');

        $query = CarBody::query();

        $query = $query->where($this->getWhereArray());

        if (in_array($column, getFillable(new CarBody(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);

        $car_bodies = $query->appends(request()->query());

        return  view('admin.pages.car_body.index',compact('car_bodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.car_body.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CarBodyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarBodyRequest $request)
    {
        $data = $request->all();
        CarBody::create($data);
        return  redirect(route('admin.car_body.index'))->with(_sessionmessage());
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
    public function edit($id)
    {
        $car_body = CarBody::findOrFail($id);
        return  view('admin.pages.car_body.edit',compact('car_body'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CarBodyRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarBodyRequest $request, $id)
    {
        $data = $request->all();
        $car_body = CarBody::findOrFail($id);
        $car_body->update($data);
        return  redirect(route('admin.car_body.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_body = CarBody::findOrFail($id);
        $car_body->delete();
        $arr = _sessionmessage(null,null,null,true);
        return response($arr);
    }

    /**
     * Axtaris da istifade olan deyişenler burada toplanır
     * @return array
     */
    protected function getWhereArray()
    {
        $filter = [
            (request('name'))      ? ['name', 'like', '%'.request('name').'%'] : null,
            (request('status') or request('status') == '0')    ? ['status', '=',request('status')] : null
        ];

        return array_filter($filter);
    }
}
