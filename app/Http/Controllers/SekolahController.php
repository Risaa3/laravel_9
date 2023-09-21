<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class SekolahController extends Controller
{
    public function index()
    {
       $sekolahs =sekolah::all();
       return view('sekolahs.index') -> with ('sekolahs', $sekolahs);
    }

    public function tambah()
    {
        $sekolahs =Sekolah::all();
        return view('sekolahs.tambah');
    }

    public function simpan(Request $request)
    {
        $sekolahs = new sekolah();

        $sekolahs->nama_sekolah = $request->nama_sekolah;
        $sekolahs->alamat = $request->alamat;
        $sekolahs->jurusan = $request->jurusan;
        $sekolahs->jumlah_guru = $request->jumlah_guru;

        $sekolahs->save();

        return redirect()->route('sekolahs.index');
    } 

    public function edit($id)
    {
        $sekolahs = sekolah::find($id);
        return view('sekolahs.edit' , [
            'sekolah' => $sekolahs,
             ]);
        
    }

    public function update(Request $request, $id) 
{
    $sekolah = sekolah::find($id);

       $sekolah->nama_sekolah = $request->nama_sekolah;
       $sekolah->alamat = $request->alamat;
       $sekolah->jurusan = $request->jurusan;
       $sekolah->jumlah_guru = $request->jumlah_guru;

       $sekolah->save();

       return redirect()->route('sekolahs.index');
}

public function destroy($id) 
{
    $sekolah = sekolah::find($id);

    $sekolah->delete();
    return redirect()->route('sekolahs.index');

}

}
