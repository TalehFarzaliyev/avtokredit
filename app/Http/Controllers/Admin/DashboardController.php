<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Car;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $count = [
            'enable'    => Car::where('status', 1)->count(),
            'disable'    => Car::where('status', 0)->count(),
            'company'   => Company::where('status', 1)->count()
        ];
        return view('admin.index', compact('count'));
    }
}
