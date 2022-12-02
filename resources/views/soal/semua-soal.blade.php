@extends("blank")

@section("konten")
<a href="{{route('buat_soal')}}">Buat Soal</a>

    <h1>Semua soal</h1>

    @foreach($data as $soal)
        Judul : {{ $soal->judul }} <br>
        Alamat : {{ $soal->isi_soal }} <br>
        Pelajar ID : {{ $soal->pelajar_id }} <br>
        <a href="{{ route('ubah_soal', ['id' => $soal->id]) }}">Ubah</a>
        <a href="{{ route('tampil_soal', ['id' => $soal->id]) }}">Tampil</a>

        <form action="{{ route('hapus_soal', ['id' => $soal->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection