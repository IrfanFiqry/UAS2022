@extends("blank")
@section("konten")


Name : {{ $data_user -> name }}<br>
Username : {{ $data_user -> username }}<br>
Level : {{ $data_user -> level }}<br>
Create : {{ $data_user -> created_at }}<br>
Update : {{ $data_user -> updated_at}}<br>

@endsection