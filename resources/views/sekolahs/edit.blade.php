@extends('template.default')

@section('body')

<h1>Edit Data</h1>
<div class="card">
    <div class="card-body">
    
        <form action="/sekolahs" class="" method="post">
            @csrf
<div class="mb-3">
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru">
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="" value="Simpan" class="btn btn-primary">
</div>
</form>
</div>
</div>



@endsection