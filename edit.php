<?php
require_once('Connect.php');

$siswa = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM murid WHERE id = '$id'"); 
    if ($ambilData) {
        $siswa = mysqli_fetch_assoc($ambilData);
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($koneksi, "UPDATE murid SET name = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE id = '$id'");

    if ($query) {
        header("Location: home.php");
        exit;
    } else {
        echo "Data gagal diubah: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <?php if ($siswa) : ?>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $siswa['id']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Nisn</label>
                        <input type="text" name="nisn" class="form-control"value="<?= isset($siswa['nisn']) ? $siswa['nisn'] : $siswa['nisn']; ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= isset($siswa['name']) ? $siswa['name'] : $siswa['nama']; ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" value="<?= $siswa['kelas']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <select type="text" name="jurusan" class="form-control" value="<?= $siswa['jurusan']; ?>" required>
                            <option value="RPL">RPL</option>
                            <option value="TJKT">TJKT</option>
                            <option value="AKKUL">AKKUL</option>
                            <option value="PS">PS</option>
                            <option value="MPLB">MPLB</option>
                        </select>
                    </div>
                    <button type="submit" name="edit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="home.php" class="btn btn-danger">Batal</a>
                </form>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan!
                </div>
                <a href="home.php" class="btn btn-secondary">Kembali</a>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>