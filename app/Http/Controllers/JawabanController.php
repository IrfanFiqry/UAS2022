<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function buat()
    {
        return view("jawaban.form-input");
    }

    public function simpan(Request $request)
    {
        $jawaban = new Jawaban();
        $jawaban->isi_jawaban = $request->get("isi_jawaban");
        $jawaban->user_id = auth()->user->id;
        $jawaban->soal_id = auth()->soal->id;
        $jawaban->save();

        return redirect(route("tampil_jawaban", ['id' => $jawaban->id]));
    }

    public function tampil($id)
    {
        $jawaban = Jawaban::find($id);

        return view("jawaban.tampil")->with("jawaban", $jawaban);
    }

    public function semua()
    {
        $data = Jawaban::all();
        return view("jawaban.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("jawaban.form-edit")->with("id", $id);
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
