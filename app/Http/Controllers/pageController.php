<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use App\Models\dokter;
use App\Models\Pertemuan;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class pageController extends Controller
{
    public function home()
    {
        $dataApotek=Apotek::all()->take(4);
        $dataDokter=dokter::all()->take(3);
        return view('page.dashboard', ['title' => 'home','dataApotek'=>$dataApotek,'dataDokter'=>$dataDokter]);
    }
    public function cekkesehatan()
    {
        return view('page.cekkesehatan', ['title' => 'cekkesehatan']);
    }

    public function formkesehatan()
    {
        return view('page.formkesehatan',['title'=>'formkesehatan']);
    }

    public function datakesehatan(Request $request)
    {
        // return $request['radio1'];
        $data=[];
        for ($i=1; $i < 6; $i++) {
            array_push($data,$request['radio'.$i]) ;
        }
        if (in_array("3",$data)) {
            return redirect('/diagnosa');
        }else{
            Alert::info('Hasil diagnosa '.auth()->user()->name, 'Dinyatakan sehat tanpa gejala ');
            return redirect()->intended('/nutrisi');
        }
    }

    public function diagnosa()
    {
        Alert::info('Hasil diagnosa '.auth()->user()->name, 'Dinyatakan ada gejala ');
        return view('page.diagnosa',['title'=>'diagnosa']);
    }

    public function obat()
    {
        return view('page.obat',['title'=>'obat']);
    }

    public function nutrisi()
    {
        return view('page.nutrisi',['title'=>'nutrisi']);
    }

    public function apotek()
    {
        $data=Apotek::all();
        return view('page.apotek',['title'=>'apotek','data'=>$data]);
    }
    public function dokter()
    {
        $data=dokter::all();
        return view('page.dokter',['title'=>'dokter','data'=>$data]);
    }
    public function profile()
    {
        return view('page.profile',['title'=>'profile']);
    }
    public function editProfile(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name'     => $request->name,
            'email'     => $request->email,
        ]);
        Alert::info('update berhasil', 'oke ');
        return redirect('/profile');
    }
    public function janjitemu($id)
    {
        $data=dokter::findOrFail($id);
        return view('page.janjitemu',['title'=>'janjitemu','data'=>$data]);
    }
    public function saveJanjitemu(Request $request)
    {
        Pertemuan::create([
            'user_id'=>$request->user_id,
            'dokter_id'=>$request->dokter_id,
            'jadwal_pertemuan'=>date('Y-m-d H:i:s', strtotime("$request->date_pertemuan $request->time_pertemuan")),
        ]);
        Alert::success('janji temu berhasil', 'oke ');
        return redirect('/');
    }
    public function jadwal() {
        $data=Pertemuan::where('user_id', auth()->user()->id)->get();
        return view('page.jadwal',['title'=>'jadwal','data'=>$data]);
    }
}
