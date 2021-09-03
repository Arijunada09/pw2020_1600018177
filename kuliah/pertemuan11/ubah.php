<?php
require 'functions.php';


// ambil id dari url

$id = $_GET['id'];


// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol tambha sudah di tekan
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "
       <script>
alert('data berhasil diubahkan ');
document.location.href='index.php';
       </script>
       ";
    } else {
        echo "
    <script>
alert('data gagal diubahkan ');
document.location.href='index.php';
    </script>
    ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah Data Mahasiswa</title>
</head>

<body>
    <h3>ubah Data Mahasiswa</h3>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus value="<?= $mahasiswa['nama']; ?>">
                </label>
            </li>
            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" value="<?= $mahasiswa['nrp']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="email" value="<?= $mahasiswa['email']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" value="<?= $mahasiswa['gambar']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>