<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyGroup;
use Illuminate\Support\Facades\Hash;


class CompanyController extends Controller
{

    public function __construct()
    {
         $this->middleware('permission:company-list|company-create|company-edit|company-delete', ['only' => ['index','store']]);
         $this->middleware('permission:company-create', ['only' => ['create','store']]);
         $this->middleware('permission:company-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:company-delete', ['only' => ['destroy']]);
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

        $query = Company::query();

        $query = request('slogan') ? $query->whereTranslationLike('slogan','%'.request('slogan').'%') : $query;

        $query = request('description') ? $query->whereTranslationLike('description','%'.request('description').'%') : $query;


        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new Company(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);

        $companies = $query->appends(request()->query());

        $company_groups = CompanyGroup::where('status',1)->get();

        return view('admin.pages.company.index', compact('companies','company_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_groups = CompanyGroup::where('status',1)->get();
        return view('admin.pages.company.create',compact('company_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->company_validate(null));
        $location = $request->only(['location_lat', 'location_lng']);
        $location = json_encode($location);
        $data = $request->all();
        $data['location'] = $location;

        if ($request->file('image'))
        {
            $data['image'] = request('image')->store('',['disk' => 'uploads']);
        }
        if ($request->file('cover_image')) {
            $data['cover_image'] = request('cover_image')->store('',['disk' => 'uploads']);
        }

        $data['password'] = Hash::make($data['password']);

        Company::create($data);

        return redirect(route('admin.company.index'))->with(_sessionmessage());
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
        $company = Company::findOrFail($id);
        $company_groups = CompanyGroup::where('status',1)->get();
        $location = json_decode($company->location, true);
        return view('admin.pages.company.edit', compact('company','company_groups','location'));
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
        $request->validate($this->company_validate(1));

        $company = Company::findOrFail($id);

        $data = $request->all();
        unset($data['password']);

        if ($request->file('image'))
        {
            $request->validate([
                'image'=> 'required|mimes:jpeg,jpg,bmp,png|max:3000',
            ]);
            $data['image'] = request('image')->store('',['disk' => 'uploads']);
        }
        if ($request->file('cover_image')) {
            $request->validate([
                'cover_image'=> 'required|mimes:jpeg,jpg,bmp,png|max:3000',
            ]);
            $data['cover_image'] = request('cover_image')->store('',['disk' => 'uploads']);

        }
        if ($request->get('password')){
            $request->validate([
                'password' => 'required|confirmed|min:6',
            ]);
            $company->update(['password' => Hash::make($request->get('password'))]);
        }


        $company->update($data);

        return redirect(route('admin.company.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::findOrFail($id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function company_validate($update)
    {
        if ($update) {
           $validate_arr = [
            'status' => 'required|boolean',
            'name'=> 'required',
            'location_lat'=> 'required',
            'location_lng'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'visit'=> 'required',
            'company_group_id'=> 'required',
        ];
        }else{
        $validate_arr = [
            'status' => 'required|boolean',
            'name'=> 'required',
            'location_lat'=> 'required',
            'location_lng'=> 'required',
            'image'=> 'required|mimes:jpeg,jpg,bmp,png|max:3000',
            'cover_image'=> 'required|mimes:jpeg,jpg,bmp,png|max:3000',
            'email'=> 'required',
            'password' => 'required|confirmed|min:6',
            'phone'=> 'required',
            'visit'=> 'required',
            'company_group_id'=> 'required',
        ];
        }
        foreach (langs_get_code_name() as $key => $lang)
        {
            $validate_arr['slogan:' . $key] = 'required|string|max:50';
            $validate_arr['description:' . $key] = 'required';
            $validate_arr['working_days:' . $key] = 'required';
            $validate_arr['address:' . $key] = 'required';

        }

        return $validate_arr;
    }

    protected function searchWhere(){
        $filter = [];

       if (request('name'))  $filter[] = ['name', 'like', '%'.request('name').'%'];
        if (request('address'))  $filter[] = ['address', 'like','%'.request('address').'%'];
        if (request('email'))  $filter[] = ['email', 'like','%'.request('email').'%'];
        if (request('phone'))  $filter[] = ['phone', 'like','%'.request('phone').'%'];
        if (request('visit'))  $filter[] = ['visit', 'like','%'.request('visit').'%'];
        if (request('working_days'))  $filter[] = ['working_days', 'like','%'.request('working_days').'%'];
        if (request('company_group_id'))  $filter[] = ['company_group_id', '=',request('company_group_id')];
        if (request('status'))  $filter[] = ['status', '=',request('status')];
        return $filter;

    }
}
