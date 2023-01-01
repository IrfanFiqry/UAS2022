@extends("blank")

@section("konten")
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
  <div class="my-3 p-3 bg-body rounded shadow-sm"> 
     <a href= "{{route('user_input')}}" class="btn btn-primary">Tambah User</a>
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Level</th>
            <th>Create at</th>
            <th>Update at</th>
            <th>Aksi</th>
        </tr>   
    </thead>
    </div>
    <tbody>
@foreach($data_user as $user)
        <tr>
            <td> {{ $user->id }} <br></td>
            <td> {{ $user->name }} <br></td>
            <td> {{ $user->username }} <br></td>
            <td> {{ $user->level }} <br></td>
            <td> {{ $user->created_at }} <br></td>
            <td> {{ $user->updated_at }} <br></td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{ route('user_edit', ['id' => $user->id]) }}">edit</a>
                <a class="btn btn-primary btn-sm" href="{{ route('user_show', ['id' => $user->id]) }}">show</a>
                
                <form action="{{ route('user_hapus', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
@endsection