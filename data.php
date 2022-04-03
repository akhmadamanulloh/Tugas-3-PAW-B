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
    <div class="jumbotron text-center">
        <h1>Data Mahasiswa</h1> 
        </div>
        <div class="container">
        <a href="form.php">Tambah Data </a>
        <table width="90%" border="1" cellspacing="1" class="table">
        <thead class="table table-dark table-striped">
            <tr>
                <td>ID MHS</td>
                <td>Nama Mahasiswa</td>
                <td>NIM Mahasiswa</td>
                <td>Alamat Mahasiswa</td>
                <td>Nomor HP</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_099";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_mhs'];?></td>
                    <td><?=$row['nama_mhs'];?></td>
                    <td><?=$row['nim_mhs'];?></td>
                    <td><?=$row['alamat_mhs'];?></td>
                    <td><?=$row['no_mhs'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_mhs']?>">Edit | <a href="delete.php?id=<?=$row['id_mhs']?>"> Delete</td>
                </tr>
                <?php }
                ?>
                </tbody>
        </table>
    </body>
</html>