<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function auth_page()
    {
        return view('backsite.auth');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'unique:users, email'],
            'name' => ['required'],
            'password' => ['required']
        ]);
        if($validator->fails()) {
            $errors = [];
            foreach($validator->errors()->messages() as $error) {
                foreach($error as $err) {
                    array_push($errors, $err);
                }
            }

            return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        }

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password)
        ]);
        $credentials = $request->only('email', 'password');
        return $this->auth_process($credentials);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required'],
            'password' => ['required']
        ]);
        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $credentials = $request->only('email', 'password');
        return $this->auth_process($credentials);
    }

    public function logout(Request $request)
    {
        try {
            $request->session()->flush();
            Auth::logout();
            return response()->json([
                'success' => true,
                'message' => 'Success logout'
            ]);
        } catch(Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Fail logout'
            ]);
        }

    }

    private static function auth_process($credentials)
    {
        if(Auth::attempt($credentials)) {
            return response()->json([
                'success' => true,
                'message' => 'Success login'
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Email or password not correct'
        ]);
    }
}
