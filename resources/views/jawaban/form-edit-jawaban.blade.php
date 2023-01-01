@extends("blank")

@section("konten")

    <form action="{{ route('update_jawaban', ['id' => $id]) }}" method="post">
        @csrf
        @method("put")
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                    <label for="isi_jawaban" class="col-sm-2 col-form-label">Jawab</label>
                    <div class="col-sm-10">
                        <textarea name="isi_jawaban" id="" cols="30" rows="5"></textarea>
                    </div>
            </div>

        </div>
        <button type="submit" class=" btn btn-primary">Simpan</button>

    </form>


@endsection