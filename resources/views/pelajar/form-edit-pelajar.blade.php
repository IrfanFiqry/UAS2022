@extends("blank")

@section("konten")
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <form action="{{ route('update_pelajar', ['id' => $id]) }}" method="post">
        @csrf
        @method("put")
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name">
                    </div>
            </div>

            <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" id="" cols="30" rows="5"></textarea>
                    </div>
            </div>

            <div class="mb-3 row">
                    <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
                    <div class="col-sm-10">
                        <input type="radio" name="kelamin" value="pria"> Pria
                        <input type="radio" name="kelamin" value="wanita"> Wanita
                     </div>
            </div>
           

             <hr>

            <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username">
                        </div>
            </div>

            <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password">
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