<?php include 'header.php'?>

<?php if (isset($_GET['status'])) : ?>
  <?php if ($_GET['status'] === 'berhasil') : ?>
    <div id="success-alert" class="alert alert-success" role="alert">
      Berhasil tambahkan data desa!
    </div>
  <?php elseif ($_GET['status'] === 'gagal') : ?>
    <div id="error-alert" class="alert alert-danger" role="alert">
      Gagal tambahkan data desa!
    </div>
  <?php elseif ($_GET['status'] === 'gagal_nama_kecamatan') : ?>
    <div id="error-alert" class="alert alert-danger" role="alert">
      Gagal tambahkan data! Nama desa sudah ada.
    </div>
  <?php endif; ?>
<?php endif; ?>


<div class="container" style="margin-top: 50px;">
</div>
<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Tambah Desa</h3><br>
<form action="simpan_desa.php" method="post">
        <table class="table table-borderd table-danger">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_desa" placeholder="ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Desa</td>
                <td><input type="text" name="nama_desa" placeholder="Desa" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="desa.php" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
        </table>
<?php include 'footer.php'?>
