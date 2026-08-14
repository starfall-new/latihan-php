<?php
require_once("Connect.php");

if (isset($_POST['tambah'])) { 
    $nama = $_POST['name'];
    $kelas = $_POST['kelas'];

    $query = mysqli_query($koneksi, "INSERT INTO sekolah (nama, kelas) VALUES ('$nama', '$kelas')");

    if ($query) {
        echo "Data gagal ditambahkan";
        exit;
    } else {
        echo "Data gagal ditambahkan: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>Tambah Data</p>

    <form action="" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>
        
        <label>Kelas:</label>
        <input type="text" name="kelas" required><br><br>
        
        <button type="submit" name="tambah">Simpan Data</button>
    </form>
</body>
</html>