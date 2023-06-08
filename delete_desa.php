<?php
$id_desa = $_GET['id_desa'];
include ('koneksi.php');
$delete = mysqli_query($connect,"delete from desa where id_desa='$id_desa'");
if ($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:desa.php?status=".$status);
?>