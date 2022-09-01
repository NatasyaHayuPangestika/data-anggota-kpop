<?php

$id = $_GET['id_kpop'];
$nama = $_GET['nama_kpop'];
$jenisKelamin = $_GET['jk_kpop'];
$tanggalLahir = $_GET['dob_kpop'];
$asalgrup = $_GET['asalgrup_kpop'];


include_once('config/database.php');


$query ="insert into biodataanggota values ('$id', '$nama', '$jenisKelamin', '$tanggalLahir', '$asalgrup')";
$result = mysqli_query($db, $query);

header("location: index.php");
