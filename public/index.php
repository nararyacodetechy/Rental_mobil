<?php require "header.php"; ?>

<!-- Menampilkan Data (SELECT.PHP) -->
<?php require "../admin/functions.php"; 

$merekMobil = query($conn, "SELECT * FROM tb_mobil"); 

if(isset($_POST)) {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenCars</title>
</head>
<body>
    <div class="container">
        <div class="card-header bg-dark text-white text-center">
            Form Data Rental Mobil
        </div>
        <div class="card mt-4 mb-4 text-center">
            <?php $id = 1; ?>
            <?php foreach ($merekMobil as $row) : ?>
            <div class="card text-center" style="width: 100%;">
                <img src="../mobil/<?= $row["gambar_mobil"];?>" class="card-img-top mx-auto" alt="..." style="width:400px; height:300px;">
                <div class="card-body">
                    <h5 class="merek-mobil text-warning"><?= $row["merek_mobil"];?></h5>
                    <h2 class="harga-sewa"><?= $row["harga_sewa_nama"];?></h2>
                    <p class="mobil-sopir"><?= $row["mobil_sopir"];?></p>
                    <p class="bbm"><?= $row["bbm"];?></p>
                    <p class="penumpang"><?= $row["jumblah_penumpang"];?> Penumpang</p>
                    <p class="plat-mobil">Plat Mobil : <?= $row["plat_mobil"];?></p>

                    <a href="tambah.php?id=<?= $row["id_mobil"] ?>" class="btn btn-primary">Sewa Sekarang</a>
                </div>
            </div>
            <?php $id++ ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>