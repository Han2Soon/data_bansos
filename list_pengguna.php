<?php include 'header.php'?> 

      <div class="container" style="margin-top: 50px;">
      <h1 class="text-center mb-4 btn btn-danger w-25 p-3 fs-5 fw-bold" style=" margin-left:500px; ">Data Pengguna</h1><br>
        <a href="tambah_pengguna.php" class="btn btn-info"><i class="bi bi-person-plus-fill"></i>Tambah Data</a>
        <hr>
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
            $nomor=1;
            $pengguna = mysqli_query($connect, "select * from pengguna") ;
            while($row=mysqli_fetch_array($pengguna)){
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['usernama']?></td>
                <td><?php echo $row['password']?></td>
                <td>
                <a href="edit_pengguna.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>
                <a href="delete_pengguna.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
                </td>
            </tr>
            <?php 
          $nomor++;
          }
        ?> 
            
            </tbody>
        </table>
    </div>
    <?php include 'footer.php' ?>
  </body>
</html>