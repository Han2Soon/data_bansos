<?php
$id_desa  = $_POST['id_desa'];
$nama_desa = $_POST['nama_desa'];

include ('koneksi.php');
$query = "UPDATE desa SET nama_desa='$nama_desa' WHERE id_desa='$id_desa'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:edit_desa.php?status=".$status."&id_desa=".$id_desa);
?>