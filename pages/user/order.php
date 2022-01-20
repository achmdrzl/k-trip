<?php
    ob_start();
    $paycode = $_REQUEST["paycode"];
    $code = $_GET["paycode"];
    include "booking.php";
    $sql = "SELECT * FROM passenger WHERE paycode = $paycode";
    $data = mysqli_query($db1,$sql);
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('Y-m-d');
    foreach ($data as $db){
        $total = $db["biaya"];
    }
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];
    $negara = $_POST["negara"];
    $prov = $_POST["provinsi"];
    $kota = $_POST["kota"];
    $kodepos = $_POST["kodepos"];
    $khusus = $_POST["add"];
    $metode = $_POST["method"];

    $sql = "INSERT INTO transaksi(nama, email, nohp, alamat, kota, provinsi, negara, kodepos, kebutuhan_khusus, biaya, total_pemb, paycode, status, tgl_pay, metode_pemb) 
    VALUES ('$nama','$email','$nohp','$alamat', '$kota', '$prov', '$negara', '$kodepos', '$khusus', '$total', '$total', '$code', 'waiting', '$tgl', '$metode')";
    
    mysqli_query($db1,$sql);
    header("Location: booking_success.php?paycode=".urlencode($paycode));
?>