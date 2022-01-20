<?php

include "../../koneksi.php";

    $admin = $_GET["admin"];
    $id = $_GET["id"];
    $paycode = $_GET["paycode"];

    $sql = "SELECT * FROM transaksi where id = $id";
    $data = mysqli_query($db1,$sql);
    foreach ($data as $db){
        $paycode = $db["paycode"];
        $email = $db["email"];
        $last_pay = $db["last_pay"];
        $total = $db["biaya"];
        $tgl = $db["tgl_pay"];
    }
    $pay = $total - $last_pay;

    $sql = "UPDATE transaksi SET status = 'pending', biaya = $pay  WHERE id = $id";
    if($pay == 0){
        $sql = "UPDATE transaksi SET status = 'success',biaya = $pay  WHERE id = $id";
    }
    mysqli_query($db1,$sql);

    $sql = "INSERT INTO history(paycode, jumlah_transfer, total, status, validated, tgl_pemb) values ('$paycode',$last_pay,$pay,'on progress', '$admin', '$tgl')";
    
    if($pay == 0){
        $sql = "INSERT INTO history(paycode, jumlah_transfer, total, status, validated, tgl_pemb) values ('$paycode',$last_pay,$pay,'success','$admin', '$tgl')";
        
    }else{
        echo "<a href='../../cetak_bill2.php?paycode=$paycode' ";
    }
    // }else{
    //     shell_exec("python send_email.py $email KTRIP");
    //     sleep(3);
    // }
    mysqli_query($db1,$sql);

    header("Location: validate_admin.php");

?>