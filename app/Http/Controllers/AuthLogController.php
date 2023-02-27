<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLogController extends Controller
{
    public function getLogin(){
      return view('auth/login', [
         'title' => 'Login'
      ]);
    }
    public function getRegister(){
      return view('auth/register', [
         'title' => 'Register'
      ]);
    }
    public function postLogin(Request $request){
      $credentials = $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();
         return redirect()->intended('/dashboard');
      }
      return back()->with('loginError', 'Login failed!!');
    }
    public function postRegister(Request $request){
      $validated = $request->validate([
         'name' => 'required|max:255|min:3',
         'username' => 'required|min:3|max:255|unique:users',
         'email' => 'required|email|unique:users',
         'password' => 'required|max:255|min:5',
      ]);
      $validated['password'] = bcrypt($validated['password']);
      User::create($validated);
      return redirect('/login')->with('success', 'Registration successful! Please login');
    }

    public function postLogout(Request $request){
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerate();
      return redirect('/');
    }
}
