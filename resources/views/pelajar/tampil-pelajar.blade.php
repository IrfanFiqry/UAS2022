@extends("blank")
@section("konten")


Name : {{ $pelajar -> name }}<br>
Alamat : {{ $pelajar -> alamat }}<br>
Kelamin : {{ $pelajar -> kelamin }}<br>
Create : {{ $pelajar -> created_at }}<br>
Update : {{ $pelajar -> updated_at}}<br>

@endsection