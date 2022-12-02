@extends("blank")

@section("konten")
<a href="{{route('user_input')}}">Tambah User Baru</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Level</th>
            <th>Password</th>
            <th>Create at</th>
            <th>Update at</th>
        </tr>   
    </thead>
    <tbody>
@foreach($data_user as $user)
        <tr>
            <td> {{ $user->id }} <br></td>
            <td> {{ $user->name }} <br></td>
            <td> {{ $user->username }} <br></td>
            <td> {{ $user->level }} <br></td>
            <td> {{ $user->password }} <br></td>
            <td> {{ $user->created_at }} <br></td>
            <td> {{ $user->updated_at }} <br></td>
            <td>
                <a href="{{ route('user_edit', ['id' => $user->id]) }}">edit</a>
                <a href="{{ route('user_show', ['id' => $user->id]) }}">show</a>
                
                <form action="{{ route('user_hapus', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
<table>
@endsection