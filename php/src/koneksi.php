<?php

$host = 'db';
$user = 'MYSQL_USER';
$password = 'MYSQL_PASSWORD';
$db = 'toko';

$connect = new mysqli($server, $user, $password, $db);
if ($connect->connect_error) {
    die('Koneksi Database gagal :' . $connect->connect_error);
}
?>