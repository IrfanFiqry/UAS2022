<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal; //import model soal
use App\Models\Pelajar; //import model pelajar

class SoalController extends Controller
{
    public function buat()
    {
        return view("soal.form-soal");
    }

    public function simpan(Request $request)
    {
        $soal = new soal();
        $soal->judul = $request->get('judul');
        $soal->isi_soal = $request->get('isi_soal');
        $soal->pelajar_id = auth()->user()->pelajar->id;
        $soal->save();

        return redirect(route("tampil_soal", ['id' => $soal->id]));
    }

    
    public function tampil($id)
    {
        $soal = soal::find($id);

        return view("soal.tampil-soal")->with("soal", $soal);
    }

    public function semua()
    {
        $data = Soal::all();
        return view("soal.semua-soal")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("soal.form-edit-soal")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $soal = Soal::find($id);
        $soal->judul = $request->get("judul");
        $soal->isi_soal = $request->get("isi_soal");
        $soal->save();

        return redirect(route("tampil_soal", ['id' => $soal->id]));
    }

    public function hapus($id)
    {
        Soal::destroy($id);
        return redirect(route('semua_soal'));
    }
}
