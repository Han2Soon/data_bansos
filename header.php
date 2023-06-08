  <?php
  session_start();
  if(empty($_SESSION['usernama'])){
    header("location:login.php");
  }

  include 'koneksi.php';
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Data Bansos Kotamobagu</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
      <style>
        body {
          background-size: 100% 100%;
          background-image: url('foto.jpg');
          background-attachment: fixed;
        }

        .navbar-custom {
          background-color: #f44336;
          padding: 1rem;
        }

        .navbar-brand {
          font-weight: bold;
          color: #fff;
          font-size: 24px;
        }

        .navbar-toggler {
          border-color: #fff;
        }

        .navbar-toggler-icon {
          background-color: #fff;
        }

        .navbar-nav .nav-link {
          color: #fff;
          font-weight: bold;
          margin-right: 10px;
          font-size: 18px;
        }

        .navbar-nav .nav-link:hover {
          color: #ffcdd2;
        }
      </style>

      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WELCOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Data Masyarakat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kecamatan.php">Data Kecamatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="desa.php">Data Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="list_pengguna.php">Data Pengguna</a>
              </li>
              <li class="nav-item dropdown"style="margin-left: 500px">
          <div class="btn-group">
              <button type="button" class="btn btn-warning"><?php echo $_SESSION['nama'];?></button>
              <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-in-right"></i>Logout</a></li>
              </ul>
          </div>
            </li>
            </ul>
          </div>
        </div>
      </nav>
