<?php

$id = 0;
if(isset($_POST['id'])){
    $id =$_POST['id'];
}else{
    header("location: index.php");
}

include_once('config/database.php');


$query = "delete from biodataanggota where id_kpop='$id'";
$result = mysqli_query($db, $query);

header("location: index.php");