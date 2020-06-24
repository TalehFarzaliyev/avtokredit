<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{

    public function __construct()
    {
         $this->middleware('permission:transmission-list|transmission-create|transmission-edit|transmission-delete', ['only' => ['index','store']]);
         $this->middleware('permission:transmission-create', ['only' => ['create','store']]);
         $this->middleware('permission:transmission-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:transmission-delete', ['only' => ['destroy']]);
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

        $query = Transmission::query();

        $query = request('name') ? $query->whereTranslationLike('name','%'.request('name').'%') : $query;

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new Transmission(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        //dd(DB::getQueryLog()); // Show results of log

        $transmissions = $query->appends(request()->query());

        return view('admin.pages.transmission.index', compact('transmissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.transmission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->transmission_validate());

        $transmission = $request->all();

        Transmission::create($transmission);

        return redirect(route('admin.transmission.index'))->with(_sessionmessage());
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
        $transmission = Transmission::findOrFail($id);
        return view('admin.pages.transmission.edit', compact('transmission'));
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
        $request->validate($this->transmission_validate());

        $transmission = Transmission::findOrFail($id);

        $transmissions = $request->all();

        $transmission->update($transmissions);

        return redirect(route('admin.transmission.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transmission::findOrFail($id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function transmission_validate()
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
