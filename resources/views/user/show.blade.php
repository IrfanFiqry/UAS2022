@extends("blank")
@section("konten")
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <ul class="list-group">
                <li class="list-group-item active">{{ $data_user -> name }}</li>
                <li class="list-group-item">Username : {{ $data_user -> username }}</li>
                <li class="list-group-item">Level : {{ $data_user -> level }}</li>
                <li class="list-group-item">Create : {{ $data_user -> created_at }}</li>
                <li class="list-group-item">Update : {{ $data_user -> updated_at}}</li>             
            </ul>
        </div>
    </body>

@endsection