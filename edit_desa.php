<?php include 'header.php';

$id_desa= $_GET['id_desa'];
$query = mysqli_query($connect,"select * from desa where id_desa='$id_desa'");
$desa = mysqli_fetch_array($query);
//print_r($penggun)a;?>
<div class="container" style="margin-top: 50px; ">

<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Edit Data Desa</h3><br>
<form action="update_desa.php" method="post">
<table class="table table-borderd table-danger">    
        <tr>
                <td>ID Desa</td>
                <td><input type="text" name="id_desa"value="<?php echo $desa['id_desa']?>" placeholder="ID" class="form-control"></td>
            </tr>
         
        <tr>
                <td>Nama Desa</td>
                <td><input type="text" name="nama_desa" value="<?php echo $desa['nama_desa']?>" placeholder="Nama desa" class="form-control"></td>
            </tr>
            </table> 
<div>
    <td>
      <button type="submit" class="btn btn-success">Simpan Data</button>
      <a href="desa.php" class="btn btn-primary">Kembali</a>
      </a>
    </td>
  </tr>

        </from>
</div>
<?php include 'footer.php'?>