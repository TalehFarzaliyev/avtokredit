<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyGroup;
use Illuminate\Http\Request;

class CompanyGroupController extends Controller
{

    public function __construct()
    {
         $this->middleware('permission:company_group-list|company_group-create|company_group-edit|company_group-delete', ['only' => ['index','store']]);
         $this->middleware('permission:company_group-create', ['only' => ['create','store']]);
         $this->middleware('permission:company_group-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:company_group-delete', ['only' => ['destroy']]);
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

        $query = CompanyGroup::query();

        $query = request('name') ? $query->whereTranslationLike('name','%'.request('name').'%') : $query;

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new CompanyGroup(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);


        $company_groups = $query->appends(request()->query());

        return view('admin.pages.company.group.index', compact('company_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.company.group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->company_group_validate());

        $company_group = $request->all();

        CompanyGroup::create($company_group);

        return redirect(route('admin.company_group.index'))->with(_sessionmessage());
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
        $company_group = CompanyGroup::findOrFail($id);
        return view('admin.pages.company.group.edit', compact('company_group'));
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
        $request->validate($this->company_group_validate());

        $company_group = CompanyGroup::findOrFail($id);

        $company_groups = $request->all();

        $company_group->update($company_groups);

        return redirect(route('admin.company_group.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyGroup::findOrFail($id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function company_group_validate()
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
