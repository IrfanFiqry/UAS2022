@extends("blank")

@section("konten")

    User Name : {{ $jawaban->user->name }}<br>
   
    Soal : {{ $jawaban->soal->isi_soal }}<br>
    
    Jawaban : {{ $jawaban->isi_jawaban}}

    <hr>
    <a class="btn btn-primary" href="{{ route('ubah_jawaban', ['id' => $jawaban->id]) }}">Ubah</a>
    <form action="{{ route('hapus_jawaban', ['id' => $jawaban->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
    </form>
    <br>
    <a class="btn btn-primary" href="{{ route('semua_soal') }}">Semua Soal</a>
    
@endsection
