<?php include 'header.php'?> 

<?php if (isset($_GET['status'])) : ?>
  <?php if ($_GET['status'] === 'berhasil') : ?>
    <div id="success-alert" class="alert alert-danger" role="alert">
      <i class="bi bi-trash-fill"></i> Data Berhasil Dihapus!
    </div>
  <?php elseif ($_GET['status'] === 'gagal') : ?>
    <div id="error-alert" class="alert alert-danger" role="alert">
      Data Gagal Dihapus!
    </div>
  <?php endif; ?>
<?php endif; ?>

      <div class="container my-5">
      <h1 class="text-center mb-4 badge bg-danger w-25 p-3 fs-5 fw-bold" style=" margin-left:500px; ">Data Kecamatan</h1><br>
        <a href="tambah_kecamatan.php" class="btn btn-info"><i class= "bi bi-plus-circle-fill" ></i>Tambah Kecamatan</a>
        <hr>
        <table class="table table-bordered table-striped border-dark table-danger">
        <thead class="table-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kecamatan</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $kecamatan = mysqli_query($connect, "select * from kecamatan") ;
            while($row=mysqli_fetch_array($kecamatan)){
            ?>
            <tr>
                <td><?php echo $row['id_kecamatan']?></td>
                <td><?php echo $row['nama_kecamatan']?></td>
                <td>
                <a href="edit_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan']; ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id_kecamatan']; ?>">
                <i class="bi bi-trash-fill"> Delete</i>
              </button>
              <div class="modal fade" id="deleteModal<?php echo $row['id_kecamatan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus Data Kecamatan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah Anda yakin ingin menghapus data kecamatan dengan nama: <?php echo $row['nama_kecamatan']; ?>?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <a href="delete_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php
          }
        ?> 
            
            </tbody>
        </table>
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
    <?php include 'footer.php' ?>
  </body>
</html>