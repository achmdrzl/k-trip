<?php
    include "../../koneksi.php";
    $id_prov = $_POST["provinsi"];
    $sql = "SELECT * FROM cities where prov_id = $id_prov ORDER BY city_name ASC";
    $data = mysqli_query($db1,$sql);
    foreach ($data as $db){
        $kota = $db["city_name"];
        $id_kota = $db["city_id"];
        echo "<option value='$kota'>$kota</option>";
    }
?>