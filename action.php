<?php
include "koneksi.php";

$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];
$nomor = $_POST['no_mhs'];

$sql = "INSERT INTO tbl_099 VALUES(null, '$nama','$nim', '$alamat','$nomor')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data mahasiswa gagal";
}
else{
    echo "eksekusi tambah data mahsiswa berhasil <br>";
    echo "<a href = 'data.php'>Show Data </a>";
}

?>