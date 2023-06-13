<?php
$id_desa        = $_POST['id_desa'];
$nama_desa      = $_POST['nama_desa'];
 

include ('koneksi.php');
$query = "INSERT INTO desa(id_desa, nama_desa)
VALUES('$id_desa', '$nama_desa')";
$insert = mysqli_query($connect,$query);

if ($insert){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:tambah_desa.php?status=".$status);   
?>