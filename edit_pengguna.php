<?php include 'header.php';

$id = $_GET['id'];
$query = mysqli_query($connect,"select * from pengguna where id='$id'");
$pengguna = mysqli_fetch_array($query);
//print_r($pengguna);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses update data pengguna
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usernama = $_POST['usernama'];
    $password = $_POST['password'];

    // Lakukan update data di database
    $updateQuery = "UPDATE pengguna SET nama='$nama', usernama='$usernama', password='$password' WHERE id='$id'";
    $updateResult = mysqli_query($connect, $updateQuery);

    if ($updateResult) {
        // Update berhasil, tampilkan notifikasi
        $_SESSION['notification'] = array(
            'status' => 'alert-success',
            'message' => 'Data pengguna berhasil diupdate.'
        );
    } else {
        // Update gagal, tampilkan notifikasi
        $_SESSION['notification'] = array(
            'status' => 'alert-danger',
            'message' => 'Terjadi kesalahan saat mengupdate data pengguna.'
        );
    }

    // Redirect kembali ke halaman list_pengguna.php
    header('Location: list_pengguna.php');
    exit();
}

?>
<div class="container" style="margin-top: 50px;"></div>
<h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Edit Data Pengguna</h3><br>
<form action="edit_pengguna.php?id=<?php echo $id; ?>" method="post">
    <table class="table table-borderd table-danger">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $pengguna['id']?>" placeholder="id" class="form-control"></td>
        </tr>  
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $pengguna['nama']?>" placeholder="Nama Lengkap" class="form-control"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="usernama" value="<?php echo $pengguna['usernama']?>" placeholder="Username" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" value="<?php echo $pengguna['password']?>" placeholder="Password" class="form-control"></td>
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
<?php include 'footer.php'?>
