<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_099 WHERE id_mhs=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <div class="jumbotron text-center">
        <h1>Form edit data mahasiswa</h1>
        </div>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
        <table border="0" align="center" cellspacing="1" class="table">
        <tbody class="table table-dark table-striped">
        <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']?>">
        <tr><td>Nama Mhs: <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs']?>"></td></tr>
        <tr><td>Nim Mhs: <input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs']?>"></td></tr>
        <tr><td>Alamat Mhs: <input type="text" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>"></td></tr>
        <tr><td>Nomor HP Mhs: <input type="text" name="no_mhs" value="<?php echo $row['no_mhs']?>"></td></tr>
        <tr><td><button type="submit">Update</button> </td></tr>
        </tbody>  
            </table>
        </form>
        <?php } ?>
    </body>
</html>