<?php 
require "../admin/functions.php";

if (isset($_POST["submit"])) {

    if (tambahOrder($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
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
        Form Order Mobil
        </div>
        <div class="card-body">
        <div class="mb-3">
            <label for="nama-costumer" class="form-label">Nama Costumer</label>
            <input type="text" name="nama-costumer" class="form-control" id="nama-costumer" placeholder="Masukan Nama Costumer" required>
          </div>
          <div class="mb-3">
            <label for="merek-mobil" class="form-label">Merek Mobil</label>
            <input type="text" name="merek-mobil" class="form-control" id="merek-mobil" placeholder="Masukan Merek Mobil" required>
          </div>
          <div class="mb-3">
            <label for="awal-sewa" class="form-label">Tanggal Awal Sewa</label>
            <input type="date" name="awal-sewa" class="form-control" id="awal-sewa" required>
          </div>
          <div class="mb-3">
            <label for="jangka-waktu" class="form-label">Jangka Waktu Sewa dalam Hari</label>
            <input type="text" name="jangka-waktu" class="form-control" id="jangka-waktu" placeholder="Masukan Jangka Waktu Sewa dalam Hari" required>
          </div>
          <div class="mb-3">
            <label for="harga-sewa" class="form-label">Harga Sewa</label>
            <input type="text" name="harga-sewa" class="form-control" id="harga-sewa" placeholder="Masukan Harga Sewa dalam Jumblah Angka" required>
          </div>
          
        </div> 
        <div class="card-footer bg-dark mb-4"></div>

        <!-- button add & delete -->
        <div class="text-center mb-4">
          <a href="data-order.php">
            <button type="submit" name="submit" class="btn btn-success">Order</button>
          </a>
          <a href="data-order.php">
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