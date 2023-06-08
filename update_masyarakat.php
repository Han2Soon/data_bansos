<?php
$id_masyarakat  = $_POST['id_masyarakat'];
$nama_masyarakat = $_POST['nama_masyarakat'];
$id_kecamatan = $_POST['id_kecamatan'];
$id_status = $_POST['id_status'];
$id_desa = $_POST['id_desa'];

include ('koneksi.php');
$query = "UPDATE masyarakat SET id_masyarakat='$id_masyarakat', nama_masyarakat='$nama_masyarakat', id_kecamatan='$id_kecamatan', id_status='$id_status', id_desa='$id_desa' WHERE id_masyarakat='$id_masyarakat'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>