<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{

    public function __construct()
    {
         $this->middleware('permission:colors-list|colors-create|colors-edit|colors-delete', ['only' => ['index','store']]);
         $this->middleware('permission:colors-create', ['only' => ['create','store']]);
         $this->middleware('permission:colors-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:colors-delete', ['only' => ['destroy']]);
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

        $query = Color::query();

        $query = request('name') ? $query->whereTranslationLike('name','%'.request('name').'%') : $query;

        $query = $query->where($this->searchWhere());

        if (in_array($column, getFillable(new Color(),'created_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }

        $query = $query->paginate(10);
        //dd(DB::getQueryLog()); // Show results of log

        $colors = $query->appends(request()->query());

        return view('admin.pages.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->color_validate());

        $color = $request->all();

        Color::create($color);

        return redirect(route('admin.color.index'))->with(_sessionmessage());
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
     * @param  Color $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('admin.pages.colors.edit', compact('color'));
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
        $request->validate($this->color_validate());

        $color = Color::findOrFail($id);

        $colors = $request->all();

        $color->update($colors);

        return redirect(route('admin.color.index'))->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Color $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        $color->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function color_validate()
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
