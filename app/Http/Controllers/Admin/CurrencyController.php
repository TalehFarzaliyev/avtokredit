<?php

/**
 * Rauf Abbas
 * rafo.abbas@gmail.com
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyStoreRequest;
use App\Http\Requests\CurrencyUpdateRequest;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function __construct()
    {
         $this->middleware('permission:currency-list|currency-create|currency-edit|currency-delete', ['only' => ['index','store']]);
         $this->middleware('permission:currency-create', ['only' => ['create','store']]);
         $this->middleware('permission:currency-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:currency-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $column = request('column','id');
        $order = request('order','DESC');

        $query = Currency::query();

        $query = $query->where($this->getWhereArray());

        if (in_array($column, getFillable(new Currency(),'updated_at')) and in_array($order,['ASC','DESC'])){
            $query = $query->orderBy($column,$order);
        }



        $query = $query->paginate(10);

        $currencies = $query->appends(request()->query());

        return  view('admin.pages.currency.index',compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CurrencyStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurrencyStoreRequest $request)
    {
        //dd($request->all());
        Currency::create($request->all());
        return redirect(route('admin.currency.index'))->with(_sessionmessage());
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
     * @param  Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return view('admin.pages.currency.edit',compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CurrencyUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CurrencyUpdateRequest $request, $id)
    {
        $currency = Currency::findOrFail($id);
        $currency->update($request->all());
        return redirect(route('admin.currency.index'))->with(_sessionmessage());

    }

    /**
     * @param Currency $currency
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();
        $arr = _sessionmessage(null,null,null,true);
        return response($arr);
    }

    /**
     * Axtaris da istifade olan deyişenler burada toplanır
     * @return array
     */
    protected function getWhereArray(){

        $filter = [
            (request('title')) ? ['title', 'like', '%'.request('title').'%'] : null,
            (request('code'))  ? ['code', 'like', '%'.request('code').'%'] : null,
            (request('value'))     ? ['value', 'like', '%'.request('value').'%'] : null,
            ((request('status') or request('status') == '0'))    ? ['status', '=',request('status')] : null
        ];

        return array_filter($filter);
    }
}
