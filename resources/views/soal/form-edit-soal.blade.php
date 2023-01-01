@extends("blank")

@section("konten")
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

    <form action="{{ route('update_soal', ['id' => $id]) }}" method="post">
            @csrf
            @method("put")
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul">
                        </div>
                </div>

                <div class="mb-3 row">
                        <label for="isi_soal" class="col-sm-2 col-form-label">Soal</label>
                        <div class="col-sm-10">
                            <textarea name="isi_soal" id="" cols="30" rows="5"></textarea>
                        </div>
                </div>

            </div>
            <button type="submit" class=" btn btn-primary">Simpan</button>
    </form>


@endsection