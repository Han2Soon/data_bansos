<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body {
        background-size: 100% 100%;
        background-image: url('foto.jpg');
        background-attachment: fixed;
      }
      html,
      body {
        height: 100%;
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .form-signin {
        width: 100%;
        max-width: 620px;
        padding: 15px;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <form class="form-signin" action="simpan_daftar.php" method="POST">
      <h4 class="text-center mb-1 badge bg-danger fs-5 p-10 fw-bold">Daftar Sekarang</h4><br>
      <hr>
      <div class="alert alert-danger" role="alert">
        Silahkan Masukkan Nama Lengkap, Username, dan Password untuk Daftar
      </div>
      <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control border border-primary">
        <label class="form-label">Username</label>
        <input type="text" name="usernama" placeholder="Username" class="form-control border border-primary">
        <div id="emailHelp" class="form-text">Kami Akan Menjaga Data Pribadi Anda.</div>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" placeholder="Password" class="form-control border border-primary">
      </div>
      <div class="mb-3 form-check">
        <button type="submit" class="btn btn-success">Daftar</button>
        <a href="login.php" class="btn btn-primary">Kembali</a>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
