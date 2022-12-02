<?php

namespace App\Http\Controllers;

class TestingController extends Controller
{
    function data ($nama) {
        return view("data")
        ->with("nama", $nama)
        ->with("umur", "22 Tahun")
        ->with("alamat", "Jl. D. I Panjaitan")
        ->with("nim", "2011102441082")
        ->with("waktu", date("H:m:s"));
    }
    
}