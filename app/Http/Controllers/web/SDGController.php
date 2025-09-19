<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SDGController extends Controller
{
    public function sdg(){

        return view('sdg.index');
    }

    public function sdg_form(Request $request){

        if($request->isMethod('get')){

            return view('sdg.register');
        }
        else{

            
        }
    }
}
