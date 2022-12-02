@extends("blank")

@section("konten")

    <form action="{{ route('simpan_jawaban') }}" method="post">
        @csrf

        Jawaban : <textarea name="isi_jawaban" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection