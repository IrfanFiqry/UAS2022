<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajar; //import model pelajar
use App\Models\User; //import model user

class PelajarController extends Controller
{
    public function buat()
    {
        return view("pelajar.form-input");
    }

    public function simpan(Request $request)
    {
        $user = new User();
        $user->username = $request->get('username');
        $user->name = $request->get('name');
        $user->password = $request->get('password');
        $user->level = $request->get('level');
        $user->save();

        $pelajar = new Pelajar();
        $pelajar->name = $request->get('name');
        $pelajar->alamat = $request->get('alamat');
        $pelajar->kelamin = $request->get('kelamin');
        $pelajar->user_id = $user->id;
        $pelajar->save();

        return redirect(route("tampil_pelajar", ['id' => $pelajar->id]));
    }

    public function tampil($id)
    {
        $pelajar = Pelajar::find($id);

        return view("pelajar.tampil-pelajar")->with("pelajar", $pelajar);
    }

    public function semua()
    {
        $data = pelajar::all();
        return view("pelajar.semua-pelajar")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("pelajar.form-edit-pelajar")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $pelajar = pelajar::find($id);
        $pelajar->nama = $request->get("nama");
        $pelajar->alamat = $request->get("alamat");
        $pelajar->save();

        return redirect(route("tampil_pelajar", ['id' => $pelajar->id]));
    }

    public function hapus($id)
    {
        pelajar::destroy($id);
        return redirect(route('semua_pelajar'));
    }

}
