<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechnicalSpecification;
use Illuminate\Http\Request;

class TechnicalSpecificationController extends Controller
{
    public function __construct()
    {
         $this->middleware('permission:technical-specification-list|technical-specification-create|technical-specification-edit|technical-specification-delete', ['only' => ['index','store']]);
         $this->middleware('permission:technical-specification-create', ['only' => ['create','store']]);
         $this->middleware('permission:technical-specification-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:technical-specification-delete', ['only' => ['destroy']]);
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

        $query = TechnicalSpecification::query();

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new TechnicalSpecification(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        $technical_specifications = $query->appends(request()->query());

        return view('admin.pages.technical_specification.index', compact('technical_specifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.technical_specification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        TechnicalSpecification::create($data);

        return redirect(route('admin.technical_specification.index'))->with(_sessionmessage());
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
        $technical_specification = TechnicalSpecification::findOrFail($id);
        return view('admin.pages.technical_specification.edit', compact('technical_specification'));
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
        $updateTechnicalSpecs = $request->all();
        $specs = TechnicalSpecification::findOrFail($id);
        $specs->update($updateTechnicalSpecs);

        return redirect(route('admin.technical_specification.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTechnicalSpecs = TechnicalSpecification::findOrFail($id);
        $deleteTechnicalSpecs->delete();

        $arr = _sessionmessage(null,null,null,true);

        return response($arr);
    }

    protected function searchWhere(){

        $filter = [

            (request('name'))      ? ['name', 'like', '%'.request('name').'%'] : null,
            (request('status') or request('status') == '0')    ? ['status', '=',request('status')] : null

        ];
        return array_filter($filter);
    }
}
