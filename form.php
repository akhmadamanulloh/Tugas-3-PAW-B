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
        <h1>Form tambah data mahasiswa</h1>
        </div>
        <div class="container">
        <form method="post" action="action.php">
        <table border="0" align="center" cellspacing="1" class="table">
        <tbody class="table table-dark table-striped">
            <tr>
            <td>Nama Mhs: <input type="text" name="nama_mhs"></td></tr>
            <td>Nim Mhs: <input type="text" name="nim_mhs"></td></tr>
            <td>Alamat Mhs: <input type="text" name="alamat_mhs"></td></tr>
            <td>Nomor HP Mhs: <input type="text" name="no_mhs"></td></tr>
            <td><button type="submit">Kirim</button></td>
            </tr>
            </tbody>  
            </table>
        </form>
    </body>
</html>