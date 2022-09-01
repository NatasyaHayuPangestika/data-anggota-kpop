<?php
//Inisialisasi config data
$databaseHost = 'localhost';
$databasePort = '3306';
$databaseUsername = 'root';
$databasePassword = '';

$databaseName = 'grupkpop';

$db = mysqli_connect($databaseHost,$databaseUsername, $databasePassword, $databaseName);