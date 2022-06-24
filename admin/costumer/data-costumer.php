<?php require "../header.php"; ?>

<!-- Menampilkan Data (SELECT.PHP) -->
<?php require "../functions.php"; 

$costumer = query($conn, "SELECT * FROM tb_costumer"); 

if(isset($_POST)) {

}

?>

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
        <a href="tambah-costumer.php">
          <button type="button" class="btn btn-success mb-4">Tambahkan Data</button>
        </a>
        <table class="table table-dark table-striped table-hover table-bordered">
          <tr>
            <th>No.</th>
            <th>Nama Costumer</th>
            <th>Alamat Costumer</th>
            <th>Nomer Telepon</th>
            <th>Jenis Kelamin</th>
            <th style="width: 160px;">Aksi</th>
          </tr>

          <?php $id = 1; ?>
          <?php foreach ($costumer as $row) : ?>
          <tr>
            <td><?= $id?></td>
            <td><?= $row["nama_costumer"];?></td>
            <td><?= $row["alamat_costumer"];?></td>
            <td><?= $row["nomer_telepon"];?></td>
            <td><?= $row["jenis_kelamin"];?></td>
            <td class="text-center">
              <a href="edit-costumer.php" class="btn btn-warning">EDIT</a>
              <a href="hapus-costumer.php?id=<?= $row["id_costumer"];?>" class="btn btn-danger">DELETE</a>
            </td>
          </tr>
          <?php $id++ ?>
          <?php endforeach; ?>
        </table>
      </div>
      <div class="card-footer bg-dark"></div>
    </div>
    <!-- form data barang  -->

  </div>
  <!-- awal-container  -->

</body>
</html>