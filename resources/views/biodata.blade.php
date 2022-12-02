@extends("blank")

@section("konten")

@include("menu")
<br>

<?php

$nama   = "Irfan Fiqry Abror";
$nim    = "2011102441082";
$prodi  = "Teknik Informatika";

echo "Nama : ", $nama, "<br>";
echo "NIM : ", $nim, "<br>";
echo "Prodi : ", $prodi, "<br>";
?>

@endsection