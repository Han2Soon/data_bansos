<?php
$id_kecamatan        = $_POST['id_kecamatan'];
$nama_kecamatan      = $_POST['nama_kecamatan'];
 

include ('koneksi.php');
$query = "INSERT INTO kecamatan(id_kecamatan, nama_kecamatan)
VALUES('$id_kecamatan', '$nama_kecamatan')";
$insert = mysqli_query($connect,$query);

if ($insert){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:tambah_kecamatan.php?status=".$status);   
?>
