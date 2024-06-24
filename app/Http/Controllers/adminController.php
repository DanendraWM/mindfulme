<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class adminController extends Controller
{
    public function admin() {
        $data = Dokter::latest()->paginate(10)->withQueryString();
        return view('admin.listDokter',['title'=>'listDokter','data'=>$data]);
    }
    public function add(Request $request) {
        Dokter::create([
            'name'=>$request->name,
            'spesialis'=>$request->spesialis,
            'pengalaman'=>$request->pengalaman,
        ]);
        Alert::success('create berhasil');
        return redirect('/listdokter');
    }

    public function delete($id) {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        Alert::success('delete berhasil');
        return redirect('/listdokter');
    }

    public function edit(Request $request,$id) {
        $dokter = Dokter::findOrFail($id);
        $dokter->update([
            'name'     => $request->name,
            'spesialis'     => $request->spesialis,
            'pengalaman'     => $request->pengalaman,
        ]);
        Alert::success('edit berhasil');
        return redirect('/listdokter');
    }

    public function jadwalJanji() {
        $data = Pertemuan::latest()->paginate(10)->withQueryString();
        return view('admin.jadwalJanji',['title'=>'listDokter','data'=>$data]);
    }
}
