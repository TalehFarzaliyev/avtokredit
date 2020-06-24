<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FuelType;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:fuel-type-list|fuel-type-create|fuel-type-edit|fuel-type-delete', ['only' => ['index','store']]);
        // $this->middleware('permission:fuel-type-create', ['only' => ['create','store']]);
        // $this->middleware('permission:fuel-type-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:fuel-type-delete', ['only' => ['destroy']]);
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

        $query = FuelType::query();

        $query = request('name') ? $query->whereTranslationLike('name','%'.request('name').'%') : $query;

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new FuelType(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        //dd(DB::getQueryLog()); // Show results of log

        $fuel_type = $query->appends(request()->query());

        return view('admin.pages.fuel-type.index', compact('fuel_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.fuel-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->fuel_type_validate());

        $fuel_type = $request->all();

        FuelType::create($fuel_type);

        return redirect(route('admin.fuel-type.index'))->with(_sessionmessage());
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
        $fuel = FuelType::findOrFail($id);
        return view('admin.pages.fuel-type.edit', compact('fuel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->fuel_type_validate());

        $fuel = FuelType::findOrFail($id);

        $fuels = $request->all();

        $fuel->update($fuels);

        return redirect(route('admin.fuel-type.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FuelType::findOrFail($id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function fuel_type_validate()
    {
        $validate_arr = [
            'status' => 'required|boolean'
        ];

        foreach (langs_get_code_name() as $key => $lang)
        {
            $validate_arr['name:' . $key] = 'required|string|max:50';
        }

        return $validate_arr;
    }

    protected function searchWhere(){

        $filter = [

            (!is_null(request('status')))    ? ['status', '=', request('status')] : null

        ];

        return array_filter($filter);
    }
}
