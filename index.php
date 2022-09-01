<?php

include_once('config/database.php');

$result = mysqli_query($db, 'select * from biodataanggota');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>List Data Anggota Grup Kpop</title>
</head>
<body>
    <h1>List Anggota Grup Kpop <?= date ('j F Y') ?></h1>
    <a href="formTambah.php">Tambah Anggota Grup Kpop<br></a>
    <table border='1'>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Asal Grup</th>
        <th>Action</th>
    </tr>
    <?php
    while($kpop = mysqli_fetch_array($result)){
        $tanggalLahir = date('Y, j F', strtotime($kpop['dob_kpop']));
    ?>
        <tr>
            <td><?= $kpop['id_kpop'] ?></td>
            <td><?= $kpop['nama_kpop'] ?></td>
            <td><?= $kpop['jk_kpop'] === 'L' ?'Laki-Laki' : 'Perempuan'?></td>
            <td><?= $tanggalLahir ?></td>
            <td><?= $kpop['asalgrup_kpop'] ?></td>
            <td><a href="formUbah.php?id=<?= $kpop['id_kpop'] ?>">Edit</a> | 
            <a href="konfirmasiHapus.php?id=<?= $kpop['id_kpop'] ?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
                
            </body>
        </html>