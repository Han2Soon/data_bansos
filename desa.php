<?php include 'header.php'?> 
      <div class="container my-5">
      <h1 class="text-center mb-4 badge bg-danger w-25 p-3 fs-5 fw-bold" style=" margin-left:500px; ">Data Desa</h1><br>
        <a href="tambah_desa.php" class="btn btn-info"><i class="bi bi-plus-circle-fill"></i>Tambah Desa</a>
        <hr>
        <table class="table table-bordered table-striped border-dark table-danger">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Desa</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $desa = mysqli_query($connect, "select * from desa") ;
            while($row=mysqli_fetch_array($desa)){
            ?>
            <tr>
                <td><?php echo $row['id_desa']?></td>
                <td><?php echo $row['nama_desa']?></td>
                <td>
                <a href="edit_desa.php?id_desa=<?php echo $row['id_desa']; ?>" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>
                <a href="delete_desa.php?id_desa=<?php echo $row['id_desa']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
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