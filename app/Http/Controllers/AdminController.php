<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $pendaftar = Pendaftar::with('programStudi.fakultas')->get();
        return view('admin',compact('pendaftar'));
    }
     public function admin2(){
        $pendaftar = Pendaftar::with('programStudi.fakultas')->get();
        return view('admin2',compact('pendaftar'));
    }

     public function edit(Pendaftar $pendaftar){
        $pendaftar->update([
            'status'=>'lunas'
        ]);
        return redirect()->route('admin');
    }
     public function lunas(){
        $pendaftar = Pendaftar::where('status','lunas')->get();
        return view('admin2',compact('pendaftar'));
    }

}
