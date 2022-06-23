<?php require "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <!-- awal-container  -->
  <div class="container">

    <!-- form data barang  -->
    <div class="card mt-4 mb-4">
      <div class="card-header bg-dark text-white text-center">
        Form Data Rental Mobil
      </div>
      <div class="card-body">
        <a href="crud/tambah.php">
          <button type="button" class="btn btn-success mb-4">Tambahkan Data</button>
        </a>
        <table class="table table-dark table-striped table-hover table-bordered">
          <tr>
            <th>NO</th>
            <th>Nama Costumer</th>
            <th>Alamat Costumer</th>
            <th>Nomer Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Atur</th>
          </tr>
          <tr>
            <td>1.</td>
            <td>Bagus Nararya</td>
            <td>Gianyar</td>
            <td>087347273423</td>
            <td>Pria</td>
            <td class="text-center">
              <a href="crud/edit.php" class="btn btn-warning">EDIT</a>
              <a href="home.php" class="btn btn-danger">DELETE</a>
            </td>
          </tr>
        </table>
      </div>
      <div class="card-footer bg-dark"></div>
    </div>
    <!-- form data barang  -->

  </div>
  <!-- awal-container  -->

</body>
</html>