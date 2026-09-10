<?php
require_once("Connect.php");

if (isset($_POST['tambah'])) { 
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($koneksi, "INSERT INTO murid (nisn, name, kelas, jurusan) VALUES ('$nisn', '$nama', '$kelas', '$jurusan')");

    if ($query) {
        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Data gagal ditambahkan: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">

            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nisn</label>
                    <input placeholder="Masukan Nisn" type="text" name="nisn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input placeholder="Masukan Nama" type="text" name="nama" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input placeholder="Masukan Kelas" type="text" name="kelas" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select type="text" name="jurusan" class="form-control" required>
                            <option>Pilih Jurusan</option>
                            <option>RPL</option>
                            <option>TJKT</option>
                            <option>AKKUL</option>
                            <option>PS</option>
                            <option>MPLB</option>
                        </select>
                </div>
                
                <button type="submit" name="tambah" class="btn btn-primary">Simpan Data</button>
                <a href="home.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>