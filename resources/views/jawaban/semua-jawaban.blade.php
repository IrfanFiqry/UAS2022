@extends("blank")

@section("konten")
    <h1>Semua Jawaban</h1>

    @foreach($data as $jawaban)
        Soal : {{ $jawaban->soal->isi_soal }} <br>
        Name : {{ $jawaban->user->name }} <br>
        jawaban : {{ $jawaban->isi_jawaban }} <br>       
        <a class="btn btn-primary" href="{{ route('ubah_jawaban', ['id' => $jawaban->id]) }}">Ubah</a>
        <a class="btn btn-primary" href="{{ route('tampil_jawaban', ['id' => $jawaban->id]) }}">Tampil</a>
        
        

        <form action="{{ route('hapus_jawaban', ['id' => $jawaban->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection