<?php

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw_1600018177");
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // jika hanya memanggil satu data
    if (mysqli_num_rows($result) === 1) {

        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
