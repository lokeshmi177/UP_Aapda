<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('get')) {

            return view('login.index');
        } else {
            // dd($request->all());
            $validation = Validator::make($request->all(), [

                'email' => 'required|email',
                'password' => 'required'

            ], [

                'email.required' => 'Email is required',
                'email.email' => 'Please enter a valid email address',
                'password.required' => 'Password is required',
            ]);

            if ($validation->fails()) {

                return response()->json([

                    'status' => 'error',
                    'errors' => $validation->errors()
                ], 422);
            }

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {

                return response()->json([

                    'status' => 'error',
                    'errors' => [
                        'email' => ['Invalid email or password'],
                    ]
                ], 401);
            }

            $request->session()->put('user_id', $user->id);

            return response()->json([

                'status' => 'success',
                'redirect_url' => url('admin/dashboard')
            ]);
        }
    }

    public function forgotPasswordCheck(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return response()->json([
                'status' => false,
                'message' => 'Email not found',
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Email found proceed to send otp',
        ]);
    }

    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return response()->json([
                'status' => false,
                'message' => 'Email not found',
            ]);
        }

        $user->otp = '12345';
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'OTP send successfully',
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || $user->otp !== $request->otp) {
            return response()->json([
                'status' => false,
                'message' => 'OInvalid otp',
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'OTP verified successfully',
        ]);
    }

    public function resetPassword(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'otp' => 'required',
            'password' => 'required|confirmed|min:8',
        ], [
            'email.required' => 'Email is mandatory.',
            'email.email' => 'Enter a valid email.',
            'otp.required' => 'OTP is required.',
            'password.required' => 'Enter correct password.',
            'password.confirmed' => 'Password and Confirm Password do not match.',
            'password.min' => 'Password must contain at least 8 characters.',
        ]);

        $validator->after(function ($validator) use ($request) {
            $password = $request->password;

            if (!preg_match('/[A-Z]/', $password)) {
                $validator->errors()->add('password', 'Password must contain at least one uppercase letter.');
            }
            if (!preg_match('/[0-9]/', $password)) {
                $validator->errors()->add('password', 'Password must contain at least one number.');
            }
            if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
                $validator->errors()->add('password', 'Password must contain at least one special character.');
            }
        });

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Valdation failed',
            ]);
        }

        $user = User::where('email', $request->email)->first();
        if (! $user) {
            return response()->json([
                'status' => false,
                'message' => 'Email not found',
            ]);
        }

        if ($user->otp !== $request->otp) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid otp',
            ]);
        }

        $user->password1 = $request->password;
        // dd($user->password1);
        Log::info('Before saving user', ['password1' => $user->password1]);

        $user->password = Hash::make($request->password);
        $user->otp = null;
        $user->save();
        // dd($user);
    // Log::info('User after password reset:', ['user' => $user]);

        return response()->json([
            'status' => true,
            'message' => 'Password reset successfully',
        ]);
    }
}
