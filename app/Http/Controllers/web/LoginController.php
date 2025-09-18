<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('get')){

        return view('login.index');
        }

        else{
            // dd($request->all());
            $validation=Validator::make($request->all(),[

                'email'=>'required|email',
                'password'=>'required'

            ],[

                'email.required'=>'Email is required',
                'email.email'=>'Please enter a valid email address',
                'password.required'=>'Password is required',
            ]);

            if($validation->fails()){

                return response()->json([

                    'status'=>'error',
                    'errors'=>$validation->errors()
                ],422);
            }

            $user=User::where('email', $request->email)->first();

            if(!$user || !Hash::check($request->password,$user->password)){

                return response()->json([

                    'status'=>'error',
                    'errors'=>[
                        'email'=>['Invalid email or password'],
                    ]
                    ],401);
            }

        $request->session() ->put('user_id',$user->id);
        
        return response()->json([

            'status'=>'success',
            'redirect_url'=>url('admin/dashboard')
        ]);
        
    }
}
}
