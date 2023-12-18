<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            {{-- <input type="text" class="form-control" name="kondisi_barang" id="kondisi_barang" placeholder="Kondisi Barang" autofocus required> --}}
            {{-- <div id="emailHelp" class="form-text">Inpute harga disini</div> --}}
     
</body>
</html>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posting</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 40rem;">
            <div class="card-header text-center">

    <form action="posting/post" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-3 mx-2 mx-md-3 mt-3">POSTING</p>
        <div class="mb-3">
            <input type="nama_perusahaan" name="nama_perusahaan" placeholder="Masukan nama perusahaan" class="form-control" id="nama_perusahaan">
        </div>
        <div class="mb-3">
            <input type="bidang_usaha" name="bidang_usaha" placeholder="Masukan bidang_usaha" class="form-control" id="bidang_usaha">
        </div>
        <div class="mb-3">
            <input type="lowongan_pekerjaan" name="lowongan_pekerjaan" placeholder="Masukan lowongan pekerjaan sebagai" class="form-control" id="lowongan_pekerjaan">
        </div>
        <div class="mb-3">
            <input type="date" name="tanggal_posting" placeholder="Masukan tanggal posting" class="form-control" id="tanggal_posting">
        </div>
        <div class="mb-3">
            <input type="date" name="tanggal_deadline" placeholder="Masukan tanggal deadline" class="form-control" id="tanggal_deadline">
        </div>
        <div class="mb-3">
            <input type="deskripsi" name="deskripsi" placeholder="Masukan deskripsi" class="form-control" id="deskripsi">
        </div>
        <div class="mb-3">
            <input type="lokasi" name="lokasi" placeholder="Masukan lokasi" class="form-control" id="lokasi">
        </div>
    </div>

    <div class="mb-3">
        <input type="file" class="form-control" name="foto" id="foto" placeholder="foto"                                                                      autofocus required>
    </div>
        <button type="submit" class="btn btn-danger">Simpan</button>   
</form>
