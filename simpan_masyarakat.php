<?php include 'header.php'?>

<?php
$id_masyarakat = $_POST['id_masyarakat'];
$nama_masyarakat = $_POST['nama_masyarakat'];
$id_kecamatan = $_POST['id_kecamatan'];
$id_status = $_POST['id_status'];
$id_desa = $_POST['id_desa'];

include('koneksi.php');
$query = "INSERT INTO masyarakat(id_masyarakat, nama_masyarakat, id_kecamatan, id_status, id_desa) 
VALUES('$id_masyarakat','$nama_masyarakat','$id_kecamatan','$id_status','$id_desa')";
$insert = mysqli_query($connect, $query);

if ($insert) {
    $status = "success";
    $message = "Data masyarakat berhasil ditambahkan.";
} else {
    $status = "error";
    $message = "Terjadi kesalahan saat menambahkan data masyarakat.";
}

$_SESSION['notification'] = array(
    'status' => $status,
    'message' => $message
);

header("location:index.php?success=" . ($status == "success" ? "1" : "0"));
?>

<?php include 'footer.php' ?>
