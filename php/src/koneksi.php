<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'toko';

$connect = new mysqli($server, $user, $password, $db);
if ($connect->connect_error) {
    die('Koneksi Database gagal :' . $connect->connect_error);
}
?>