<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "amanulloh";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi) {
    echo "koneksi gagal";
}

?>