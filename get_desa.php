<?php
$username   =   "root";
$passDB     =   "";
$host       =   "localhost";
$database   =   "data_bansos";

$connect = mysqli_connect($host, $username, $passDB, $database);
if (!$connect){
    echo "error connecting to database" .$database;
}

// Mengambil data desa berdasarkan id_kecamatan yang dikirim melalui parameter GET
$id_kecamatan = $_GET['id_kecamatan'];

// Query untuk mengambil data desa
$query = "SELECT * FROM desa WHERE id_kecamatan = '$id_kecamatan'";
$result = mysqli_query($connect, $query);

// Membuat options untuk combobox desa
$options = "<option value=''>Pilih Desa</option>";
while ($row = mysqli_fetch_array($result)) {
    $options .= "<option value='" . $row['id_desa'] . "'>" . $row['nama_desa'] . "</option>";
}

// Mengirimkan response options ke JavaScript
echo $options;
?>
