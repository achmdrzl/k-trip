<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BLOGS</title>
	<link rel="stylesheet" href="styleblog.css">
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
			<h4>Blogs</h4>
		</div>
	</div>

			<!-- hero1 -->
	<div class="hero1 cf">

		<div class="jud1">
		
			<h5>INFORMASI</h5>
			<hr width="20px">
			<h6>Blogs </h6>
		</div>

	</div>

	<!-- main -->
	<div class="mayn cf">
	<div class="main">
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
			<div class="merc">
				<div class="zm">
					<div class="zom">
						<a href="#"><img src="../../img/homepage/mercusuar.jpg" alt=""></a>
					</div>

				<h1>Mercusuar Wakatobi</h1>
				<div class="com">
					<input type="image" id="image" width="28px"
      				 src="../../img/homepage/org.svg">
					<p>Oleh</p>
					<h4>ADMIN</h4><p>. JULI 22, 2021 07:30 AM .</p>
					<h4>1 KOMENTAR .</h4>
					<input type="image" id="imge" width="18px"
      				 src="../../img/homepage/like.svg">
					<h3>5 Likes</h3>
				</div>


				
                <div class="read ">
						<p>Mercusuar ini dibangun 1901 pada masa penjajahan Belanda. Bangunan masih asli dengan tekstur Belanda. Tujuan dibangun mercusuar ini adalah terciptanya keselamatan pelayaran, karena <span id="dots">[...]</span><span id="more">telah banyak kapal karam di laut wangi-wangi menabrak karang maupun daratan. Pada saat itu tterdapat Kristal sebagai sinar pantulan penunjuk arah navigasi kapal, namun telah diambil oleh perhubungan laut Makasar dan sekarang diganti dengan cahaya petromax</span></p>
						<button onclick="myFunction()" id="myBtn" style="border: 0ch; background-color: #ffff; color: #5191FA; font-size: 18px;">READ MORE</button>

				<script>
				function myFunction() {
  				var dots = document.getElementById("dots");
  				var moreText = document.getElementById("more");
  				var btnText = document.getElementById("myBtn");

  					if (dots.style.display === "none") {
   					dots.style.display = "inline";
   					btnText.innerHTML = "READ MORE"; 
    				moreText.style.display = "none";
  					} else {
    				dots.style.display = "none";
    				btnText.innerHTML = "READ LESS"; 
    				moreText.style.display = "inline";
  						}
					}
					</script>
				</div>
			</div>
			</div>


			


			<div class="merc">
				<div class="zm">
					<div class="zom">
						<a href="#"><img src="../../img/homepage/Liya.png" alt=""></a>
					</div>

				<h1>Benteng Kraton Liya</h1>
				<div class="com">
					<input type="image" id="image" width="28px"
      				 src="../../img/homepage/org.svg">
					<p>Oleh</p>
					<h4>ADMIN</h4><p>. JULI 22, 2021 07:30 AM .</p>
					<h4>1 KOMENTAR .</h4>
					<input type="image" id="imge" width="18px"
      				 src="../../img/homepage/like.svg">
					<h3>5 Likes</h3>
				</div>


                <div class="read1 ">
						<p>Salah satu yang menjadi bukti sejarah Kerajaan Kesultanan Buton adalah dengan terdapat banyaknya Benteng  yang tersebar di seluruh pelosok wilayah kekuasaan Kesultanan Buton.
						Salah satunya adalah <span id="dot">[...]</span><span id="mor">Benteng Keraton Liya yang berada di Desa Liya Togo, Kecamatan Wangi-wangi Selatan, Kabupaten Wakatobi. Benteng ini terletak di dataran tinggi Pulau Wangi-wangi, sehingga ketika berdiri dari atas benteng kita akan disuguhkan dengan pemandangan yang sangat indah. </span></p>
						<button onclick="mayFunction()" id="mayBtn" style="border: 0ch; background-color: #ffff; color: #5191FA; font-size: 18px;">READ MORE</button>

				<script>
				function mayFunction() {
  				var dots = document.getElementById("dot");
  				var moreText = document.getElementById("mor");
  				var btnText = document.getElementById("mayBtn");

  					if (dots.style.display === "none") {
   					dots.style.display = "inline";
   					btnText.innerHTML = "READ MORE"; 
    				moreText.style.display = "none";
  					} else {
    				dots.style.display = "none";
    				btnText.innerHTML = "READ LESS"; 
    				moreText.style.display = "inline";
  						}
					}
					</script>
				</div>
			</div>
			</div>



			<div class="merc">
				<div class="zm">
					<div class="zom">
						<a href="#"><img src="../../img/homepage/waha.jpg" alt=""></a>
					</div>

				<h1>Pantai Waha</h1>
				<div class="com">
					<input type="image" id="image" width="28px"
      				 src="../../img/homepage/org.svg">
					<p>Oleh</p>
					<h4>ADMIN</h4><p>. JULI 22, 2021 07:30 AM .</p>
					<h4>1 KOMENTAR .</h4>
					<input type="image" id="imge" width="18px"
      				 src="../../img/homepage/like.svg">
					<h3>5 Likes</h3>
				</div>


                <div class="read2 ">
						<p>Pergi ke Wakatobi hanya dua hari memang tidak cukup.  Pernyataan itu beberapa kali disampaikan oleh setiap orang yang kami temui.  Terakhir hal itu disampaikan oleh  <span id="dt">[...]</span><span id="mr">salah seorang ibu saat kami mau kembali ke Malang.  “Datang lagi ke Wakatobi”, katanya tegas.  “Kalian harus pergi ke Kaledupa, pergi ke pulau Hoga.  Disana pemandangannya sangat bagus.  Kami punya rumah dan banyak famili disana”, lanjutnya</span></p>
						<button onclick="maiFunction()" id="maiBtn" style="border: 0ch; background-color: #ffff; color: #5191FA; font-size: 18px;">READ MORE</button>

				<script>
				function maiFunction() {
  				var dots = document.getElementById("dt");
  				var moreText = document.getElementById("mr");
  				var btnText = document.getElementById("maiBtn");

  					if (dots.style.display === "none") {
   					dots.style.display = "inline";
   					btnText.innerHTML = "READ MORE"; 
    				moreText.style.display = "none";
  					} else {
    				dots.style.display = "none";
    				btnText.innerHTML = "READ LESS"; 
    				moreText.style.display = "inline";
  						}
					}
					</script>
				</div>
			</div>
			

			</div>

			
	</div>
	
	
	<!-- terkait -->
	<div class="terkait">
	<div class="kunci">
		<div class="serch">
			<input class="search" type="text" placeholder="Pencarian" required>
		</div>
		<div class="kp">
			<input class="button" type="button" >
		</div>
		<!-- <form>
			<input class="search" type="text" placeholder="Pencarian" required>
			<input class="button" type="button" >
		</form> -->
	</div>
	
		<h1> TENTANG KAMI</h1>
		<hr width="170px" color="#C4C4C4">
		<div class="zum">
			<a href="#"><img src="../../img/homepage/perahu." alt=""></a>
		</div>


		<div class="reado ">
			<p>Membuat teknologi tepat guna yang bisa digunakan oleh masyarakat didesa waha demi terwujudnya desa waha menjadi kawasan wisata dan berbudaya yang sudah terdigitalisasi, juga mengaktifkan kembali <span id="doth">[...]</span><span id="mur">anak-anak WTC untuk membantu menyejahterakan masyarakat sekitar dan tentunya membuat desa waha lebih</span></p>
			<button onclick="mauFunction()" id="mauBtn" style="border: 0ch; background-color: #ffff; color: #5191FA; font-size: 18px;">READ MORE</button>

	<script>
	function mauFunction() {
	  var dots = document.getElementById("doth");
	  var moreText = document.getElementById("mur");
	  var btnText = document.getElementById("mauBtn");

		  if (dots.style.display === "none") {
		   dots.style.display = "inline";
		   btnText.innerHTML = "READ MORE"; 
		moreText.style.display = "none";
		  } else {
		dots.style.display = "none";
		btnText.innerHTML = "READ LESS"; 
		moreText.style.display = "inline";
			  }
		}
		</script>
		</div>
<!--  batas terkait -->

	<div class="tags">
	<h1> TAGS</h1>
	<hr width="250px" color="#C4C4C4">
		<div class="teg">
			<a href="#">Sejarah</a>
			<a href="#">Museum</a>
			<a href="#">Budaya</a>
			<a href="#">Destinasi</a>
			<a href="#">Pantai</a>
			<a href="#">Tarian</a>
			<a href="#">Kuliner</a>
			<a href="#">Gunung</a>
			<a href="#">Cagar Budaya</a>
			<a href="#">Bahasa</a>
			<a href="#">Adat Istiadat</a>
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
										<img src="../../img/homepage/love.svg"alt="">
									</div>
									<a href="package.php?id=1"><img src="../../img/homepage/paket1.png" alt=""></a>
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
									<a href="package.php?id=2"><img src="../../img/homepage/paket2.png" alt=""></a>
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
								<img src="../../img/homepage/flash.svg"  alt="">
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
									<a href="package.php?id=3"><img src="../../img/homepage/paket3.png" alt=""></a>
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
								<img src="../../img/homepage/cal.svg"  alt="">
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
									<a href="package.php?id=4"><img src="../../img/homepage/paket1.png" alt=""></a>
								</div>
							</div>
							<div class="loc2 cf">
								<img src="../../img/homepage/loc.svg"alt="">
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




	
<!-- footer -->

	<div class="footer cf">

		<div class="subfooter">
			<div class="garis">
	
			</div>

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