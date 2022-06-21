<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Data</title>
</head>
<body>
    
</body>
</html>
<?php require "header.php"; ?>
<div class="container">
    <!-- form tambah data  -->
    <div class="card mt-4">
        <div class="card-header text-center bg-dark text-white">
        Form Input Data Barang
        </div>
        <div class="card-body">
          <div class="mb-3 text-left">
            <label for="nama-costumer" class="form-label ">Merek Mobil</label>
            <input type="text" class="form-control" id="nama-costumer" placeholder="Masukan Merek Mobil">
          </div>
          <div class="mb-3 text-left">
            <label for="nama-costumer" class="form-label ">Pilih Warna Mobil</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Pilih warna mobil</option>
              <option value="1">Merah</option>
              <option value="2">Hitam</option>
              <option value="3">Putih</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="nama-costumer" class="form-label">Harga Sewa/Hari</label>
            <input type="text" class="form-control" id="nama-costumer" placeholder="Masukan Harga Sewa">
          </div>
          <div class="mb-3">
            <label for="nama-costumer" class="form-label">Plat Mobil</label>
            <input type="text" class="form-control" id="nama-costumer" placeholder="Masukan Plat Mobil">
          </div>
        </div>
        <div class="card-footer bg-dark"></div>
    </div>
    <!-- form tambah data  -->
</div>