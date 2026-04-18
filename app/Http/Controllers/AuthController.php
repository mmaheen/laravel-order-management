<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(RegisterFormRequest $request)
    {
        $data = $request->validated();
        try {
            User::create($data);
            return redirect()->route('login')->with('success', 'Registration successful. Please login.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(LoginFormRequest $request)
    {
        $data = $request->validated();
        try {
            if (Auth::attempt($data)) {
                return redirect()->route('index')->with('success', 'Login successful.');
            } else {
                return back()->with('error', 'Invalid credentials. Please try again.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
