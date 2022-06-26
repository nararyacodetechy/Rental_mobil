<?php 
require "../functions.php";
// ambil id dari Url
$id = $_GET["id"];

$mobil = query ($conn, "SELECT * FROM tb_mobil WHERE id_mobil=$id")[0];

if (isset($_POST["submit"])) {
    if (ubahMobil ($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'data-mobil.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'data-mobil.php';
            </script>
        ";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
    <!-- form tambah data  -->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="card mt-4">
        <div class="card-header text-center bg-dark text-white">
        Form Edit Mobil Sewa
        </div>
        <div class="card-body">
          <div class="mb-3 text-left">
            <input type="hidden" name="id-mobil" value="<?= $mobil["id_mobil"] ?>">
          </div>
          <div class="mb-3 text-left">
            <label for="gambar-mobil" class="form-label ">Gambar Mobil</label><br>
            <img src="../../mobil/<?= $mobil["gambar_mobil"] ?>" alt="" >
            <input type="file" name="gambar-mobil" value="<?= $mobil["gambar_mobil"] ?>" class="form-control" id="gambar-mobil" required>
          </div>
          <div class="mb-3">
            <label for="merek-mobil" class="form-label">Merek Mobil</label>
            <input type="text" name="merek-mobil" value="<?= $mobil["merek_mobil"] ?>" class="form-control" id="merek-mobil" placeholder="Masukan Merek Mobil" required>
          </div>
          <div class="mb-3">
            <label for="harga-sewa" class="form-label">Harga Sewa/1 Hari</label>
            <input type="text" name="harga-sewa" value="<?= $mobil["harga_sewa_nama"] ?>" class="form-control" id="harga-sewa" placeholder="Masukan Harga Sewa dalam Text" required>
          </div>
          <div class="mb-3">
            <label for="harga-sewa-nilai" class="form-label">Harga Sewa Nilai</label>
            <input type="text" name="harga-sewa-nilai" value="<?= $mobil["harga_sewa_angka"] ?>" class="form-control" id="harga-sewa-nilai" placeholder="Masukan Harga Sewa dalam Angka" required>
          </div>
          <div class="mb-3">
            <label for="mobil-sopir" class="form-label">Mobil & Sopir</label>
            <input type="text" name="mobil-sopir" value="<?= $mobil["mobil_sopir"] ?>" class="form-control" id="mobil-sopir" placeholder="Masukan Layanan" required>
          </div>
          <div class="mb-3">
            <label for="bbm" class="form-label">Ketersediaan BBM</label>
            <input type="text" name="bbm" value="<?= $mobil["bbm"] ?>" class="form-control" id="bbm" placeholder="Masukan Ketersediaan BBM" required>
          </div>
          <div class="mb-3">
            <label for="jumblah-penumpang" class="form-label">Jumblah Penumpang</label>
            <input type="text" name="jumblah-penumpang" value="<?= $mobil["jumblah_penumpang"] ?>" class="form-control" id="jumblah-penumpang" placeholder="Masukan Kapasitas Jumblah Penumpang pada mobil" required>
          </div>
          <div class="mb-3">
            <label for="plat-mobil" class="form-label">Plat Mobil</label>
            <input type="text" name="plat-mobil" value="<?= $mobil["plat_mobil"] ?>" class="form-control" id="plat-mobil" placeholder="Masukan Plat Mobil" required>
          </div>
        </div>
        <div class="card-footer bg-dark mb-4"></div>

        <!-- button add & delete -->
        <div class="text-center mb-4">
          <a href="data-mobil.php">
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </a>
          <a href="data-mobil.php">
            <button type="button" class="btn btn-danger">Batal</button>
          </a>
        </div>
      </div>
    </form>
    <!-- form tambah data  -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>