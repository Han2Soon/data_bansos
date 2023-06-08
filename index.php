<?php include 'header.php' ?>

    <div class="container my-5">
      <h1 class="text-center mb-4 badge bg-danger w-25 p-3 fs-5 fw-bold" style=" margin-left:500px; ">Data Masyarakat</h1>
      <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="tambah_masyarakat.php" class="btn btn-info"><i class="bi bi-person-plus-fill"></i>Tambah Data</a>
        </form>
      </div>
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
          $masyarakat = mysqli_query($connect, "SELECT m.*,k.nama_kecamatan,d.jenis_status, c.nama_desa from masyarakat as m join kecamatan as k on m.id_kecamatan=k.id_kecamatan join status_masyarakat as d on m.id_status=d.id_status join desa as c on m.id_desa=c.id_desa;");
          while ($row = mysqli_fetch_array($masyarakat)) {
          ?>
            <tr>
              <td><?php echo $row['id_masyarakat']; ?></td>
              <td><?php echo $row['nama_masyarakat']; ?></td>
              <td><?php echo $row['nama_kecamatan']; ?></td>
              <td><?php echo $row['jenis_status']; ?></td>
              <td><?php echo $row['nama_desa']; ?></td>
              <td>
                <a href="edit_masyarakat.php?id_masyarakat=<?php echo $row['id_masyarakat']; ?>" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>
                <a href="delete_masyarakat.php?id_masyarakat=<?php echo $row['id_masyarakat']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <?php include 'footer.php' ?>
  </body>
</html>
