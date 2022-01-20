<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'db_ktrip');

// Buat Koneksinya
$db1 = mysqli_connect(HOST, USER, PASS, DB1);
// if (!$db1) {
// die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>