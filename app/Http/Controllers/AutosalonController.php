<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Car;

use Illuminate\Http\Request;

class AutosalonController extends Controller
{
    public function index()
    {
        $autosalons = Company::where('company_group_id', 1)->get();
        $distributors = Company::where('company_group_id', 2)->get();
        return view('site.pages.autosalon', compact('autosalons', 'distributors'));
    }

    public function taxi()
    {
        $companies = Company::where('company_group_id', 3)->get();
        return view('site.pages.taxi', compact('companies'));
    }

    public function view($id)
    {
        $autosalon = Company::findOrFail($id);
        $autosalon->timestamps = false;
        $autosalon->update(['visit' => $autosalon->visit+1]);
        $autos = Car::where('company_id', $id)->where('status', 1)->paginate(10);
        return view('site.pages.autosalon_inner', compact('autosalon', 'autos'));
    }
}
