<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "ukk07";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi){
     echo "koneksi Gagal";
}
