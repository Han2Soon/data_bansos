<?php
$id_kecamatan  = $_POST['id_kecamatan'];
$nama_kecamatan = $_POST['nama_kecamatan'];

include ('koneksi.php');
$query = "UPDATE kecamatan SET nama_kecamatan='$nama_kecamatan' WHERE id_kecamatan='$id_kecamatan'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:edit_kecamatan.php?status=".$status."&id_kecamatan=".$id_kecamatan);
?>