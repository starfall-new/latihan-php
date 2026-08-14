<?php
require_once("Connect.php");

if (isset($_POST['tambah'])) { 
    $nama = $_POST['name'];
    $kelas = $_POST['kelas'];

    $query = mysqli_query($koneksi, "INSERT INTO sekolah (nama, kelas) VALUES ('$nama', '$kelas')");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal ditambahkan: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa Baru</h2>

    <form action="" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>
        
        <button type="submit" name="tambah">Simpan Data</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>