<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //import model user
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    

    public function formInput() // Hanya tampilan form
    {
        return view("user.form");
    }

    public function simpan(UserRequest $request)
    {
       // dd($request->all()); cek data masuk
        $user = new User();
        $user->name = $request->get("name");
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user_tampil")); // redirect mengarahkan ke alamat URL tertentu

    }

    public function formEdit($id)
    {
        return view("user.form-update")->with("id", $id);
    }

    public function tampil() {
        $data_user = User::all();
        return view("user.tampil-user")->with("data_user", $data_user);

    }

    public function update(UserRequest $request, $id)
    {
       // dd($request->all()); cek data masuk
        $user = User::find($id);
        $user->name = $request->get("name");
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user_tampil")); // redirect mengarahkan ke alamat URL tertentu

    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect(route('user_tampil'));
    }

    public function show($id)
    {
        $data_user = User::find($id);
        return view("user.show")->with("data_user", $data_user);
    }

}

