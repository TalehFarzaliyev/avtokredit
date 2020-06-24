<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\Gear;
use Illuminate\Http\Request;

class GearController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:gear-list|gear-create|gear-edit|gear-delete', ['only' => ['index','store']]);
        $this->middleware('permission:gear-create', ['only' => ['create','store']]);
        $this->middleware('permission:gear-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:gear-delete', ['only' => ['destroy']]);
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

        $query = Gear::query();

        $query = request('name') ? $query->whereTranslationLike('name','%'.request('name').'%') : $query;

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new Gear(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        //dd(DB::getQueryLog()); // Show results of log

        $gears = $query->appends(request()->query());

        return view('admin.pages.gear.index', compact('gears'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.gear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->gear_validate());

        $gear = $request->all();

        Gear::create($gear);

        return redirect(route('admin.gear.index'))->with(_sessionmessage());
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
        $gear = Gear::findOrFail($id);
        return view('admin.pages.gear.edit', compact('gear'));
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
        $request->validate($this->gear_validate());

        $gear = Gear::findOrFail($id);

        $gears = $request->all();

        $gear->update($gears);

        return redirect(route('admin.gear.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gear::findOrFail($id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function gear_validate()
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
