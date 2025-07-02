<?php
require 'function.php';

$id = $_GET["id"];

$pmn = query("SELECT * FROM pemain WHERE id = $id")[0];


if (isset($_POST['submit'])) {
    if (ubahdata($_POST, $id) > 0) {
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
    <title>Ubah Data</title>
     <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <h1>Ubah Data Pemain</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required
        placeholder="Nama Lengkap" required value="<?= $pmn ["nama"]?>"/><br>

        <label for="nomor_punggung">Nomor Punggung : </label>
        <input type="text" name="nomor_punggung" id="nomor_punggung" required value="<?= $pmn ["nomor_punggung"]?>"/><br>

        <label for="posisi">Posisi : </label>
        <input type="text" name="posisi" id="posisi" required value="<?= $pmn ["posisi"]?>"/><br>

        <label for="foto">Foto : </label>
        <input type="file" name="foto" id="foto" accept="image/*" required/><br>

        <button type="submit" name="submit">Ubah Data</button>
    </form>
</body>
</html>