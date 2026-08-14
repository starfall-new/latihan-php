<?php
require_once('Connect.php');
$data = mysqli_query($koneksi, "SELECT * FROM sekolah");

echo "<p>Koneksi berhasil</p>";
echo "<h2>Menejemen siswa</h2>";
echo "<a href='tambah.php'>+ Tambah Data</a><br><br>";
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>";

while($siswa = mysqli_fetch_assoc($data)) : ?>
<tr>
    <td><?= isset($i) ? ++$i : $i=1; ?></td>
    <td><?= $siswa['name']; ?></td>
    <td><?= $siswa['kelas']; ?></td>
    <td>
        <a href="edit.php?id=<?= $siswa['id']; ?>">Edit</a> | 
        <a href="hapus.php?id=<?= $siswa['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php 
endwhile; 
echo "</table>";
?>