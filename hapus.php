<?php
require_once('Connect.php');

if(isset($_GET['id'])) {
    $id = $_POST['id'];
    $query = mysqli_query($koneksi, "DELETE FROM sekolah WHERE id = $id");

    if ($query) {
        echo "<script>
        alert('Data berhasil di hapus.');
        window.location.href= 'index.php';
        </script>"
    } else {
        echo "<script>
        alert('Data id tidak ada');
        window.location.href= 'index.php';
        </script>"
    }
}
?>