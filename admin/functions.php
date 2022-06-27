<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_rental_mobil";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
// if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connection Succes!";
// }

function query ($conn, $query) {
    // global $conn;  

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapusCostumer($ids) {
    global $conn;

    $delete = "DELETE FROM tb_costumer WHERE id_costumer = $ids";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}

function hapusMobil($ids) {
    global $conn;

    $delete = "DELETE FROM tb_mobil WHERE id_mobil = $ids";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}

function hapusOrder($ids) {
    global $conn;

    $delete = "DELETE FROM tb_transaksi WHERE id_sewa = $ids";
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
}

function tambahCostumer ($data) {
    global $conn;

    $namaCostumer = htmlspecialchars($data["nama-costumer"]);
    $alamatCostumer = htmlspecialchars($data["alamat-costumer"]);
    $nomerTelepon = htmlspecialchars($data["nomer-telepon"]);
    $jenisKelamin = htmlspecialchars($data["jenis-kelamin"]);

    $insert = "INSERT INTO tb_costumer VALUES ('', '$namaCostumer', '$alamatCostumer', '$nomerTelepon', '$jenisKelamin')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function tambahMobil ($data) {
    global $conn;

    $gambarMobil = upload();
    if(!$gambarMobil) {
        return false;
    } 
    $merekMobil = htmlspecialchars($data["merek-mobil"]);
    $hargaSewa = htmlspecialchars($data["harga-sewa"]);
    $hargaSewaNilai = htmlspecialchars($data["harga-sewa-nilai"]);
    $mobilSopir = htmlspecialchars($data["mobil-sopir"]);
    $bbm = htmlspecialchars($data["bbm"]);
    $jumblahPenumpang = htmlspecialchars($data["jumblah-penumpang"]);
    $platMobil = htmlspecialchars($data["plat-mobil"]);

    $insert = "INSERT INTO tb_mobil VALUES ('', '$gambarMobil', '$merekMobil', '$hargaSewa', '$hargaSewaNilai', '$mobilSopir','$bbm', $jumblahPenumpang, '$platMobil')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function tambahOrder ($data) {
    global $conn;

    $namaCostumer = htmlspecialchars($data["nama-costumer"]);
    $merekMobil = htmlspecialchars($data["merek-mobil"]);
    $awalSewa = htmlspecialchars($data["awal-sewa"]);
    $jangkaWaktu = htmlspecialchars($data["jangka-waktu"]);
    $hargaSewa = htmlspecialchars($data["harga-sewa"]);
    $totalBayar = htmlspecialchars($data["total-bayar"]);
    $statusBayar = htmlspecialchars($data["status-bayar"]);

    $insert = "INSERT INTO tb_transaksi VALUES ('', '$namaCostumer', '$merekMobil', '$awalSewa', '$jangkaWaktu', '$hargaSewa','$totalBayar', '$statusBayar')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function ubahCostumer ($data) {
    global $conn;

    $id = $data["id-costumer"];
    $namaCostumer = htmlspecialchars($data["nama-costumer"]);
    $alamatCostumer = htmlspecialchars($data["alamat-costumer"]);
    $nomerTelepon = htmlspecialchars($data["nomer-telepon"]);
    $jenisKelamin = htmlspecialchars($data["jenis-kelamin"]);

    $update = "UPDATE tb_costumer SET nama_costumer = '$namaCostumer', alamat_costumer = '$alamatCostumer', nomer_telepon = '$nomerTelepon', jenis_kelamin = '$jenisKelamin' WHERE id_costumer = $id";
    
    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}

function ubahMobil ($data) {
    global $conn;

    $id = $data["id-mobil"];
    $gambarMobil = upload();
    if(!$gambarMobil) {
        return false;
    }
    $merekMobil = htmlspecialchars($data["merek-mobil"]);
    $hargaSewa = htmlspecialchars($data["harga-sewa"]);
    $hargaSewaNilai = htmlspecialchars($data["harga-sewa-nilai"]);
    $mobilSopir = htmlspecialchars($data["mobil-sopir"]);
    $bbm = htmlspecialchars($data["bbm"]);
    $jumblahPenumpang = htmlspecialchars($data["jumblah-penumpang"]);
    $platMobil = htmlspecialchars($data["plat-mobil"]);

    $update = "UPDATE tb_mobil SET gambar_mobil = '$gambarMobil', merek_mobil = '$merekMobil', harga_sewa_nama = '$hargaSewa', harga_sewa_angka = '$hargaSewaNilai', mobil_sopir = '$mobilSopir', bbm = '$bbm', jumblah_penumpang = '$jumblahPenumpang', plat_mobil = '$platMobil' WHERE id_mobil = $id"; 
    
    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}

function ubahTransaksi ($data) {
    global $conn;

    $id = $data["id-sewa"];
    $namaCostumer = htmlspecialchars($data["nama-costumer"]);
    $merekMobil = htmlspecialchars($data["merek-mobil"]);
    $awalSewa = htmlspecialchars($data["awal-sewa"]);
    $jangkaWaktu = htmlspecialchars($data["jangka-waktu"]);
    $hargaSewa = htmlspecialchars($data["harga-sewa"]);
    $totalBayar = htmlspecialchars($data["total-bayar"]);
    $statusBayar = htmlspecialchars($data["status-bayar"]);

    $update = "UPDATE tb_transaksi SET nama_costumer = '$namaCostumer', merek_mobil = '$merekMobil', tanggal_awal_sewa = '$awalSewa', jangka_waktu_sewa = '$jangkaWaktu', harga_sewa_perhari = '$hargaSewa', total_bayar = '$totalBayar', status_sewa = '$statusBayar' WHERE id_sewa = $id"; 
    
    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}

function upload() {
    global $error;
    $namaFile = $_FILES['gambar-mobil']['name'];
    $sizeFile = $_FILES['gambar-mobil']['size'];
    $error = $_FILES['gambar-mobil']['error'];
    $tmpName = $_FILES['gambar-mobil']['tmp_name'];

    //cek apakah gambar sudah di upload
        if($error === 4) {
            echo '<div class="alert alert-danger" role="alert">
                Pilih Gambar Terlebih Dahulu !
              </div>';
            return false;
        }

    // cek ekstensi file agar user tidak memasukkan gambar yang tidak disarankan
        $formatEkstensiValid = ['jpg', 'png', 'jpeg'];
        //explode untuk memecah format file menjadi array => (nama file) . (ekstensi) contoh : sandika.jpg
        $ekstensiGambar = explode('.', $namaFile);
        //strtolower => mengubah namafile huruf kecil semua
        $ekstensiGambar = strtolower(end($ekstensiGambar)); 

    // cek apakah gambar yang di upload sudah sesuai
        if (!in_array($ekstensiGambar, $formatEkstensiValid)) {
            echo '<div class="alert alert-danger" role="alert">
                    Format Tidak Sesuai !, Pastikan memilih telah gambar.
                  </div>';
            return false;
        }

    // cek apakah ukuran gambar terlalu besar
        if ($sizeFile > 1000000) {
            echo '<div class="alert alert-danger" role="alert">
                    Ukuran Gambar Terlalu Besar !
                  </div>';
            return false;
        }

    // jika file sesuai maka upload gambar pada lokasi file yang telah ditentukan
        // generate nama file sehingga gambar tidak tertimpa 
        $namaFileGenerate = uniqid();
        $namaFileGenerate .= '.';
        $namaFileGenerate .= $ekstensiGambar;

        // pindah lokasi file 
        move_uploaded_file($tmpName, '../../mobil/'.$namaFileGenerate);

        return $namaFileGenerate;
}


function registrasi($data) {
    global $conn;

    $yourName = strtolower(stripslashes($data["your-name"]));
    $yourEmail = strtolower(stripslashes($data["your-email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $passwordConfirm = mysqli_real_escape_string($conn, $data["passwordConfirm"]);

    // cek apakah username dan email sudah tersedia
    $result = mysqli_query($conn, "SELECT your_name FROM tb_users WHERE your_name = '$yourName'");
    if (mysqli_fetch_assoc($result)) {
        echo '<div class="alert alert-danger" role="alert">
                Username Sudah Tersedia !
              </div>';
        return false;
    }

    // cek apakah konfirmasi password sudah sesuai 
    if( $password !== $passwordConfirm) {
        echo '<div class="alert alert-danger" role="alert">
                Password Tidak Sesuai !
              </div>'; 
        return false;
    }   

    // encrypsi password
    $encrypsiPwd = password_hash($password, PASSWORD_DEFAULT);

    // menghubungkan ke dataabase
    mysqli_query($conn, "INSERT INTO tb_users VALUES ('', '$yourName', '$yourEmail', '$encrypsiPwd')");

    return mysqli_affected_rows($conn);
}

function registrasiAdmin($data) {
    global $conn; 

    $yourName = strtolower(stripslashes($data["your-name"]));
    $yourEmail = strtolower(stripslashes($data["your-email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $passwordConfirm = mysqli_real_escape_string($conn, $data["passwordConfirm"]);

    // cek apakah username dan email sudah tersedia
    $result = mysqli_query($conn, "SELECT name_admin FROM tb_admin WHERE name_admin = '$yourName'");
    if (mysqli_fetch_assoc($result)) {
        echo '<div class="alert alert-danger" role="alert">
                Username Sudah Tersedia !
              </div>';
        return false;
    }

    // cek apakah konfirmasi password sudah sesuai 
    if( $password !== $passwordConfirm) {
        echo '<div class="alert alert-danger" role="alert">
                Password Tidak Sesuai !
              </div>'; 
        return false;
    }   

    // encrypsi password
    $encrypsiPwd = password_hash($password, PASSWORD_DEFAULT);

    // menghubungkan ke dataabase
    mysqli_query($conn, "INSERT INTO tb_admin VALUES ('', '$yourName', '$yourEmail', '$encrypsiPwd')");

    return mysqli_affected_rows($conn);
}

function cariCostumer($keyword) {
    global $conn; 
    $search = "SELECT * FROM tb_costumer WHERE  nama_costumer LIKE '%$keyword%' OR
                                                alamat_costumer LIKE '%$keyword%' OR
                                                nomer_telepon LIKE '%$keyword%' OR
                                                jenis_kelamin LIKE '%$keyword%'
              ";
    return query($conn, $search);
}

function cariMobil($keyword) {
    global $conn; 
    $search = "SELECT * FROM tb_mobil WHERE     merek_mobil LIKE '%$keyword%' OR
                                                harga_sewa_nama LIKE '%$keyword%' OR
                                                harga_sewa_angka LIKE '%$keyword%' OR
                                                mobil_sopir LIKE '%$keyword%' OR
                                                bbm LIKE '%$keyword%' OR
                                                jumblah_penumpang LIKE '%$keyword%' OR
                                                plat_mobil LIKE '%$keyword%'
              ";
    return query($conn, $search);
}

function cariOrder($keyword) {
    global $conn; 
    $search = "SELECT * FROM tb_transaksi WHERE nama_costumer LIKE '%$keyword%' OR
                                                merek_mobil LIKE '%$keyword%' OR
                                                tanggal_awal_sewa LIKE '%$keyword%' OR
                                                jangka_waktu_sewa LIKE '%$keyword%' OR
                                                harga_sewa_perhari LIKE '%$keyword%' OR
                                                total_bayar LIKE '%$keyword%' OR
                                                status_sewa LIKE '%$keyword%'
              ";
    return query($conn, $search); 
}

?>