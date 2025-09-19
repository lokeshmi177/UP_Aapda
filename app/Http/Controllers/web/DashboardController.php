<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        return view('dashboard.index');
    }

    public function district(Request $request){

        $district=District::get();

        dd($district->toArray());
    }
}
