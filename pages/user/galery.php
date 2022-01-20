<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Baru</title>
    <link rel="stylesheet" href="stylegaleri.css">
	<style>
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
    
    <div class="container">

		<div class="maskot">
			<img src="../../img/galeri/maskot 2.svg">
		</div>

		<div class="judul">
			<h1>Galeri</h1>
		</div>

	</div>

    <!-- navigation list -->
	<nav class="list cf">
		<div class="beranda">
			<h1>K-TRIP</h1>
			<hr width="10px" color="#C5C5C5">
		</div>
		<p>Wa Ndiu Ndiu Trip</p>
	</nav>
	<hr color="#C4C4C4">

	<!-- main -->
	<div class="tengah">
	<!-- floating -->
	<a href="validate.php" class="float">
        <i class="fa fa-envelope my-float"></i>
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
		<div class="kotjud">
			<h1>Yuk Cek dan Ricek Dokumentasi Trip kami! </h1>
		</div>
		<div class="container1">
			<div class="zoom">
				<div class="gambar">
				<img src="../../img/galeri/pulau.JPG" alt="">
				</div>
			</div>
			<div class="isi">
				<h2>Dokumentasi selama trip</h2>
				<h1>Wa Ndiu Ndiu Trip</h1>
				<p>Trip ini berlangsung selama 3 hari 2 malam lho guys!</p>	
				<a href="galery_detail.php">
					<button type="submit">Tampilkan semua</button>
				</a>
			</div>
		</div>

		<div class="space"></div>

		<div class="container2">
			<div class="isi2">
				<p>Dokumentasi selama trip</p>
				<h1>La Ndoke-Ndoke Trip</h1>
				<p>Trip ini berlangsung selama 3 hari 2 malam lho guys!</p>	
				<a href="galery_detail.php">
					<button type="submit">Tampilkan semua</button>
				</a>
			</div>
			<div class="zoom">
				<div class="gambar2">
				<img src="../../img/galeri/pulau.JPG" alt="">
			</div>
			</div>
		</div>

		<div class="space"></div>

		<div class="container3">
			<div class="zoom">
				<div class="gambar">
				<img src="../../img/galeri/pulau.JPG" alt="">
			</div>
			</div>
			<div class="isi">
				<p>Dokumentasi selama trip</p>
				<h1>Gua La Sikori Trip</h1>
				<p>Trip ini berlangsung selama 3 hari 2 malam lho guys!</p>	
				<a href="galery_detail.php">
					<button type="submit">Tampilkan semua</button>
				</a>
			</div>
		</div>

		<div class="space"></div>

		<div class="container4">
			<h1>Yuk cobain sekarang, rasakan perjalanan yang berbeda bersama kami!</h1>
			<p>Piilihan Trip nya ada banyak lho guys, yuk buruan pesan sekarang</p>
			<a href="#">
				<button type="submit">Pesan Sekarang</button>
			</a>
		</div>

		<div class="space"></div>

		<div class="container5">
			<div class="isi2">
				<p>Dokumentasi selama trip</p>
				<h1>Watu Mokuri Trip</h1>
				<p>Trip ini berlangsung selama 3 hari 2 malam lho guys!</p>	
				<a href="galery_detail.php">
					<button type="submit">Tampilkan semua</button>
				</a>
			</div>
			<div class="zoom">
				<div class="gambar2">
				<img src="../../img/galeri/pulau.JPG" alt="">
			</div>
			</div>
		</div>

		<div class="space"></div>

		<div class="container6">
			<div class="zoom">
				<div class="gambar">
				<img src="../../img/galeri/pulau.JPG" alt="">
			</div>
			</div>
			<div class="isi">
				<p>Dokumentasi selama trip</p>
				<h1>La Misi-Misiki Trip</h1>
				<p>Trip ini berlangsung selama 3 hari 2 malam lho guys!</p>	
				<a href="galery_detail.php">
					<button type="submit">Tampilkan semua</button>
				</a>
			</div>
		</div>

		<div class="space"></div>

		<div class="container7">
			<div class="isi2">
				<p>Dokumentasi selama trip</p>
				<h1>La Ndoke-Ndoke Trip</h1>
				<p>Trip ini berlangsung selama 3 hari 2 malam lho guys!</p>	
				<a href="#">
					<button type="submit">Tampilkan semua</button>
				</a>
			</div>
			<div class="zoom">
				<div class="gambar2">
				<img src="../../img/galeri/pulau.JPG" alt="">
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
										<h1>Rp. 1.8500.000,-</h1>
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
										<p>3 Hari 4 Malam</p>
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