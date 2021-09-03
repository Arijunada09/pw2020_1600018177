<?php
require 'functions.php';

// ambil id url

$id = $_GET['id'];

// query mahasiswa bedasarkan id

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>

<body>
    <h3>detail mahasiswa</h3>

    <ul>
        <li><img src="img/<?= $mahasiswa['gambar']; ?>" width="100px"></li>
        <li><?= $mahasiswa['nrp']; ?></li>
        <li><?= $mahasiswa['nama']; ?></li>
        <li><?= $mahasiswa['email']; ?></li>
        <li><?= $mahasiswa['jurusan']; ?></li>
        <li>
            <a href="">ubah</a> | <a href="">hapus</a>
        </li>
        <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>