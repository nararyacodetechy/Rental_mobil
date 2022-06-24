<?php require "../header.php"; ?>

<!-- Menampilkan Data (SELECT.PHP) -->
<?php require "../functions.php"; 

$costumer = query($conn, "SELECT * FROM tb_mobil"); 

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
        <a href="tambah-mobil.php">
          <button type="button" class="btn btn-success mb-4">Tambahkan Data</button>
        </a>
        <table class="table table-dark table-striped table-hover table-bordered">
          <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Merek Mobil</th>
            <th>Harga Sewa</th>
            <th>Harga Sewa Nilai</th>
            <th>Tersedia</th>
            <th>BBM</th>
            <th>Jumblah Penumpang</th>
            <th>Plat Mobil</th>
            <th style="width: 160px;">Aksi</th>
          </tr>

          <?php $id = 1; ?>
          <?php foreach ($costumer as $row) : ?>
          <tr>
            <td><?= $id ?></td>
            <td><?= $row["gambar_mobil"];?></td>
            <td><?= $row["merek_mobil"];?></td>
            <td><?= $row["harga_sewa_nama"];?></td>
            <td><?= $row["harga_sewa_angka"];?></td>
            <td><?= $row["mobil_sopir"];?></td>
            <td><?= $row["bbm"];?></td>
            <td><?= $row["jumblah_penumpang"];?></td>
            <td><?= $row["plat_mobil"];?></td>

            <td class="text-center">
              <a href="edit-mobil.php" class="btn btn-warning">EDIT</a>
              <a href="hapus-mobil.php?id=<?= $row["id_mobil"]; ?>" class="btn btn-danger">DELETE</a>
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