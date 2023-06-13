<?php include 'header.php' ?>

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
    <h1 class="text-center mb-4 badge bg-danger w-25 p-3 fs-5 fw-bold" style="margin-left: 500px;">Data Masyarakat</h1>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="tambah_masyarakat.php" class="btn btn-info"><i class="bi bi-person-plus-fill"></i>Tambah Data</a>
    </div>
    <?php
    if (isset($_GET['success'])) {
        $success = $_GET['success'];
        if ($success == "1") {
            echo '<div id="success-alert" class="alert alert-success" role="alert">Data berhasil ditambahkan dan di ubah.</div>';
        } elseif ($success == "0") {
            echo '<div id="error-alert" class="alert alert-danger" role="alert">Gagal menghapus data.</div>';
        }
    }
    ?>

    <script>
        setTimeout(function() {
            var successAlert = document.getElementById("success-alert");
            var errorAlert = document.getElementById("error-alert");

            if (successAlert) {
                successAlert.style.display = "none";
            }
            if (errorAlert) {
                errorAlert.style.display = "none";
            }
        }, 3000);
    </script>

    <table class="table table-bordered table-striped border-dark table-danger">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Status Masyarakat</th>
                <th scope="col">Desa</th>
                <th width="200">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $masyarakat = mysqli_query($connect, "SELECT m.*, k.nama_kecamatan, d.jenis_status, c.nama_desa from masyarakat as m join kecamatan as k on m.id_kecamatan=k.id_kecamatan join status_masyarakat as d on m.id_status=d.id_status join desa as c on m.id_desa=c.id_desa;");
            while ($row = mysqli_fetch_array($masyarakat)) {
            ?>
                <tr>
                    <td><?php echo $row['id_masyarakat']; ?></td>
                    <td><?php echo $row['nama_masyarakat']; ?></td>
                    <td><?php echo $row['nama_kecamatan']; ?></td>
                    <td><?php echo $row['jenis_status']; ?></td>
                    <td><?php echo $row['nama_desa']; ?></td>
                    <td>
                        <a href="edit_masyarakat.php?id_masyarakat=<?php echo $row['id_masyarakat']; ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id_masyarakat']; ?>">
                            <i class="bi bi-trash-fill"> Delete</i>
                        </button>
                        <div class="modal fade" id="deleteModal<?php echo $row['id_masyarakat']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Masyarakat</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data masyarakat dengan nama: <?php echo $row['nama_masyarakat']; ?>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="delete_masyarakat.php?id_masyarakat=<?php echo $row['id_masyarakat']; ?>" class="btn btn-danger">Hapus</a>
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

<?php include 'footer.php' ?>
