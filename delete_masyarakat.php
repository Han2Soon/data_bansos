<?php
$id_masyarakat = $_GET['id_masyarakat'];
include ('koneksi.php');
$delete = mysqli_query($connect,"delete from masyarakat where id_masyarakat='$id_masyarakat'");
if ($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>