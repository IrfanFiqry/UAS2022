@extends("blank")

@section("konten")

    <form action="{{ route('update_jawaban', ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Jawaban : <textarea name="isi_jawaban" id="" cols="30" rows="10"></textarea> <br>
        <button type="submit">Simpan</button>
    </form>


@endsection