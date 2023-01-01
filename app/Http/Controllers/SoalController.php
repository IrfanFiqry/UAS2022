<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal; //import model soal
use App\Models\Pelajar; //import model pelajar
use App\Models\Jawaban; //import model pelajar
use App\Models\Kategori;
use App\Models\Kategorisoal;

class SoalController extends Controller
{
    public function buat()
    {
        $data_kategoris = Kategori::all();
        return view("soal.form-soal", ["data_kategoris" => $data_kategoris]);
    }

    public function simpan(Request $request)
    {
        $soal = new Soal();
        $soal->judul = $request->get('judul');
        $soal->isi_soal = $request->get('isi_soal');
        $soal->pelajar_id = auth()->user()->pelajar->id;
        $soal->save();

        foreach ($request->kategori as $kategori) {
            $kategoriSoal = new KategoriSoal;
            $kategoriSoal->soal_id = $soal->id;
            $kategoriSoal->kategori_id = $kategori;
            $kategoriSoal->save();
        }
        
        return redirect(route("tampil_soal", ['id' => $soal->id]));
    }

    
    public function tampil($id)
    {
        $soal = Soal::find($id);
        $kategoriSoal = KategoriSoal::where('soal_id', $id)->get();

        return view("soal.tampil-soal", ["soal" => $soal, "kategoriSoal" => $kategoriSoal]);
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

    public function jawab($id)
    {
        $soal = Soal::find($id);
        return view('jawaban.form-jawaban', ['soal_id' => $soal->id]);
    }
}
