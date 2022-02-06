<?php
require 'function.php';

$id_anggota = $_GET['id_anggota'];
$camaba = query("SELECT * FROM tb_anggota WHERE id_anggota = $id_anggota");
// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil diedit');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('maaf data gagal diedit');
    </script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan - Pusaka</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">Pepustakaan Pusaka</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Daftar Buku</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Anggota</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#buku">Tabel Buku</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <!-- Tabel Anggota-->
        <section class="page-section bg-primary text-white mb-0" id="contact">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Detail Anggota</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                    <div class="col-md-10 pd-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-users"></i> Edit Data Calon Mahasiswa</h3>
      <hr>

      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $camaba['id_anggota'] ?>" name="id_anggota">

        <div class="form-group">
          <label for="nama">Nama : </label>
          <input type="text" class="form-control" id="nama" value="<?= $camaba['nama'] ?>" placeholder="nama lengkap" name="nama" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin : </label>
          <input type="text" class="form-control" id="jenis_kelamin" value="<?= $camaba['jenis_kelamin'] ?>" placeholder="jenis kelamin" name="jenis_kelamin" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="alamat_rumah">Alamat : </label>
          <input type="text" class="form-control" id="alamat_rumah" value="<?= $camaba['alamat_rumah'] ?>" placeholder="Alamat anda" name="alamat_rumah" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="agama">Agama : </label>
          <input type="text" class="form-control" id="agama" value="<?= $camaba['agama'] ?>" placeholder="agama anda" name="agama" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="foto">Foto : </label>
          <input type="text" class="form-control" id="foto" value="<?= $camaba['foto'] ?>" placeholder="input foto anda" name="foto" required autocomplete="off">
        </div>
        <a href="detail_anggota.php" class="btn btn-primary" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
      </form>
    </div>
  </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Social Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
