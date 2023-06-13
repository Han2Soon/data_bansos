<?php
$usernameTxt = $_POST['usernama'];
$passwordTxt = $_POST['password'];

include 'koneksi.php';

$pengguna = mysqli_query($connect, "SELECT * FROM pengguna WHERE usernama='$usernameTxt' AND password='$passwordTxt'");

$check = mysqli_num_rows($pengguna);

if ($check > 0) {
    session_start();
    $penggunaRow = mysqli_fetch_array($pengguna);
    $_SESSION['usernama'] = $penggunaRow['usernama'];
    $_SESSION['nama'] = $penggunaRow['nama'];
    $nama = $penggunaRow['nama'];
    echo "<script>
    alert('Selamat Datang $nama');
    window.location.href = 'index.php';
</script>";
} else {
    echo "<script>
    alert('Login gagal. Silakan cek kembali username dan password Anda.');
    window.location.href = 'login.php';
</script>";
}
?>