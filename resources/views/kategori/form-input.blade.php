@extends("blank")

@section("konten")

    <form action="{{ route('simpan_kategori') }}" method="post">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" name="name">
                    </div>
            </div>

            <div class="mb-3 row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="keterangan" id="" cols="30" rows="5"></textarea>
                    </div>
            </div>

        </div>
        <button type="submit" class=" btn btn-primary">Simpan</button>
    </form>


@endsection