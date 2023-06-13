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

<div class="container" style="margin-top: 50px;">
    <h1 class="text-center mb-4 btn btn-danger w-25 p-3 fs-5 fw-bold" style=" margin-left:500px; ">Data Pengguna</h1><br>
    <a href="tambah_pengguna.php" class="btn btn-info"><i class="bi bi-person-plus-fill"></i>Tambah Data</a>
    <hr>

    <?php if (isset($_SESSION['notification'])): ?>
        <div class="alert <?php echo $_SESSION['notification']['status']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['notification']['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['notification']); ?>
        <script>
            // Menghilangkan notifikasi setelah 3 detik
            setTimeout(function() {
                var notification = document.querySelector('.alert-dismissible');
                if (notification) {
                    notification.remove();
                }
            }, 3000);
        </script>
    <?php endif; ?>

    <table class="table table-bordered table-striped border-dark table-danger">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th width="200">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $pengguna = mysqli_query($connect, "SELECT * FROM pengguna");
            while ($row = mysqli_fetch_array($pengguna)) {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['usernama'] ?></td>
                    <td>********</td>
                    <td>
                        <a href="edit_pengguna.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id']; ?>">
                <i class="bi bi-trash-fill"> Delete</i>
              </button>
              <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengguna</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah Anda yakin ingin menghapus data pengguna dengan nama: <?php echo $row['nama']; ?>?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <a href="delete_pengguna.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php
                $nomor++;
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
