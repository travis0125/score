<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');        
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $authData = $request->only(['email', 'password']);
        if (Auth::attempt($authData, $request->has('remember'))) {
            return redirect()->action('BoardController@index');
        } else {
            return redirect()->action('AuthController@login')->withErrors(['msg' => '登入失敗'])->withInput($request->except('password'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->action('BoardController@index');
    }
}