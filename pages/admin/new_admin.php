<?php 
include "../../koneksi.php";

$username = $_POST["username"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO user (username, nama_lengkap, email, password, status) VALUES ('$username', '$nama', '$email', '$password', 'admin')";
mysqli_query($db1, $sql);

header("Location: validate_admin.php");
?>