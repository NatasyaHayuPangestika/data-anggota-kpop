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
if(count($kpop) == 0){
    header("location: index.php");
}


?>

<h1>Anda yakin ingin hapus?</h1>
<form action="prosesHapus.php" method = 'post'>
<table border = '1'>
<tr>
    <td>Id </td>
    <td><?= $kpop['id_kpop'] ?></td>
</tr>
<tr>
    <td>Nama Anggota</td>
    <td><?= $kpop['nama_kpop'] ?></td>
</tr>
<tr>
    <td>Asal Grup</td>
    <td><?=$kpop['asalgrup_kpop'] ?></td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td><?=$kpop['dob_kpop'] ?></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td><?= $kpop['jk_kpop'] ?></td>
</tr>
</table>
<input type="Hidden" name = "id" value ="<?=$kpop['id_kpop'] ?>">
<a href="index.php">Kembali</a>
<input type="submit" value ="Hapus"/>


</form>