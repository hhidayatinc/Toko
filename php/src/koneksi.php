<?php

$host = 'db';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$mydatabase = 'toko';

$connect = new mysqli($HOST, $user, $pass, $mydatabase);
if ($connect->connect_error) {
    die('Koneksi Database gagal :' . $connect->connect_error);
}
?>