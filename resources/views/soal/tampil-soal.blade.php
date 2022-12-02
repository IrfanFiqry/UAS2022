@extends("blank")

@section("konten")

    ID Pelajar : {{ $soal->pelajar_id }}
    <h1>{{ $soal->judul }}</h1>

    {{ $soal->isi_soal }}

    <hr>
    <a href="{{ route('semua_soal') }}">Semua Soal</a>

@endsection