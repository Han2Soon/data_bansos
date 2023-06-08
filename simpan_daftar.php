<?php
$nama=$_POST['nama'];
$usernama=$_POST['usernama'];
$password=$_POST['password'];

include 'koneksi.php';
$pengguna=mysqli_query($connect, "INSERT INTO pengguna (nama, usernama, password) VALUES ('$nama','$usernama','$password')");

echo "<script>
alert ('User Berhasil Ditambahkan');
document.location.href='login.php';
</script>";
?>