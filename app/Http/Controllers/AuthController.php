<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email','password');
        // dd($credentials);
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->with('success','Logged In');
        }
        return back()->with("fail","Credential Doesn't match!");
    }
    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|confirmed|min:6'
        ]);
        $data = $request->all();
        // dd($data);
        $check = $this->create($data);
        return back()->with("success","Successfull Registraition!");
    }
    public function create(array $data){
        return User::create([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect("login")->with('fail','Opps! You do not have access');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
