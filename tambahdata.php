<?php
require 'function.php';

if (isset($_POST['submit'])) {
    if (tambahdata($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'datapemain.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'datapemain.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
     <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <h1>Tambah Data Pemain</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required/><br>

        <label for="nomor_punggung">Nomor Punggung : </label>
        <input type="text" name="nomor_punggung" id="nomor_punggung" required /><br>

        <label for="posisi">Posisi : </label>
        <input type="text" name="posisi" id="posisi" required/><br>

        <label for="foto">Foto : </label>
        <input type="file" name="foto" id="foto" accept="image/*" required/><br>

        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>