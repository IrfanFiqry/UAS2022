@extends("blank")

@section("konten")

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
 
 <form action="{{ route('user_simpan') }}" method="post">
        @csrf 
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name">
                    </div>
            </div>

            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" name="password">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="level" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <input type="text" name="level">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
@endsection
