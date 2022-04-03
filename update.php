<?php
include "koneksi.php";

$id = $_POST['id_mhs'];
$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];
$nomor = $_POST['no_mhs'];

$sql = "UPDATE tbl_099 set nama_mhs='$nama', nim_mhs='$nim', alamat_mhs='$alamat',no_mhs='$nomor' WHERE id_mhs=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi update data mahasiswa gagal";
}
else{
    echo "eksekusi update data mahsiswa berhasil <br>";
    echo "<a href = 'data.php'>Show Data </a>";
}

?> 