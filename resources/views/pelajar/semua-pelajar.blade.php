@extends("blank")

@section("konten")

    <h1>Semua Pelajar</h1>

    @foreach($data as $pelajar)
        Nama : {{ $pelajar->name }} <br>
        Alamat : {{ $pelajar->alamat }} <br>
        <a href="{{ route('ubah_pelajar', ['id' => $pelajar->id]) }}">Ubah</a>
        <a href="{{ route('tampil_pelajar', ['id' => $pelajar->id]) }}">Tampil</a>

        <form action="{{ route('hapus_pelajar', ['id' => $pelajar->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection