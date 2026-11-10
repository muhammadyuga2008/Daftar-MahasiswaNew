<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Pendaftar;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $fakultas = Fakultas::all();
        return view('mahasiswa',compact('fakultas'));
    }
    public function detail($id){
        $fakultas = Fakultas::with('programstudi')->findOrFail($id);
        return view('detail',compact('fakultas'));
    }

     public function daftar(){
        $prodi = ProgramStudi::with('fakultas')->get();
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        return view('pendaftaran',compact('prodi','pendaftar'));
    }

      public function postdaftar(Request $request){
        $request->validate([
            'nama_lengkap'=>'required',
            'nik'=>'required',
            'agama'=>'required',
            'jenis_kelamin'=>'required',
            'tanggal_lahir'=>'required',
            'tempat_lahir'=>'required',
            'no_hp'=>'required|numeric',
            'lulusan_tahun'=>'required',
            'alamat'=>'required',
            'program_studi_id'=>'required'
        ]);
        Pendaftar::create([
            'user_id'=>Auth::id(),
            'program_studi_id'=>$request->program_studi_id,
            'nama_lengkap'=>$request->nama_lengkap,
            'nik'=>$request->nik,
            'agama'=>$request->agama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'tempat_lahir'=>$request->tempat_lahir,
            'no_hp'=>$request->no_hp,
            'lulusan_tahun'=>$request->lulusan_tahun,
            'alamat'=>$request->alamat,
            'status'=>'belum lunas'
        ]);
        return redirect()->route('mahasiswa')->with('status','Daftar Berhasill');
    }
}
