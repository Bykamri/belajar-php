<?php
$_SERVER = "localhost";
$user = "root";
$password = "";
$nama_database = "user_management";

$db = mysqli_connect($_SERVER, $user, $password, $nama_database);

if (!$db) {
    die("Connection is failed : " . mysqli_connect_error());
}
