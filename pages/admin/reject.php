<?php 
    include '../../koneksi.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM transaksi where id = $id";
    $data = mysqli_query($db1,$sql);
    foreach ($data as $db){
        $paycode = $db["paycode"];
        $last_pay = $db["last_pay"];
        $total = $db["biaya"];
    }
    $sql = "INSERT INTO history(paycode,jumlah_transfer,total,status,validated) values ('$paycode', $last_pay, $total, 'rejected',$admin)";
    mysqli_query($db1, $sql);

    $sql = "UPDATE transaksi SET status = 'pending' WHERE id = $id";
    mysqli_query($db1, $sql);



    
    header("Location: validate_admin.php");

?>