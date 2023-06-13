<?php include 'header.php' ?>

<div class="container" style="margin-top: 50px;">
    <h3 class="text-center mb-4 badge bg-dark w-25 p-3 fs-6 fw-bold">Tambah Masyarakat</h3><br>
    <?php
    if (isset($_GET['success'])) {
        // Notifikasi berhasil
        echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan.</div>';
    } elseif (isset($_GET['error'])) {
        // Notifikasi gagal
        echo '<div class="alert alert-danger" role="alert">Gagal menambahkan data.</div>';
    }
    ?>
    <form action="simpan_masyarakat.php" method="post">
        <table class="table table-borderd table-danger">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_masyarakat" placeholder="ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_masyarakat" placeholder="Nama Lengkap" class="form-control"></td>
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
                <td>Status</td>
                <td>
                    <select name="id_status" class="form-select">
                        <option value="">Pilih Status</option>
                        <?php
                        $sta = mysqli_query($connect, "SELECT * FROM status_masyarakat");
                        while ($stat = mysqli_fetch_array($sta)) {
                            echo "<option value='" . $stat['id_status'] . "'>" . $stat['jenis_status'] . "</option>";
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
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="index.php" class="btn btn-danger">Kembali</a>
                </td>
            </tr>
        </table>
    </form>

</div>

<?php include 'footer.php' ?>
