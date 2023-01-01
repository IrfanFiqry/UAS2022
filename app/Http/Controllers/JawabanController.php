<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal; //import model soal
use App\Models\Pelajar; //import model pelajar
use App\Models\Jawaban; //import model pelajar
use App\Models\User; //import model pelajar
use Auth;


class JawabanController extends Controller
{
    public function buat()
    {
        return view("jawaban.form-jawaban");
    }

    public function simpan(Request $request)
    {
        $jawaban = new Jawaban();
        $jawaban->isi_jawaban = $request->get("isi_jawaban");
        $jawaban->user_id = Auth::user()->id;
        $jawaban->soal_id = $request->get("soal_id");
        $jawaban->save();

        return redirect(route("tampil_jawaban", ['id' => $jawaban->id]));
    }

    public function tampil($id)
    {
        $jawaban = Jawaban::find($id);

        return view("jawaban.tampil-jawaban")->with("jawaban", $jawaban);
    }

    public function semua()
    {
        $data = Jawaban::all();
        return view("jawaban.semua-jawaban")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("jawaban.form-edit-jawaban")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $jawaban = Jawaban::find($id);
        $jawaban->isi_jawaban = $request->get("isi_jawaban");
        $jawaban->save();

        return redirect(route("tampil_jawaban", ['id' => $jawaban->id]));
    }

    public function hapus($id)
    {
        Jawaban::destroy($id);
        return redirect(route('semua_jawaban'));
    }
}
