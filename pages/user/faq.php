<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PERTANYAAN</title>
	<link rel="stylesheet" href="stylefaqs.css">
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

	
		<!-- hero -->
	<div class="hero">
		<div class="jud">
			<a href=""><img src="../../img/homepage/maskot.png" width="100"> </a>
			<h4>Pertanyaan</h4>
		</div>
	</div>

			<!-- hero1 -->
	<div class="hero1 cf">

		<div class="jud1">
		
			<h5>INFORMASI</h5>
			<hr width="20px">
			<h6>Pertanyaan</h6>
		</div>

	</div>

	<!-- faqs -->
	<div class="rata">
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
	<div class="fak cf">
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

			<div class="terkait">
				<h1> Trip Terkait</h1>
				<hr width="200px" color="#C4C4C4">

				<div class="yi">
					<div class="zm">
					<img src="../../img/homepage/paket1.png" alt="">
					</div>
					<h2>Wa Ndiu-Ndiu Trip</h2>
					
					<input type="image" id="image" width="15px"
      				 src="../../img/package/benar.svg">
					<p>Agt 2022 - Nov 2022</p>
					<h4>mulai dari</h4><h3>Rp. 1.850.000,-</h3>

					<hr width="100%" color="#C4C4C4">

				</div>
				<div class="er">
					<div class="zm">
					<img src="../../img/homepage/paket2.png" alt="">
					</div>
					<h2>Wa Ndiu-Ndiu Trip</h2> 

					<input type="image" id="image" width="15px"
      				 src="../../img/package/benar.svg">
					<p>Agt 2022 - Nov 2022</p>
					<h4>mulai dari</h4><h3>Rp. 3.500.000,-</h3>

					<hr width="100%" color="#C4C4C4">

				</div>
				<div class="san">
					<div class="zm">
					<img src="../../img/homepage/paket3.png" alt="">
					</div>
					<h2>Gua La Sikori Trip</h2>

					<input type="image" id="image" width="15px"
      				 src="../../img/package/benar.svg">
					<p>Agt 2022 - Nov 2022</p>
					<h4>mulai dari</h4><h3>Rp. 2.500.000,-</h3>

					<hr width="100%" color="#C4C4C4">

				</div>
				<div class="si">
					<div class="zm">
					<img src="../../img/homepage/paket2.png" alt="">
					</div>
					<h2>Wa Tu Mokuri Trip</h2>

					<input type="image" id="image" width="15px"
      				 src="../../img/package/benar.svg">
					<p>Agt 2022 - Nov 2022</p>
					<h4>mulai dari</h4><h3>Rp. 4.000.000,-</h3>

					<hr width="100%" color="#C4C4C4">	
				</div>
			</div>

		</div>
		
	<div class="main2 cf">
		<div class="paket">
			<div class="trip">
				<center><h1>Kamu juga mungkin Menyukai</h1></center>
				<div class="a">
					<div class="zoom">
						<div class="kotak">
							<div class="rec cf">
								<p>Rekomendasi</p>
								<img src="../../img/homepage/love.svg" alt="">
							</div>
							<a href="package.php?id=1"><img src="../../img/homepage/paket1.png" alt=""></a>
						</div>
					</div>
					<div class="loc cf">
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
				<div class="b">
					<div class="zoom">
						<div class="kotak">
							<div class="rec cf">
								<p>Rekomendasi</p>
								<img src="../../img/homepage/love.svg" alt="">
							</div>
							<a href="package.php?id=2"><img src="../../img/homepage/paket2.png" alt=""></a>
						</div>
					</div>
					<div class="loc cf">
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
				<div class="c">
					<div class="zoom">
						<div class="kotak">
							<div class="rec cf">
								<p>Rekomendasi</p>
								<img src="../../img/homepage/love.svg" alt="">
							</div>
							<a href="package.php?id=3"><img src="../../img/homepage/paket3.png" alt=""></a>
						</div>
					</div>
					<div class="loc cf">
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