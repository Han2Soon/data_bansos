<?php include 'header.php'?>
<div class="container" style="margin-top: 50px;">
</div>
<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Tambah Pengguna</h3><br>
<form action="simpan_pengguna.php" method="post">
        <table class="table table-borderd table-danger">
        <tr>
                <td>ID</td>
                <td><input type="text" name="id" placeholder="ID" class="form-control"></td>
            </tr>  
          <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="usernama" placeholder="Username" class="form-control"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="text" name="password" placeholder="Password" class="form-control"></td>
          </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="list_pengguna.php" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
        </table>
<?php include 'footer.php'?>
