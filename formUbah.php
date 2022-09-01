<?php

$id = 0;
if(isset($_GET['id'])){
    $id =$_GET['id'];
}else{
    header("location: index.php");
}


include_once('config/database.php');


$query = " select * from biodataanggota where id_kpop ='$id'";
$result = mysqli_query($db, $query);
$kpop = [];
while($kp = mysqli_fetch_array($result)) {
    $kpop = $kp;
}
if(count($kpop) ===0){
    header("location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Ubah Anggota Grup Kpop</title>
    </head>
    <body>
        <h1>Form Ubah Anggota Grup Kpop</h1>
        <form action="prosesUbah.php" method="get">
            <p>
                <input type ="text" readonly value ="<?= $kpop['id_kpop'] ?>" name="id_kpop" placeholder='Id Kpop' required/>
            </p>
            <p>
                <input type ="text" value ="<?= $kpop['nama_kpop'] ?>" name="nama_kpop" placeholder='Nama Kpop' required/>
            </p>
            <p>
                <select name = "jk_kpop">
                    <?php
                    $sL = $kpop['jk_kpop'] === 'L' ? 'selected' : '';
                    $sP = $kpop['jk_kpop'] === 'P' ? 'selected' : '';
                    ?>
                    <option <?= $sL ?> value="L">Laki-laki</option>
                    <option <?= $sP ?> value="P">Perempuan</option>
                </select>
            </p>
            <p>
                <input type ="date" value ="<?= $kpop['dob_kpop'] ?>" name="dob_kpop" placeholder='Tanggal lahir Kpop' required/>
            </p>
            <p>
            <input type ="text" name="asalgrup_kpop" placeholder="Asal Grup Kpop" required>
            </p>
            <p>
                <a href="index.php">Kembali</a>
                <button type ="submit">Simpan</button>
            </p>
            </form>
    </body>
</html>
