@extends("blank")

@section("konten")

    <h1>Semua Kategori</h1>

    @foreach($data as $kategori)
        Kategori : {{ $kategori->name }} <br>
        Keterangan: {{ $kategori->keterangan }} <br>
        <a href="{{ route('ubah_kategori', ['id' => $kategori->id]) }}">Ubah</a>
        <a href="{{ route('tampil_kategori', ['id' => $kategori->id]) }}">Tampil</a>

        <form action="{{ route('hapus_kategori', ['id' => $kategori->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
    <a class="btn btn-primary" href="{{route('buat_kategori')}}">Buat Kategori Baru</a>
@endsection