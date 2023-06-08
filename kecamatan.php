<?php include 'header.php'?> 
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
            $kec = mysqli_query($connect, "select * from kecamatan") ;
            while($row=mysqli_fetch_array($kec)){
            ?>
            <tr>
                <td><?php echo $row['id_kecamatan']?></td>
                <td><?php echo $row['nama_kecamatan']?></td>
                <td>
                <a href="edit_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan']; ?>" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>
                <a href="delete_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
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