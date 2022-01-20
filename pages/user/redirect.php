<?php 
	ob_start();
	// include "package.php";
	include "../../koneksi.php";
	$jml_dewasa = $_POST["quantity_parent"];
	$jml_anak = $_POST["quantity_child"];
	$jml_bayi = $_POST["quantity_infant"];
	$code = strval(rand(1000,10000));
	
	$id = $_GET["id"];
	$sql = "SELECT * FROM assets WHERE id = $id";
	$data = mysqli_query($db1, $sql);
	foreach ($data as $db){
		$price = $db["price"];
	}

	$paycode = "KTRIP".$code;
	$pay_parent = ($jml_dewasa * $price);
	$pay_child = ($jml_anak * $price);
	$pay_infant = ($jml_bayi * 0);
	$total = ($jml_dewasa * $price) + ($jml_anak * $price) + ($jml_bayi * 0);
	$sql = "INSERT into passenger (paycode, parent, child, infant, p_parent, p_child, p_infant ,price, id_paket) 
			values ('$paycode', $jml_dewasa, $jml_anak, $jml_bayi, $pay_parent, $pay_child, $pay_infant, $total, $id)";

	mysqli_query($db1, $sql);
	header("Location: booking.php?paycode=".urlencode($paycode));
	// header("Location: booking.php?id=$id&paycode=$paycode");
	// header("Location: booking.php?$url");


// 	echo var_dump($id);
// 	echo var_dump($price);
 ?>
