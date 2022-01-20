<?php 
	include "../../koneksi.php";
	$id = $_GET["id"];
	// echo $id;
	$verif = false;
	// $id = 1;
	$sql = "SELECT * FROM assets WHERE id = $id";
	$data = mysqli_query($db1, $sql);
	foreach ($data as $db){
		$nama_trip = $db["paket"];
		$price = $db["price"];
		$tgl = $db["tgl"];
		$bg = $db["gbr"];
		$durasi = $db["durasi"];
		$lokasi = "../../img/package/".$bg;
		$p1 = $db["p1"]; $h1 = $db["h1"];
		$p2 = $db["p2"]; $h2 = $db["h2"];
		$p3 = $db["p3"]; $h3 = $db["h3"];
		$h4 = $db["h4"];
		$n = 3;
		$m = 3;
		if($db["h4"] != null){
			$h4 = $db["h4"];
			$m = 4;
		}
		if($db["h5"] != null){
			$h5 = $db["h5"];
			$m = 5;
		}
		if($db["h6"] != null){
			$h6 = $db["h6"];
			$m = 6;
		}
		if($db["p4"] != null){
			$p4 = $db["p4"];
			$n = 4;
		}
	}
	$sql = "SELECT * FROM inc WHERE id = $id";
	$data = mysqli_query($db1, $sql);
	foreach($data as $db){
		$include1 = $db["include1"];
		$include2 = $db["include2"];
		$include3 = $db["include3"];
		$include4 = $db["include4"];
		$include5 = $db["include5"];
		$include6 = $db["include6"];
		$include7 = $db["include7"];
		$include8 = $db["include8"];
		$include9 = $db["include9"];
		$o = 9;
		if($db["include10"] != null){
			$include10 = $db["include10"];
			$o = 10;
		}
	}
	$sql = "SELECT * FROM exc WHERE id = $id";
	$data = mysqli_query($db1, $sql);
	foreach($data as $db){
		$exclude1 = $db["exclude1"];
		$exclude2 = $db["exclude2"];
		$exclude3 = $db["exclude3"];
		$exclude4 = $db["exclude4"];
		$exclude5 = $db["exclude5"];
		$p = 5;
		if($db["exclude6"] != null){
			$exclude6 = $db["exclude6"];
			$p = 6;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Package</title>
	<link rel="stylesheet" href="stylepackage.css">
	<script src="javascript.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        .hero{
            width: 1280px;
            height: 600px;
            margin: auto;
            background-image: url(<?php echo $lokasi ?>);
            position: relative;
        }
		.label-container{
                z-index: 999;
                position:fixed;
                bottom:50px;
                left:135px;
                display:table;
                visibility: hidden;
            }

            .label-text{
                color:#FFF;
                background:rgba(51,51,51,0.5);
                display:table-cell;
                vertical-align:middle;
                padding:10px;
                border-radius:3px;
            }

            .label-arrow{
                display:table-cell;
                vertical-align:middle;
                color:#333;
                opacity:0.5;
            }

            .float{
                z-index: 9999;
                position:fixed;
                bottom:10px;
                left:40px;
            }
            .my-float{
                font-size:24px;
                margin-top:18px;
            }

            a.float + div.label-container {
            visibility: hidden;
            opacity: 0.9;
            transition: 0.01s;
            transition: visibility 0s, opacity 0.5s ease;
            }

            a.float:hover + div.label-container{
            visibility: visible;
            opacity: 1;
            }
            .kotakk img{
                -webkit-transition: 0.4s ease;
                transition: 0.4s;
                width: 100%;
            }
            .zoomm:hover .kotakk img{
                -webkit-transform:  scale(1.08);
                transform: scale(1.02);
            }
    </style>
</head>
<body>
	<!-- navbar 1 -->
	<div class="nav cf">
		<div class="nav1">
			<div class="bar">
				<a href=""><img src="../../img/homepage/fb.svg" alt=""></a>
				<!-- <img src="img/fb.png" alt="Facebook"> -->
				<a href="https://www.instagram.com/kasuami.team/" target="_blank"><img src="../../img/homepage/ig.svg" alt=""></a>
				<a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank"><img src="../../img/homepage/g+.svg" alt=""></a>
<!-- 				<img src="img/g+.png" alt="Google+">
				<img src="img/ig.png" alt="Instagram">  -->
				    <div class="line">
					   <img src="../../img/homepage/line.png" alt="">
				    </div>
				<p><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank">kasuamiteam@gmail.com</a></p>
				    <div class="line2">
					   <img src="../../img/homepage/line.png" alt="">
				    </div>
			</div>
		</div>
		<div class="nav2">
			<div class="bar2">
					<div class="line5">
					   <img src="../../img/homepage/line.png" alt="">
				    </div>
				<p><select name="" id="">
				    <option value="">ID</option>
				    <option value="">ENG</option>
				   	</select>
				</p>
				<div class="line4">
					   <img src="../../img/homepage/line.png" alt="">
				    </div>
				<p><a href="#">Login</a></p>
				<div class="line3">
					   <img src="../../img/homepage/line.png" alt="">
				    </div>
				<p>+62 81242067383</p>
			</div>	
		</div>
	</div>

	<!-- navbar 2 -->
    <div class="navbar">
        <div class="app">
            <h3>K-Trip</h3>
        </div>
        <div class="bar3">
            <ul class="menu">
                <li class="menu_item"><a href="../../index.php">BERANDA</a></li>
                <li class="menu_item"><a href="destinasi.php">DESTINASI</a></li>
                <li class="menu_item"><a href="kebudayaan.php">KEBUDAYAAN</a></li>
                <li class="menu_item"><a href="blog.php">BLOGS</a></li>
                <li class="menu_item"><a href="#">INFORMASI</a>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="about_us.php">TENTANG KAMI</a></li>
                        <br>
                        <li class="submenu-item"><a href="faq.php">PERTANYAAN</a></li>
                        <br>
                        <li class="submenu-item"><a href="contact.php">KONTAK</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="galery.php">GALERI</a></li>
            </ul>
        </div>

		<div class="bar4 cf">
			<a href="#"><img src="../../img/homepage/basket.svg" alt=""></a>
			<div class="signup">
				<a href=""><p>Sign Up</p></a>
			</div>
			<!-- <a href="#"><img src="img/signup.svg" alt=""></a> -->
		</div>
	</div>


	<!-- <hr width="1440px" color="#E1E1E1"> -->

	<!-- navigation list -->
	<nav class="list cf">
		<div class="beranda">
			<h1>BERANDA</h1>
			<hr width="10px" color="#C5C5C5">
		</div>
		<div class="desa">
			<h1>DESA WAHA</h1>
			<hr width="10px" color="#C5C5C5">	
		</div>
		<p><?php echo $nama_trip ?></p>
	</nav>

	<!-- hero img -->
	<div class="hero">
		<div class="fav">
			<div class="fav2">
				<img src="../../img/package/fav.svg" alt="">
			</div>
			<div class="share">
				<img src="../../img/package/share.svg" alt="">
			</div>
		</div>
		<div class="dok">
			<a href="#">
				<div class="photo">
					<img src="../../img/package/photo.svg" alt="">
					<p><a href="#">Tour Photo</a></p>
				</div>
			</a>
			<a href="#">
				<div class="vid">
					<img src="../../img/package/vid.svg" alt="">
					<p><a href="#">Tour Video</a></p>
				</div>
			</a>
		</div>
	</div>

	<!-- main section 1 -->
	<div class="cont cf">
	<!-- floating -->
	<a href="validate.php" class="float">
        <!-- <i class="fa fa-envelope my-float"></i> -->
            <div class="zoomm">
                    <div class="kotakk">
                        <img src="../../img/floating/float.svg" alt="">
                    </div>
            </div>
    </a>
    <div class="label-container">
        <div class="label-text">Validasi Pembayaran</div>
        <i class="fa fa-play label-arrow"></i>
    </div>
		<div class="sec1">
			<div class="jud">
				<h1><?php echo $nama_trip ?></h1>
				<div class="loc">
					<img src="../../img/package/loc.svg" alt="">
					<p>Desa Waha, Kabupaten Wakatobi Kota Kendari, Sulawesi Tenggara</p>
				</div>
			</div>
			<div class="rate">
				<h1>Sangat Bagus</h1>
				<div class="star">
					<img src="../../img/package/star.svg" alt="">
					<img src="../../img/package/star.svg" alt="">
					<img src="../../img/package/star.svg" alt="">
					<img src="../../img/package/star.svg" alt="">
					<img src="../../img/package/star2.svg" alt="">
					<a href="#"><p>1 Ulasan</p></a>
				</div>
			</div>
			<!-- <hr width="815px" color="#E1E1E1" height="0.5px"> -->
			<!-- icon -->
			<div class="icon">
				<div class="a">
					<img src="../../img/package/time.svg" alt="">
					<p><?php echo $durasi ?></p>
				</div>
				<div class="b">
					<img src="../../img/package/tipe.svg" alt="">
					<p>Gruop Tour</p>
				</div>
				<div class="c">
					<img src="../../img/package/group.svg" alt="">
					<p>Group Size</p>
					<br>
					<h1>15 Orang</h1>
				</div>
				<div class="d">
					<img src="../../img/package/lang.svg" alt="">
					<p>Bahasa</p>
					<br>
					<h1>English, Indonesia</h1>
				</div>
			</div>
			<div class="overview">
				<div class="head">
					<h1>Gambaran Trip</h1>
					<?php
						for ($i = 1; $i<=$n; $i++){
							if($i == 1) $text = $p1;
							elseif ($i == 2) $text = $p2;
							elseif ($i == 3) $text = $p3;
							elseif ($i == 4) $text = $p4;
							echo "<p>$text</p>";
							echo "<br>";
						}
                    ?>
					<!-- <p> Pada hari pertama para wisatawan akan diajak keliling cagar budaya yang ada di wakatobi guna memperkenalkan warisan sejarah yang ada disana dan juga memberikan knowlegde khususnya bagi para pecinta sejarah. Mulai dari Mercusuar tertua diwakatobi dilanjutkan Benteng keraton yang ada di Desa Liya lalu yang terakhir akan diajak mengunjungi Goa Kontamale.</p>
					<br>
					<p> Di hari kedua para wisatawan akan di ajak berkeliling kawasan wisata yang disebut 1000 mata air oleh warga sekitar, kemudian dilanjutkan ke Pantai cemara dan sebagai penutup hari akan diajak untuk diving di lokasi yang disebut Sombu Dive.</p>
					<br>
					<p>Di hari terakhir sebagai pembuka hari para wisatawan akan diajak untuk Snorkeling di area waha yang indah akan terumbu karangnya, kemudian dilanjutkan mengunjungi kawasan yang penuh akan nilai sejarah yaitu Makam La Ode Tindoi serta sebagai penutup hari akan diajak ke Pantai Marina.</p> -->
				</div>
			</div>
			<div class="highlight">
				<div class="high">
					<h1>HIGHLIGHT</h1>
					<ul>
					<?php
						for($i=1; $i<=$m; $i++){
							if($i == 1) $text = $h1;
							elseif ($i == 2) $text = $h2;
							elseif ($i == 3) $text = $h3;
							elseif ($i == 4) $text = $h4;
							elseif ($i == 5) $text = $h5;
							elseif ($i == 6) $text = $h6;
							echo "<li> $text </li>";
						}
                    ?>
						<!-- <li>Mengunjungi Mercusuar, Benteng Keraton Liya serta Goa Kontamale</li>
						<li>Mengunjungi Area 1000 Mata air dan Pantai Cemara serta Marina</li>
						<li>Diving melihat terumbu karang di Sombu Dive dan juga Snorkeling di Area Waha</li>
						<li>Mengunjungi kawasan Makam La Ode Tindoi</li> -->
					</ul>
				</div>
			</div>
			<!-- <hr width="815px" color="#E1E1E1" height="0.5px"> -->
			<?php 
				$d1 = 0;
				$d2 = 0;
				$d3 = 0;
				if($d1 == 0 ){
					$d1 += 1;
				}else{
					$d1 = 0;
				}
			?>
			<div class="renc cf">
				<h1>Rencana Perjalanan</h1>
				<div class="border">
					<div class="day1">
						<details class="renc2">
						<?php 
							if($d1 == 0 ){
								$d1 += 1;
							}else{
								$d1 = 0;
							}
						?>
						<summary>Day 1</summary>

							<div class="sum-cont">
							<?php
                                    $sql = "SELECT * FROM day1 WHERE id = $id";
                                    $data = mysqli_query($db1,$sql);
                                    foreach ($data as $db){
                                        $p1 = $db["p1"];$lokasi1 = "../../img/package/".$db["gbr1"];
                                        $p2 = $db["p2"];$lokasi2 = "../../img/package/".$db["gbr2"];
                                        $p3 = $db["p3"];$lokasi3 = "../../img/package/".$db["gbr3"];
                                    }
                                ?>
								<div class="a">
									<?php
									    echo "<img src='$lokasi1'>";
									    echo "<p> $p1 </p>"
									?>
									<!-- <img src="../../img/package/menara_suar.png" alt="">
									<p>Mengunjungi Mercusuar</p> -->
								</div>
								<div class="b">
									<?php
									    echo "<img src='$lokasi2'>";
									    echo "<p> $p2 </p>"
									?>
									<!-- <img src="../../img/package/a2.png" alt="">
									<p>Mengunjungi Benteng Keraton Lia</p> -->
								</div>
								<div class="c">
									<?php
									    echo "<img src='$lokasi3'>";
									    echo "<p> $p3 </p>"
									?>
									<!-- <img src="../../img/package/a3.png" alt="">
									<p>Mengunjungi Goa Kontamale</p> -->
								</div>
							</div>
						</details>
					</div>
				</div>
				<!-- <hr width="815px" color="white"> -->
				<!-- <hr width="815px" color="white"> -->
				<div class="border">
					<div class="day2">
						<details class="renc2">
						<?php 
							if($d2 == 0 ){
								$d2 += 1;
							}else{
								$d2 = 0;
							}
						?>
						<summary>Day 2</summary>
							<div class="sum-cont">
							<?php
                                    $sql = "SELECT * FROM day2 WHERE id = $id";
                                    $data = mysqli_query($db1,$sql);
                                    foreach ($data as $db){
                                        $p1 = $db["p1"];$lokasi1 = "../../img/package/".$db["gbr1"];
                                        $p2 = $db["p2"];$lokasi2 = "../../img/package/".$db["gbr2"];
                                        $p3 = $db["p3"];$lokasi3 = "../../img/package/".$db["gbr3"];
                                    }
                                ?>
								<div class="a">
									<!-- <img src="../../img/package/naya.png" alt=""> -->
									<?php
									    echo "<img src='$lokasi1'>";
									    echo "<p> $p1 </p>"
									?>
									<!-- <p>Mengunjungi Mercusuar</p> -->
								</div>
								<div class="b">
									<!-- <img src="../../img/package/makam.png" alt=""> -->
									<?php
									    echo "<img src='$lokasi2'>";
									    echo "<p> $p2 </p>"
									?>
									<!-- <p>Mengunjungi Benteng Keraton Lia</p> -->
								</div>
								<div class="c">
									<!-- <img src="../../img/package/mata_air.png" alt=""> -->
									<?php
									    echo "<img src='$lokasi3'>";
									    echo "<p> $p3 </p>"
									?>
									<!-- <p>Mengunjungi Goa Kontamale</p> -->
								</div>
							</div>
						</details>
					</div>
				</div>
				<!-- <hr width="815px" color="white"> -->
				<div class="border">
					<div class="day3">
						<details class="renc2">
						<?php 
							if($d3 == 0 ){
								$d3 += 1;
							}else{
								$d3 = 0;
							}
						?>
						<summary>Day 3</summary>
							<div class="sum-cont">
							<?php
                                    $sql = "SELECT * FROM day3 WHERE id = $id";
                                    $data = mysqli_query($db1,$sql);
                                    foreach ($data as $db){
                                        $p1 = $db["p1"];$lokasi1 = "../../img/package/".$db["gbr1"];
                                        $p2 = $db["p2"];$lokasi2 = "../../img/package/".$db["gbr2"];
                                        $p3 = $db["p3"];$lokasi3 = "../../img/package/".$db["gbr3"];
                                    }
                                ?>
								<div class="a">
									<!-- <img src="../../img/package/sombu.png" alt=""> -->
									<?php
									    echo "<img src='$lokasi1'>";
									    echo "<p> $p1 </p>"
									?>
									<!-- <p>Mengunjungi Mercusuar</p> -->
								</div>
								<div class="b">
									<!-- <img src="../../img/package/marina.png" alt=""> -->
									<?php
									    echo "<img src='$lokasi2'>";
									    echo "<p> $p2 </p>"
									?>
									<!-- <p>Mengunjungi Benteng Keraton Lia</p> -->
								</div>
								<div class="c">
									<!-- <img src="../../img/package/pasar.png" alt=""> -->
									<?php
									    echo "<img src='$lokasi3'>";
									    echo "<p> $p3 </p>"
									?>
									<!-- <p>Mengunjungi Goa Kontamale</p> -->
								</div>
							</div>
						</details>
					</div>
				</div>
				<!-- <hr width="815px" color="white"> -->
			</div>
			<?php 
				$space = 0;
				if($d1==1){
					$space +=800;
				}if($d2==1){
					$space +=800;
				}if($d3==1){
					$space +=800;
				}
			?>
			<div style="top: <?php $space ?>px position: relative; "  class="incl">

				<h1>Include/Exclude</h1>
				<div class="a" style="position: relative;">
					<ul>
					<?php
						for($i=1; $i<=$o; $i++){
							if($i == 1) $text = $include1;
							elseif ($i == 2) $text = $include2;
							elseif ($i == 3) $text = $include3;
							elseif ($i == 4) $text = $include4;
							elseif ($i == 5) $text = $include5;
							elseif ($i == 6) $text = $include6;
							elseif ($i == 7) $text = $include7;
							elseif ($i == 8) $text = $include8;
							elseif ($i == 9) $text = $include9;
							elseif ($i == 10) $text = $include10;
							echo "<li> $text </li>";
						}
                    ?>
					</ul>
				</div>
				<div class="b">
					<ul>
					<?php
						for($i=1; $i<=$p; $i++){
							if($i == 1) $text = $exclude1;
							elseif ($i == 2) $text = $exclude2;
							elseif ($i == 3) $text = $exclude3;
							elseif ($i == 4) $text = $exclude4;
							elseif ($i == 5) $text = $exclude5;
							elseif ($i == 6) $text = $exclude6;
							echo "<li> $text </li>";
						}
                    ?>
					</ul>
				</div>
				<!-- <div class="c">
					<ul>
						<li>Peralatan Diving (+Rp.350.000,-)</li>
					</ul>
				</div> -->
			</div>
			<div class="lok cf">
				<h1>Lokasi Tour</h1>
				<div class="loc2">
					<!-- <p>Desa Waha, Wakatobi, Sulawesi Tenggara</p> -->
					<!-- <img src="../../img/package/loc2.svg" alt="LOKASI WISATA"> -->
				</div>
				<div class="map">
					<!-- <div class="capt">
					<p>Coming Soon!</p>
					<br><br>
					<p>Coming Soon!</p>
					<br><br>
					<p>Coming Soon!</p>
					</div> -->
					<div class="zoom4">
						<div class="kotak4">
								<a href="https://goo.gl/maps/Cba7Q7LD5gLwBH2MA" target="_blank">
									<img src="../../img/package/maps.png" alt="">
								</a>
						</div>
					</div>
				</div>
			</div>
			<div class="testi cf">
				<h1>Testimoni Pelanggan</h1>
				<div class="show">
					<p><a href="galery_detail.php">Lihat Selengkapnya!</a></p>
				</div>
				<div class="pics">
					<div class="pic1">
						<div class="zoom5">
							<div class="kotak5">
								<img src="../../img/package/testi.png" alt="">
							</div>
						</div>
					</div>
					<div class="pic2">
						<div class="zoom5">
							<div class="kotak5">
								<img src="../../img/package/test2.png" alt="">
							</div>
						</div>
					</div>
					<div class="pic3">
						<div class="zoom5">
							<div class="kotak5">
								<img src="../../img/package/test3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- faqs -->
			<div class="faqs cf">
				<h1>FaQs</h1>
					<div class="1">
						<img src="../../img/package/ask.svg" alt="">
						<details>
						<summary>Apa itu Trip?</summary>
							<div class="sum-cont2">
								<p>K-Trip adalah suatu platform online di mana masyarakat pecinta jalan-jalan yang terdiri dari berbagai komunitas, baik komunitas jalan-jalan maupun supporting/penyedia jasa yang terkait, bisa berkumpul dan memanfaatkan berbagai perangkat yang tersedia untuk mencari dan mengorganisir trip.</p>
							</div>
						</details>
					</div>
					<div class="2">
						<img src="../../img/package/ask.svg" alt="">
						<details>
						<summary>Apa bedanya dengan komunitas jalan-jalan??</summary>
							<div class="sum-cont2">
								<p>K-Trip adalah suatu platform online di mana masyarakat pecinta jalan-jalan yang terdiri dari berbagai komunitas, baik komunitas jalan-jalan maupun supporting/penyedia jasa yang terkait, bisa berkumpul dan memanfaatkan berbagai perangkat yang tersedia untuk mencari dan mengorganisir trip.</p>
							</div>
						</details>
					</div>
					<div class="3">
						<img src="../../img/package/ask.svg" alt="">
						<details>
						<summary>Apa Keuntungan memakai jasa K-Trip??</summary>
							<div class="sum-cont2">
								<p>K-Trip adalah suatu platform online di mana masyarakat pecinta jalan-jalan yang terdiri dari berbagai komunitas, baik komunitas jalan-jalan maupun supporting/penyedia jasa yang terkait, bisa berkumpul dan memanfaatkan berbagai perangkat yang tersedia untuk mencari dan mengorganisir trip.</p>
							</div>
						</details>
					</div>
					<div class="4">
						<img src="../../img/package/ask.svg" alt="">
						<details>
						<summary>Apa hanya ada trip? Apa tersedia juga aktivitas lain??</summary>
							<div class="sum-cont2">
								<p>K-Trip adalah suatu platform online di mana masyarakat pecinta jalan-jalan yang terdiri dari berbagai komunitas, baik komunitas jalan-jalan maupun supporting/penyedia jasa yang terkait, bisa berkumpul dan memanfaatkan berbagai perangkat yang tersedia untuk mencari dan mengorganisir trip.</p>
							</div>
						</details>
					</div>
			</div>

			<!-- rating -->
			<div class="rate2 cf">
				<h1>Ulasan</h1>
				<div class="rate3">
					<div class="poin">
						<h1>5</h1>
						<h2>/5</h2>
						<h3>Sangat Bagus</h3>
						<h4>Berdasarkan</h4>
						<p>1 Ulasan</p> 
					</div>
					<div class="bar5">
						<div class="bar6">
							<div class="bar7">
							<table>
								<tbody>
									<tr>
										<td class="jarak"><b>Sangat Bagus</b></td><td style="width: 200px;">
											<div class="progress">
											<div class="progress-bar" style="width: 20%;">20%</div>
										</div>
										</td>
									</tr>
									<tr>
										<td class="jarak"><b>Baik Sekali</b></td><td style="width: 200px;">
											<div class="progress">
											<div class="progress-bar bg-primary" style="width: 75%;">75%</div>
										</div>
										</td>
									</tr>
									<tr>
										<td class="jarak"><b>Cukup</b></td><td style="width: 200px;"><div class="progress">
											<div class="progress-bar bg-secondary" style="width: 50%;">50%</div>
										</div>
										</td>
									</tr>
									<tr>
										<td class="jarak"><b>Kurang</b></td><td style="width: 200px;"><div class="progress">
											<div class="progress-bar bg-danger" style="width: 25%;">25%</div>
										</div>
										</td>
									</tr>
									<tr>
										<td class="jarak"><b>Sangat Kurang</b></td><td style="width: 200px;"><div class="progress">
										</td>
									</tr>
								</tbody>
							</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="komen cf">
				<div class="komen2 cf">
					<div class="fir">
					<img src="../../img/package/user.svg" alt="">
					<h1>Jack Ma</h1>
					<p>02/09/2021</p>
						<div class="likes">
							<p>0 Suka</p>
							<img src="../../img/package/likes.svg" alt="">
						</div>
					</div>
					<div class="sec">
						<h1>Sangat Bagus</h1>
						<img src="../../img/package/star.svg" alt="">
						<img src="../../img/package/star.svg" alt="">
						<img src="../../img/package/star.svg" alt="">
						<img src="../../img/package/star.svg" alt="">
						<img src="../../img/package/star.svg" alt="">
						<p>Kata orang ada harga ada kualitas, tapi ga berlaku sih disini harga pertrip nya murah banget udah gitu banyak activitynya ga nyesel deh pesan disini hehehe thank you kak, nextt time order lagi:)</p>
					</div>
				</div>
				<div class="show2 cf">
					<p>Showing 1 - 1 of 1 in total</p>
				</div>
			</div>
			<!-- ulasan -->
			<div class="ulasan">
				<div class="rat">
				<details class="sec">
					<summary>Tuliskan Ulasan</summary>
					<div class="cont1">
						<h1>Tinggalkan Ulasan</h1>
						<p>Email kamu tidak akan di tampilkan. Form bertanda <b>*</b> perlu di isi</p>
						<div class="cont2">
							<form action="" method="">
								<div class="pent">
									<input width="250px" height="50px "type="text" id="name" placeholder="Nama*">
									<input type="text" id="email" placeholder="Email*">
								</div>
								<div class="cont3">
								<textarea name="" id="" cols="30" rows="10" placeholder="Content"></textarea>
								</div>
								<button type="submit" name="submit">Submit</button>
							</form>
						</div>
						<div class="cont4">
							<div class="excellent">
								<h1>Destinasi Wisata</h1>
								<fieldset class="rating">
								    <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
								    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
							<br>
							<div class="vgood">
								<h1>Makanan Tradisional</h1>
								<fieldset class="rating">
								    <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
								    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
							<br>
							<div class="average">
								<h1>Cagar Budaya</h1>
								<fieldset class="rating">
								    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
								    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
							<br>
							<div class="poor">
								<h1>Pelayanan Tour</h1>
								<fieldset class="rating">
								    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
								    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
							<br>
							<div class="terrible">
								<h1>Kebersihan</h1>
								<fieldset class="rating">
								    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
								    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
						</div>
						
					</div>
				</details>
			</div>
			</div>

			<!-- paket lainnya -->
			<div class="trip2">
				<h1>Kamu Juga Mungkin Suka</h1>
				<div class="paket">
					<div class="paket1">
						<div class="a">
							<div class="zoom">
								<div class="kotak">
									<div class="rec cf">
										<p>Rekomendasi</p>
										<img src="../../img/homepage/love.svg" alt="">
									</div>
									<a href="package.php?id=1"><img src="../../img/package/paket1.png" alt=""></a>
								</div>
							</div>
							<div class="loc2 cf">
								<img src="../../img/homepage/loc.svg" alt="">
								<p>Wakatobi, Sulawesi Tenggara</p>
								<a href="package.php?id=1">Wa Ndiu-Ndiu Trip</a>
							</div>
							<div class="rev cf">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star2.svg" alt="">
								<p>4 Review</p>
							</div>
							<div class="cal cf">
								<img src="../../img/homepage/cal.svg" alt="">
								<p>Agt 2022 - Nov 2022</p>
							</div>
							<div class="time">
								<img src="../../img/homepage/time.svg" alt="">
								<p>2 Hari 3 Malam</p>
							</div>
							<div class="flash cf">
								<img src="../../img/homepage/flash.svg" alt="">
								<p>mulai dari</p>
								<h1>Rp. 1.850.000,-</h1>
							</div>
						</div>
					</div>
					<div class="paket2">
						<div class="a">
							<div class="zoom">
								<div class="kotak">
									<div class="rec cf">
										<p>Rekomendasi</p>
										<img src="../../img/homepage/love.svg" alt="">
									</div>
									<a href="package.php?id=2"><img src="../../img/package/paket2.png" alt=""></a>
								</div>
							</div>
							<div class="loc2 cf">
								<img src="../../img/homepage/loc.svg" alt="">
								<p>Wakatobi, Sulawesi Tenggara</p>
								<a href="package.php?id=2">La Ndoke-Ndoke Trip</a>
							</div>
							<div class="rev cf">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star2.svg" alt="">
								<p>4 Review</p>
							</div>
							<div class="cal cf">
								<img src="../../img/homepage/cal.svg" alt="">
								<p>Agt 2022 - Nov 2022</p>
							</div>
							<div class="time">
								<img src="../../img/homepage/time.svg" alt="">
								<p>3 Hari 2 Malam</p>
							</div>
							<div class="flash cf">
								<img src="../../img/homepage/flash.svg" alt="">
								<p>mulai dari</p>
								<h1>Rp. 3.500.000,-</h1>
							</div>
						</div>
					</div>
					<div class="paket3">
						<div class="a">
							<div class="zoom">
								<div class="kotak">
									<div class="rec cf">
										<p>Rekomendasi</p>
										<img src="../../img/homepage/love.svg" alt="">
									</div>
									<a href="package.php?id=3"><img src="../../img/package/paket3.png" alt=""></a>
								</div>
							</div>
							<div class="loc2 cf">
								<img src="../../img/homepage/loc.svg" alt="">
								<p>Wakatobi, Sulawesi Tenggara</p>
								<a href="package.php?id=3">Gua La Sikori Trip</a>
							</div>
							<div class="rev cf">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star2.svg" alt="">
								<p>4 Review</p>
							</div>
							<div class="cal cf">
								<img src="../../img/homepage/cal.svg" alt="">
								<p>Agt 2022 - Nov 2022</p>
							</div>
							<div class="time">
								<img src="../../img/homepage/time.svg" alt="">
								<p>3 Hari 4 Malam</p>
							</div>
							<div class="flash cf">
								<img src="../../img/homepage/flash.svg" alt="">
								<p>mulai dari</p>
								<h1>Rp. 2.500.000,-</h1>
							</div>
						</div>
					</div>
					<div class="paket4">
						<div class="a">
							<div class="zoom">
								<div class="kotak">
									<div class="rec cf">
										<p>Rekomendasi</p>
										<img src="../../img/homepage/love.svg" alt="">
									</div>
									<a href="package.php?id=4"><img src="../../img/package/paket4.png" alt=""></a>
								</div>
							</div>
							<div class="loc2 cf">
								<img src="../../img/homepage/loc.svg" alt="">
								<p>Wakatobi, Sulawesi Tenggara</p>
								<a href="package.php?id=4">Watu Mokuri Trip</a>
							</div>
							<div class="rev cf">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star.svg" alt="">
								<img src="../../img/homepage/star2.svg" alt="">
								<p>4 Review</p>
							</div>
							<div class="cal cf">
								<img src="../../img/homepage/cal.svg" alt="">
								<p>Agt 2022 - Nov 2022</p>
							</div>
							<div class="time">
								<img src="../../img/homepage/time.svg" alt="">
								<p>4 Hari 3 Malam</p>
							</div>
							<div class="flash cf">
								<img src="../../img/homepage/flash.svg" alt="">
								<p>mulai dari</p>
								<h1>Rp. 4.000.000,-</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main section 2 -->
		<div class="sec2 cf">
			<div class="price">
				<p>Mulai dari</p>
				<h1><?php echo "Rp. ".strval(number_format($price,0,"",".")).",-" ?></h1>
			</div>
			<div class="jad">
				<h1>Tanggal</h1>
				<p><?php echo $tgl?></p>
			</div>
			<form action="redirect.php?id=<?php echo $id?>" method="post">
			<div class="parents">
				<h1>Dewasa</h1>
				<p>18+ Tahun</p>
				<div class="button">
				    <div class="form-row justify-content-center">
				        <div class="form-group">
				            <div class="input-group mx-auto mb-3">
				                <div class="number-input">
				                   <!--  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button> -->
				                    <input class="quantity" min="0" placeholder="0" value="0" type="number" name="quantity_parent">
				                    <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button> -->
				                </div>
				            </div>
				        </div>
				    </div>
			    </div>
			</div>
			<div class="child">
				<h1>Anak-Anak</h1>
				<p>6 - 12 Tahun</p>
				<div class="button">
				    <div class="form-row justify-content-center">
				        <div class="form-group">
				            <div class="input-group mx-auto mb-3">
				                <div class="number-input">
				                   <!--  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button> -->
				                    <input class="quantity" min="0" placeholder="0" value="0" type="number" name="quantity_child">
				                    <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button> -->
				                </div>
				            </div>
				        </div>
				    </div>
			    </div>
			</div>
			<div class="infant">
				<h1>Bayi</h1>
				<p>0 - 5 Tahun</p>
				<div class="button">
				    <div class="form-row justify-content-center">
				        <div class="form-group">
				            <div class="input-group mx-auto mb-3">
				                <div class="number-input">
				                    <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button> -->
				                    <input class="quantity" min="0" placeholder="0" value="0" type="number" name="quantity_infant">
				                    <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button> -->
				                </div>
				            </div>
				        </div>
				    </div>
			    </div>
			</div>
			<div class="pesan">
					<button type="submit" name="submit" onclick="">PESAN SEKARANG</button>
			</div>
			</form>
		</div>
	</div>
	<?php
		// if(isset($_POST["submit"]))
		// 	ob_start();
		// 	header('Location:booking.php');
		
	?>
	<div class="space">
		
	</div>
		<!-- footer -->
	<div class="footer cf">
		<hr width="100%" color="#E1E1E1">
		<div class="subfooter">
			<div class="a">
				<div class="ahead">
					<p>BUTUH BANTUAN?</p>
					<hr width="135px" color="#C4C4C4" >
				</div>
				<div class="hub">
					<p>Hubungi Kami</p>
					<h1>+628 1242067383</h1>
				</div>
				<div class="email">
					<p>Email Kami</p>
					<h1><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank">kasuami.team@gmail.com</a></h1>
				</div>
				<div class="ikuti">
					<p>Ikuti Kami</p>
					<a href="#"><img src="../../img/homepage/fb2.svg" alt=""></a>
					<a href="https://www.instagram.com/kasuami.team/" target="_blank"><img src="../../img/homepage/ig2.svg" alt=""></a>
					<a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank"><img src="../../img/homepage/g+2.svg" alt=""></a>
				</div>
			</div>
			<div class="b">
				<div class="ahead2">
					<p>KASUAMI TEAM</p>
					<hr class="2" width="135px" color="#C4C4C4" >
				</div>
				<div class="foot">
					<h1><a href="about_us.php">Tentang Kami</a></h1>
					<h1><a href="blog.php">Blog</a></h1>
					<h1><a href="galery.php">Galeri</a></h1>
					<h1><a href="kebudayaan.php">Kebudayaan</a></h1>
					<h1><a href="destinasi.php">Destinasi</a></h1>
				</div>
			</div>
			<div class="c">
				<div class="ahead">
					<p>DUKUNGAN</p>
					<hr width="135px" color="#C4C4C4" >
				</div>
				<div class="foot2">
					<h1><a href="#">Akun</a></h1>
					<h1><a href="#">Donasi</a></h1>
					<h1><a href="#">Kontak</a></h1>
					<h1><a href="#">Program Partner</a></h1>
					<h1><a href="#">Kebijakan Privasi</a></h1>
				</div>
			</div>
			<div class="d">
				<div class="ahead">
					<p>PENGATURAN</p>
					<hr width="135px" color="#C4C4C4" >
				</div>
				<div class="hub2">
					<p>Bahasa</p>
					<p><select name="" id="">
					    <option value="">ID</option>
					    <option value="">ENG</option>
					   	</select>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->

	<div class="footer2 cf">
		<hr width="100%" color="#E1E1E1">
		<div class="subfooter">
			<div class="copy">
				<p>Copyright © 2021 by <a href="">KASUAMI.TEAM</a></p>
			</div>
			<div class="sup">
				<p>Support by : </p>
				<img src="../../img/homepage/kasuamilogo.svg" alt="">
				<img src="../../img/homepage/ristek.svg" alt="">
			</div>
			<div class="kbkm">
				<img src="../../img/homepage/kbkm.svg" alt="">
			</div>
		</div>
	</div>
</body>
</html>