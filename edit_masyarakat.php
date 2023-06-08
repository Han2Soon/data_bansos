<?php include 'header.php';

$id_masyarakat= $_GET['id_masyarakat'];
$query = mysqli_query($connect,"select * from masyarakat where id_masyarakat='$id_masyarakat'");
$masyarakat = mysqli_fetch_array($query);
//print_r($penggun)a;?>
<div class="container mt-5" style="margin-top: 50px;">

<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Edit Data Masyarakat</h3><br>
<form action="update_masyarakat.php" method="post">
        <table class="table table-borderd table-danger">
        <tr>
                <td>ID</td>
                <td><input type="text" name="id_masyarakat" value="<?php echo $masyarakat['id_masyarakat']?>" placeholder="id" class="form-control"></td>
            </tr>    
        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_masyarakat" value="<?php echo $masyarakat['nama_masyarakat']?>" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
            <td>Kecamatan</td>
            <td><select name="id_kecamatan" class="form-select">
                        <?php
                        $kec = mysqli_query($connect, "select * from kecamatan");
                        while ($keca = mysqli_fetch_array($kec)) {
                            echo "<option value='".$keca['id_kecamatan']."'";
                            echo $keca['id_kecamatan']==$masyarakat['id_kecamatan']?"selected":"";
                            echo ">".$keca['nama_kecamatan']."</option>";
                        }
                        ?>
                        </select></td>
                        </tr>
                        <tr>
            <td>Status Masyarakat</td>
            <td><select name="id_status" class="form-select">
                        <?php
                        $sta = mysqli_query($connect, "select * from status_masyarakat");
                        while ($stat = mysqli_fetch_array($sta)) {
                            echo "<option value='".$stat['id_status']."'";
                            echo $stat['id_status']==$masyarakat['id_status']?"selected":"";
                            echo ">".$stat['jenis_status']."</option>";
                        }
                        ?>
                        </select></td>
                        </tr>
          <tr>
            <tr>
            <td>Desa</td>
            <td><select name="id_desa" class="form-select">
                        <?php
                        $des = mysqli_query($connect, "select * from desa");
                        while ($desa = mysqli_fetch_array($des)) {
                            echo "<option value='".$desa['id_desa']."'";
                            echo $desa['id_desa']==$masyarakat['id_desa']?"selected":"";
                            echo ">".$desa['nama_desa']."</option>";
                        }
                        ?>
                        </select></td>
                    </tr>
    <td></td>
    <td>
      <button type="submit" class="btn btn-success">Simpan Data</button>
      <a href="index.php" class="btn btn-primary">Kembali</a>
      </a>
    </td>
  </tr>
        </table> 
        </from>
</div>
<?php include 'footer.php'?>


