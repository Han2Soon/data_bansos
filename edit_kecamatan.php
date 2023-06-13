<?php include 'header.php';

$id_kecamatan= $_GET['id_kecamatan'];
$query = mysqli_query($connect,"select * from kecamatan where id_kecamatan='$id_kecamatan'");
$kecamatan = mysqli_fetch_array($query);
//print_r($penggun)a;?>


<?php if (isset($_GET['status'])) : ?>
    <?php if ($_GET['status'] === 'berhasil') : ?>
      <div id="success-alert" class="alert alert-success" role="alert">
        Data Berhasil Diupdate!
      </div>
    <?php elseif ($_GET['status'] === 'gagal') : ?>
      <div id="error-alert" class="alert alert-danger" role="alert">
       Data gagal Diupdate!

      </div>
    <?php endif; ?>
  <?php endif; ?>

<div class="container" style="margin-top: 50px; ">

<h1 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Edit Data Kecamatan</h1><br>
<form action="update_kecamatan.php" method="post">
<table class="table table-borderd table-danger">    
        <tr>
                <td>ID Kecamatan</td>
                <td><input type="text" name="id_kecamatan"value="<?php echo $kecamatan['id_kecamatan']?>" placeholder="ID" class="form-control"></td>
            </tr>
         
        <tr>
                <td>Nama Kecamatan</td>
                <td><input type="text" name="nama_kecamatan" value="<?php echo $kecamatan['nama_kecamatan']?>" placeholder="Nama Kecamatan" class="form-control"></td>
            </tr>
            </table> 
<div>
    <td>
      <button type="submit" class="btn btn-success">Simpan Data</button>
      <a href="kecamatan.php" class="btn btn-primary">Kembali</a>
      </a>
    </td>
  </tr>

        </from>
</div>

<script>
  // Hide success alert after 2 seconds
  setTimeout(function() {
    var successAlert = document.getElementById('success-alert');
    if (successAlert) {
      successAlert.style.display = 'none';
    }
  }, 2000);

  // Hide error alert after 2 seconds
  setTimeout(function() {
    var errorAlert = document.getElementById('error-alert');
    if (errorAlert) {
      errorAlert.style.display = 'none';
    }
  }, 2000);
  </script>

<?php include 'footer.php'?>


