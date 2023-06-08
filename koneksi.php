<?php
$username   =   "root";
$passDB     =   "";
$host       =   "localhost";
$database   =   "data_bansos";

$connect = mysqli_connect($host, $username, $passDB, $database);
if (!$connect){
    echo "error connecting to database" .$database;
}
?>