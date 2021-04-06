<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout']]); 
    }

    public function index($registered)
    {
        return view('auth.login', ["registered" => $registered]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required"
        ]);
        if (!Auth::attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->back()->with('failed', 'Wrong username or password please try it again');   
        }
        return redirect()->route("tasksPage");
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('tasksPage');
    }
}
