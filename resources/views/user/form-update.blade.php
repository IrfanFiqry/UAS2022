@extends("blank")

@section("konten")
 
 
 <form action="{{ route('user_update', ['id' => $id]) }}" method="post">
        @csrf 
        @method("put")
        Nama : <input type="text" name="name"> <br>
        Username : <input type="text" name="username"> <br>
        Password : <input type="text" name="password"> <br>
        level : <input type="text" name="level"> <br>

        <button type="submit">Simpan</button>

    </form>
@endsection
