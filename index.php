<?php
include "Connect.php";

$result = mysqli_query($koneksi, "SELECT * FROM sekolah");
?>

<h2>Manajemen Siswa</h2>
<a href='tambah.php'>+ Tambah Data</a><br><br>

<table border='1' cellpadding='8' cellspacing='0'>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    <?php 
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) : 
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td>
                <!-- Pastikan parameter id menggunakan id_siswa -->
                <a href="edit.php?id=<?= $row['id_siswa']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id_siswa']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>