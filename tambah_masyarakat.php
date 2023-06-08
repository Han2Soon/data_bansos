<?php include 'header.php'?>
<div class="container" style="margin-top: 50px;">
</div>
<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Tambah Masyarakat</h3><br>
<form action="simpan_masyarakat.php" method="post">
        <table class="table table-borderd table-danger">
        <tr>
                <td>ID</td>
                <td><input type="text" name="id_masyarakat" placeholder="ID" class="form-control"></td>
            </tr>  
          <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_masyarakat" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td><select name="id_kecamatan" class="form-select">
                  <?php
                  $kec = mysqli_query($connect,"select * from kecamatan");
                  while ($keca = mysqli_fetch_array($kec)) {
                    echo "<option value='".$keca['id_kecamatan']."'>".$keca['nama_kecamatan']."</option>";
                  }
                  ?>
                </select></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="id_status" class="form-select">
                  <?php
                  $sta = mysqli_query($connect,"select * from status_masyarakat");
                  while ($stat = mysqli_fetch_array($sta)) {
                    echo "<option value='".$stat['id_status']."'>".$stat['jenis_status']."</option>";
                  }
                  ?>
                </select></td>
            </tr>
            <tr>
                <td>Desa</td>
                <td><select name="id_desa" class="form-select">
                  <?php
                  $de = mysqli_query($connect,"select * from desa");
                  while ($des = mysqli_fetch_array($de)) {
                    echo "<option value='".$des['id_desa']."'>".$des['nama_desa']."</option>";
                  }
                  ?>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td>
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="index.php" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
        </table>
<?php include 'footer.php'?>
