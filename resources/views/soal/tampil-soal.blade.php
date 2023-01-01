@extends("blank")

@section("konten")

    Nama Pelajar : {{ $soal->pelajar->name }}
    <h1>Pertanyaan : {{ $soal->judul }}</h1>
    Kategori : 
    <ul>
        @foreach ($kategoriSoal as $data)
            <li>{{$data->Kategori->name}}</li>
        @endforeach
    </ul>
    

    {{ $soal->isi_soal }}

    <hr>
    <a class="btn btn-info" href="{{ route('jawab_soal', ['id' => $soal->id]) }}">Jawab</a>
    <a class="btn btn-primary" href="{{ route('semua_jawaban', ['id' => $soal->id]) }}">Tampilkan Jawaban</a>
    <a class="btn btn-info" href="{{ route('semua_soal') }}">Semua Soal</a>

@endsection