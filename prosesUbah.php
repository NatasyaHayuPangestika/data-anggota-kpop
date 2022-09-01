<?php

$id = $_GET['id_kpop'];
$nama = $_GET['nama_kpop'];
$jenisKelamin = $_GET['jk_kpop'];
$tanggalLahir = $_GET['dob_kpop'];
$asalgrup = $_GET['asalgrup_kpop'];


include_once('config/database.php');


$query ="update biodataanggota set nama_kpop='$nama', jk_kpop='$jenisKelamin', dob_kpop='$tanggalLahir',".
    "asalgrup_kpop='$asalgrup' where id_kpop='$id'";
$result = mysqli_query($db, $query);

header("location: index.php");
