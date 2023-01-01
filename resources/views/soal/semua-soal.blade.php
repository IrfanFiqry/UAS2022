@extends("blank")

@section("konten")

    <h1>Semua soal</h1>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
    @foreach($data as $soal)

        <body class="bg-light">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <ul class="list-group">
                    <li class="list-group-item active">{{ $soal->judul }}</li>
                    <li class="list-group-item">Pembuat : {{ $soal->pelajar->name }}</li>             
                </ul>
                <a class="btn btn-warning btn-sm" href="{{ route('ubah_soal', ['id' => $soal->id]) }}">Ubah</a>
                <a class="btn btn-primary btn-sm" href="{{ route('tampil_soal', ['id' => $soal->id]) }}">Tampil</a>
              
                <form action="{{ route('hapus_soal', ['id' => $soal->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            
                
            </div>
        </body>
        
    @endforeach
    <a class="btn btn-primary" href="{{route('buat_soal')}}">Buat Soal Baru</a>
        
@endsection