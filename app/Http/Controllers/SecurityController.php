<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;// import model user
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function formLogin() {
        return view("security.form-login");
    }

    public function prosesLogin(Request $request) {
        $username = $request->get("username");
        $password = $request->get("password");
        $user = User::where('username', $username)->where("password", $password)->first();
        if ($user != null) {
        Auth::login($user);
        return redirect(route("user_tampil")); // redirect mengarahkan ke alamat URL tertentu
        } else {
        return back();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect(route("login"));
    }


    
}
