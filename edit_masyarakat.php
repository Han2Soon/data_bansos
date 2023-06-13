<?php
include 'header.php';

$id_masyarakat = $_GET['id_masyarakat'];
$query = mysqli_query($connect, "SELECT * FROM masyarakat WHERE id_masyarakat='$id_masyarakat'");
$masyarakat = mysqli_fetch_array($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses update data masyarakat
    // ...
    // Jika berhasil
    $_SESSION['notification'] = array(
        'type' => 'success',
        'message' => 'Data masyarakat berhasil diupdate.'
    );
    // Jika gagal
    //$_SESSION['notification'] = array(
       //  'type' => 'danger',
       //  'message' => 'Gagal mengupdate data masyarakat.'
     //);

    header("Location: index.php?id_masyarakat=$id_masyarakat");
    exit();
}
?>

<div class="container mt-5" style="margin-top: 50px;">
    <?php if (isset($_SESSION['notification'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['notification']['type']; ?>" role="alert">
            <?php echo $_SESSION['notification']['message']; ?>
        </div>
        <?php unset($_SESSION['notification']); ?>
    <?php endif; ?>
    <h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Edit Data Masyarakat</h3><br>
    <form action="update_masyarakat.php" method="post">
        <table class="table table-borderd table-danger">
            <!-- ... Bagian form edit data masyarakat ... -->
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_masyarakat" value="<?php echo $masyarakat['id_masyarakat']?>" placeholder="ID" class="form-control"></td>
            </tr>    
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_masyarakat" value="<?php echo $masyarakat['nama_masyarakat']?>" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
            <td>Kecamatan</td>
                <td>
                    <select name="id_kecamatan" class="form-select" onchange="getDesa(this.value)">
                        <option value="">Pilih Kecamatan</option>
                        <?php
                        $kec = mysqli_query($connect, "SELECT * FROM kecamatan");
                        while ($keca = mysqli_fetch_array($kec)) {
                            echo "<option value='" . $keca['id_kecamatan'] . "'>" . $keca['nama_kecamatan'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status Masyarakat</td>
                <td>
                    <select name="id_status" class="form-select">
                        <?php
                        $sta = mysqli_query($connect, "SELECT * FROM status_masyarakat");
                        while ($stat = mysqli_fetch_array($sta)) {
                            $selected = ($stat['id_status'] == $masyarakat['id_status']) ? 'selected' : '';
                            echo "<option value='".$stat['id_status']."' ".$selected.">".$stat['jenis_status']."</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Desa</td>
                <td>
                    <select name="id_desa" id="id_desa" class="form-select">
                        <option value="">Pilih Desa</option>
                    </select>
                </td>
            </tr>
            <script>
                function getDesa(id_kecamatan) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("id_desa").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", "get_desa.php?id_kecamatan=" + id_kecamatan, true);
                    xhttp.send();
                }
            </script>
        </table> 
        <button type="submit" class="btn btn-success">Simpan Data</button>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </form>
</div>

<?php include 'footer.php'?>
