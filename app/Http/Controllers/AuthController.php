<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
     public function postlogin(Request $request){
        $cek = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($cek)){
            $user = Auth::user();
            if($user->role =='admin'){
                return redirect()->route('admin');
            }else{
                return redirect()->route('mahasiswa');
            }
        }
    }

    public function register(){
        return view('regis');
    }
    public function posregis(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'mahasiswa'
        ]);
        return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


}
