<?php include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses tambah data pengguna
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usernama = $_POST['usernama'];
    $password = $_POST['password'];

    // Lakukan pengecekan apakah ID pengguna sudah ada atau belum
    $checkQuery = "SELECT COUNT(*) as total FROM pengguna WHERE id='$id'";
    $checkResult = mysqli_query($connect, $checkQuery);
    $checkData = mysqli_fetch_assoc($checkResult);

    if ($checkData['total'] > 0) {
        // ID pengguna sudah ada, tampilkan notifikasi
        $_SESSION['notification'] = array(
            'status' => 'alert-danger',
            'message' => 'ID pengguna sudah terdaftar.'
        );
    } else {
        // ID pengguna belum ada, tambahkan pengguna baru
        $insertQuery = "INSERT INTO pengguna (id, nama, usernama, password) VALUES ('$id', '$nama', '$usernama', '$password')";
        $insertResult = mysqli_query($connect, $insertQuery);

        if ($insertResult) {
            // Penambahan pengguna berhasil, tampilkan notifikasi
            $_SESSION['notification'] = array(
                'status' => 'alert-success',
                'message' => 'Data pengguna berhasil ditambahkan.'
            );
        } else {
            // Penambahan pengguna gagal, tampilkan notifikasi
            $_SESSION['notification'] = array(
                'status' => 'alert-danger',
                'message' => 'Terjadi kesalahan saat menambahkan data pengguna.'
            );
        }
    }

    // Redirect kembali ke halaman list_pengguna.php
    header('Location: list_pengguna.php');
    exit();
}

?>
<div class="container" style="margin-top: 50px;"></div>
<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Tambah Pengguna</h3><br>
<form action="tambah_pengguna.php" method="post">
    <table class="table table-borderd table-danger">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" placeholder="ID" class="form-control"></td>
        </tr>  
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="usernama" placeholder="Username" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" placeholder="Password" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="list_pengguna.php" class="btn btn-danger">Kembali</a>
            </td>
        </tr>
    </table>
</form>

<script>
    // Menghilangkan notifikasi setelah 3 detik
    setTimeout(function() {
        var notification = document.querySelector('.alert-dismissible');
        if (notification) {
            notification.remove();
        }
    }, 3000);
</script>

<?php include 'footer.php'?>
