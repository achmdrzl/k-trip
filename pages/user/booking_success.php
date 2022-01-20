<?php
	include "../../koneksi.php";
	$paycode = $_REQUEST["paycode"];
	$paycode = $_GET["paycode"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	<link rel="stylesheet" href="stylebooking_success.css">

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

		<!-- navigation list -->
	<nav class="list cf">
		<div class="beranda">
			<h1>DESTINASI</h1>
			<hr width="10px" color="#C5C5C5">
		</div>
		<div class="desa">
			<h1>Pemesanan Berhasil</h1>
			<!-- <hr width="10px" color="#C5C5C5">	 -->
		</div>
		<!-- <p>Wa Ndiu Ndiu Trip</p> -->
	</nav>


	<!-- main section -->
	<div class="cont cf">
	<?php
		$sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
		$data = mysqli_query($db1, $sql);
		foreach ($data as $db){
			$nama = $db["nama"];
			$email = $db["email"];
			$alamat = $db["alamat"];
			$kota = $db["kota"];
			$id_prov = $db["provinsi"];
			$negara = $db["negara"];
			$nohp = $db["nohp"];
			$kodepos = $db["kodepos"];
			$metode_pemb = $db["metode_pemb"];
			$kebutuhan_tambahan = $db["kebutuhan_khusus"];
			$paycode = $db["paycode"];
			$metode_pemb = $db["metode_pemb"];
		}
		$sql = "SELECT * FROM provinces WHERE prov_id = $id_prov";
		$data = mysqli_query($db1, $sql);
		foreach ($data as $db){
			$provinsi = $db["prov_name"];
		}
		?>
		<div class="seca">
			<div class="success cf">
				<img src="../../img/package/success.svg" alt="">
				<p>
					<strong><?php echo $nama?>, </strong> Pesanan kamu berhasil dan Segera Lakukan Pembayaran Pertama mu!
				</p>
				<h1>Untuk detail pemesanan kami kirimkan ke Email kamu yah!</h1>
			</div>
			<h1>Informasi Kamu!</h1>
			<div class="sec1 cf">
				<div class="secform">
					<div class="border2">
						<h1>Nama Lengkap</h1>
						<p><?php echo $nama ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>Email</h1>
						<p><?php echo $email ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>Alamat</h1>
						<p><?php echo $alamat ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>No. HP</h1>
						<p><?php echo $nohp ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>Kota</h1>
						<p><?php echo $kota ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>Provinsi</h1>
						<p><?php echo $provinsi ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>Negara</h1>
						<p>INDONESIA</p>
						<br><br>
						<div class="liner"></div>
						<h1>Kode ZIP / Kode POS</h1>
						<p><?php echo $kodepos ?></p>
						<br><br>
						<div class="liner"></div>
						<h1>Tambahan Kebutuhan</h1>
						<p><?php echo $kebutuhan_tambahan ?></p>
					</div>
				</div>
				<div class="submit">
					 <button type="submit" value="submit"><a href="../../cetak_bill1.php?paycode=<?php echo $paycode ?>">Cetak Bill</a></button>
					 <!-- <a href="cetak.php" onclick="return confirm('Yakin ingin Log Out?')"><p>Log Out</p></a> -->
				 </div>
			</div>
		</div>
		<div class="secb">
			<div class="nopes">
				<div class="border">
					<h1>No. Pemesanan <?php echo "\t"; ?></h1>
					<p><?php echo $paycode ?></p>
					<br><br>
					<h1>Tanggal Pemesanan</h1>
					<p><?php
						date_default_timezone_set('Asia/Jakarta');
						echo date('d-m-Y');
						// echo date('d-m-Y H:i:s');
						?>
					</p>
					<br><br>
					<h1>Metode Pembayaran</h1>
					<p><?php echo $metode_pemb ?></p>
					<br><br>
					<h1>Status</h1>
					<p>Waiting</p>
				</div>
			</div>
			<h1>Pesanan Kamu</h1>
			<div class="sec2 cf">
			<?php
					$sql = "SELECT * FROM passenger WHERE paycode = '$paycode'";
					$data = mysqli_query($db1,$sql);
					foreach ($data as $db){
						$parent = $db["parent"];
						$child = $db["child"];
						$infant = $db["infant"];
						$p_parent = $db["p_parent"];
						$p_child = $db["p_child"];
						$p_infant = $db["p_infant"];
						$total = $db["price"];
						$id_trip = $db["id_paket"];
					}
					$sql = "SELECT * FROM assets WHERE id = '$id_trip'";
					$data = mysqli_query($db1,$sql);
					foreach ($data as $db){
						$nama_trip = $db["paket"];
						$tgl_trip = $db["tgl"];
						$durasi = $db["durasi"];
					}
            	?>
				<div class="a">
					<div class="loca">
						<h1><?php echo $nama_trip ?></h1>
						<img src="../../img/package/loc.svg" alt="">
						<p>Desa Waha, Wakatobi, Sulawesi Tenggara</p>
					</div>
					<div class="pakett">
						<img src="../../img/package/bo1.jpg" alt="">
					</div>
				</div>
				<div class="b cf">
				
					<div class="info">
						<h1>Tipe Trip</h1>
						<p>Grup Trip</p>
						<br><br>
						<h1>Keberangkatan</h1>
						<p><?php echo $tgl_trip ?></p>
						<br><br>
						<h1>Durasi</h1>
						<p><?php echo $durasi ?></p>
						<br><br>
						<h1>Email</h1>
						<p><?php echo $email ?></p>
						<br><br>
						<h1>Maksimal Orang</h1>
						<p>15 Orang</p>
						<br><br>
						<h1>Jumlah Dewasa</h1>
						<p><?php echo $parent?> Orang</p>
						<br><br>
						<h1>Jumlah Anak</h1>
						<p><?php echo $child?> Anak-anak</p>
						<br><br>
						<h1>Jumlah Bayi</h1>
						<p><?php echo $infant?> Bayi</p>
					</div>
				</div>
				<div class="d">
					<div class="payy">
						<div class="biayaa">
							<h1>Biaya Dewasa</h1>
							<p><?php echo "Rp. ".strval(number_format($p_parent,0,"",".")).",-" ?></p>
						</div>
						<div class="biayab">
							<h1>Biaya Anak-anak</h1>
							<p><?php echo "Rp. ".strval(number_format($p_child,0,"",".")).",-" ?></p>
						</div>
						<div class="biayac">
							<h1>Biaya Bayi</h1>
							<p><?php echo "Rp. ".strval(number_format($p_infant,0,"",".")).",-" ?></p>
						</div>
						<!-- <div class="sub">
							<h1>Subtotal</h1>
							<p>Rp.3.750.000,-</p>
						</div> -->
						<div class="total">
							<h1>Total Pembayaran</h1>
							<p><?php echo "Rp. ".strval(number_format($total,0,"",".")).",-" ?></p>
						</div>
						<div class="bayar">
							<form action="../../notifadmin.php" method="post">
							<button type="submit" name="bayar" value="bayar"><a href="validate.php">Bayar Sekarang</a></button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
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
			<div class="hline">
				<!-- <hr width="100%" color="#E1E1E1"> -->
			</div>
	</div>
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