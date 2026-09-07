<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  
  <body class="d-flex flex-column min-vh-100">

    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--End of NAVBAR-->

    <!--Main Content-->
    <div class ="container my-5">
    <div class="card">
  <div class="card-header">
    Data Siswa
  </div>
  <div class="card-body">
    <a href="tambah.php" class="bg-dark btn btn-primary">Tambah Data</a>
    <table class="table table-bordered border-primary my-3">
  <thead>
    <tr>
      <td scope="col">No</td>
      <td scope="col">Nis</td>
      <td scope="col">Nama</td>
      <td scope="col">Kelas</td>
      <td scope="col">Jurusan</td>
      <td scope="col">Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php
  require_once ('Connect.php')  ;
  $query = "SELECT * FROM murid";
  $result = mysqli_query($koneksi, $query);
  $i = 0;
  ?>
  <?php while($siswa = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <th scope="row"><?= isset($i) ? ++$i : $siswa['id']?></th>
      <td><?= $siswa['nisn'] ?></td>
      <td<?= $siswa['nisn'] ?>></td>
      <td><?= $siswa['name'] ?></td>
      <td><?= $siswa['kelas'] ?></td>
      <td><?= $siswa['jurusan'] ?></td>
          <td><a href="edit.php?id=<?= $siswa['id'] ?>" class="btn btn-success">Edit</a>
        <a href="hapus.php?id=<?= $siswa['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </td>
  </tr>
<?php endwhile; ?>
  </tbody>
</table>
  </div>
</div>
</div>
<!--End Of Content-->

<!--FOOTER-->
<footer class="bg-primary text-center text-lg-start mt-auto" >
    <div class="container p-4">
        <p>&copy; 2026 StudentAPP. All right reserved.</p>
    </div>
</footer>
<!--End Of FOOTER-->

<!---->

<!---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>