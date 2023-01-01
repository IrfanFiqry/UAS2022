@extends("blank")

@section("konten")
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
  <div class="my-3 p-3 bg-body rounded shadow-sm"> 
     <a href= "{{route('buat_pelajar')}}" class="btn btn-primary">+ Tambah Data</a>
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Create at</th>
            <th>Update at</th>
            <th>Aksi</th>
        </tr>   
    </thead>
  </div>
    <tbody>

        @foreach($data as $pelajar)
            <tr>
                <td> {{ $pelajar->id }}<br></td>
                <td> {{ $pelajar->name }}<br></td>
                <td> {{ $pelajar->alamat }}<br> </td>
                <td> {{ $pelajar->user->username }}<br></td>
                <td> {{ $pelajar->created_at }}<br></td>
                <td> {{ $pelajar->update_at }}<br></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('ubah_pelajar', ['id' => $pelajar->id]) }}">Ubah</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('tampil_pelajar', ['id' => $pelajar->id]) }}">Tampil</a>

                    <form action="{{ route('hapus_pelajar', ['id' => $pelajar->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            
        @endforeach
    </tbody>
</table>
@endsection