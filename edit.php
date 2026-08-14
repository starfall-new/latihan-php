<?php
require_once('Connect.php');

$siswa = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM sekolah WHERE id = '$id'"); 
    if ($ambilData) {
        $siswa = mysqli_fetch_assoc($ambilData);
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $kelas = $_POST['kelas'];

    $query = mysqli_query($koneksi, "UPDATE sekolah SET nama = '$nama', kelas = '$kelas' WHERE id = '$id'");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>Edit Data Siswa</p>

    <?php if ($siswa) { ?>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
        
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $siswa['name']; ?>" required><br><br>
        
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?php echo $siswa['kelas']; ?>" required><br><br>
        
        <button type="submit" name="edit">Simpan Perubahan</button>
    </form>
    <?php } else { ?>
        <p>Data tidak ditemukan! Pastikan kamu masuk dari tombol Edit di index.php</p>
        <a href="index.php">Kembali</a>
    <?php } ?>
</body>
</html>