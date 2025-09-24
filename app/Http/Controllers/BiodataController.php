<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata() {
        $biodata = Biodata::all();
        return view('biodata.biodata', compact('biodata'));
    }

    public function tambah() {
        $biodata = Biodata::all();
        return view('biodata.tambah', compact('biodata'));
    }
    public function menambahkan(Request $request) {
        $request->validate([
            'nama'=>'required',
            'jk'=>'required',
            'jurusan'=>'required',
            'kelas'=>'required',
            'tempat_lahir'=>'required',
        ]);

        biodata::create([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'jenis_kelamin'=>$request->jk,
            'jurusan'=>$request->jurusan,
            'tempat_lahir'=>$request->tempat_lahir,
        ]);

        return redirect('/biodata');
    }

    public function edit($id) {
        $data = biodata::findOrFail($id);
        return view('biodata.edit', [
            'data'=>$data,
        ]);
    }
    public function update($id,Request $request) {
        $request->validate([
            'nama'=>'required',
            'jk'=>'required',
            'jurusan'=>'required',
            'kelas'=>'required',
            'tempat_lahir'=>'required',
        ]);

        biodata::where('id',$id)->update([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'jenis_kelamin'=>$request->jk,
            'jurusan'=>$request->jurusan,
            'tempat_lahir'=>$request->tempat_lahir,
        ]);

        return redirect('/biodata');
    }

    public function hapus($id) {
        biodata::findOrFail($id)->delete();

        return redirect('/biodata');
    }
}
