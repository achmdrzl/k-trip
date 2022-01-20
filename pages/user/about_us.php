<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ABOUT US</title>
	<link rel="stylesheet" href="styleabout_us.css">
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
				<p><a href="#login_form" id="login_pop">Login</a></p>
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
			<h4>Tentang Kami</h4>
		</div>
	</div>

			<!-- hero1 -->
	<div class="hero1 cf">

		<div class="jud1">
		
			<h5>INFORMASI</h5>
			<hr width="20px">
			<h6>Tentang Kami</h6>
		</div>

	</div>

	<!-- main -->
	<div class="main cf">
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
			<div class="a">
				<div class="a1">
					<div class="a11">
					<img src="../../img/homepage/perahu.png" alt="">
				</div>
					<p class="judul">Misi Kami</p>
					<br>
					<p class="text">Membuat teknologi tepat guna yang bisa digunakan oleh masyarakat didesa waha demi terwujudnya desa waha menjadi kawasan wisata dan berbudaya yang sudah terdigitalisasi, juga mengaktifkan kembali anak-anak WTC untuk membantu menyejahterakan masyarakat sekitar dan tentunya membuat desa waha lebih dikenal lagi. </p>
				</div>
				<div class="b1">
					<div class="b11">
					<img src="../../img/homepage/snorkling.png" alt="">
				</div>
					<p class="judul1">Cerita Kami</p>
					<br>
					<p class="texti">Menyikapi hal yang telah terjadi karena kurang  tereksposenya kawasan wisata yang memiliki potensi yang tinggi akan desa wisata serta berkebudayaan tinggi maka kami mengajukan untuk membantu masyarakat sekitar untuk lebih membuat desa waha menjadi objek wisata yang bisa di kenal oleh orang banyak tentunya serta objek wisaya yang bisa lebih lestari lagi. </p>
				</div>
			</div>	
	</div>
	<div class="frame cf">
		<div class="f1">
			<p class="jdl">10 +</p>
					<br>
					<p class="txt">Mitra </p>
		</div>
		<div class="f2">
					<p class="jdl">12 +</p>
					<br>
					<p class="txt2">Destinasi </p>
		</div>
		<div class="f3">
					<p class="jdl">50 +</p>
					<br>
					<p class="txt3">Perlengkapan </p>
		</div>
		<div class="f4">
					<p class="jdl">50 +</p>
					<br>
					<p class="txt4">Pemesanan </p>
		</div>
	</div>

<div class="frame2 cf">
			<div class="aa2">

<div class="testi cf">

		<div class="slidershow">

			<div class="slides">
				<input type="radio" name="r" id="r1" checked>
		        <input type="radio" name="r" id="r2">
		        <input type="radio" name="r" id="r3">
				
		        <div class="slide s1">
		          <div class="box3">
		            <div class="az">
		             	<h2 id="text"> <b>Hidup Seperti Penjelajah</b> </h2>
                    	<img src="../../img/homepage/kanan.png" alt="Image 1">
    		            </div>

		          </div>  
        		</div>

				<div class="slide">
		          <div class="box3">
		            <div class="az">
		               <div>
                		<a href="#">
                		<h2 id="text"> <b>Nikmati Keindahan Alam</b> </h2>
                    	<img src="../../img/homepage/tengah.jpg" alt="Image 1">
                		</a>            
            			</div>
		            </div>
		          </div>  
        		</div>

				<div class="slide">
		          <div class="box3">
		            <div class="az">
		               <div>
                		<a href="#">
                			<h2 id="text"> <b>Petualangan Tiada Akhir</b> </h2>
                    	<img src="../../img/homepage/kiri.png" alt="Image 1">
                		</a>            
            			</div>
		            </div>
		          </div>  
        		</div>


			</div>	
		</div>
		</div>
		<div class="navigation">
	        <label for="r1" class="circle"></label>
	        <label for="r2" class="circle"></label>
	        <label for="r3" class="circle"></label>
      	</div>
	</div>
	</div>
	</div>
</div>

<div class="cont">
<div class="tim cf">
	<center><p class="tem"> Tim KASUAMI </p></center>
			<div class="ling1">
				<div class="lingkaran1">
					<p class="title1">M. Lutfi Syahindra </p>
					<p class="text1">Developer</p>
					<img src="../../img/homepage/lutfi.png">
				</div>
			</div>

			<div class="ling2">
				<div class="lingkaran2">
				<p class="title2">Achmad Rizal</p>
				<p class="text2">Developer</p>
				<img src="../../img/homepage/ijal.png">
				</div>

			</div>

			<div class="ling3">
				<div class="lingkaran3">
					<p class="title3">Satrio Pangestu</p>
					<p class="text3">Designer</p>
					<img src="../../img/homepage/rio.png">
				</div>
				
			</div>
</div>

<div class="tim2 cf">
			<div class="ling4">
				<div class="lingkaran4">
					<p class="title4">Fitrah Aliyah A.</p>
					<p class="text4">Marketing</p>
					<img src="../../img/homepage/fitrah.png">
				</div>
				
			</div>

			<div class="ling5">
				<div class="lingkaran5">
					<p class="title5">Nurfadilla Fahmi</p>
					<p class="text5">Developer</p>
					<img src="../../img/homepage/fida.png">
				</div>
				
			</div>
</div>

<div class="wtc cf">
	<center><p class="wtc1" text-align:"center"> Tim WTC </p></center>
	<center><p class="wtc2" text-align:"center">(Waha Tourism Community) </p> </center>
		
		<div class="ling6">
				<div class="lingkaran6">
					<p class="title6">Shinta Qalmiyah A. </p>
					<p class="text6">Ketua WTC</p>
					<img src="../../img/homepage/shinta.png">

				</div>
			</div>

			<div class="ling7">
				<div class="lingkaran7">
				<p class="title7">Novan Yustari Jais</p>
				<p class="text7">Ketua Divisi Makanan <br>Tradisional</p>
				<img src="../../img/homepage/nov.png">
				</div>

			</div>

			<div class="ling8">
				<div class="lingkaran8">
					<p class="title8">La Ode Man’arfah</p>
					<p class="text8">Ketua Divisi Tour Guide</p>
					<img src="../../img/homepage/ode.png">
				</div>
				
			</div>
</div>
</div>
<div class="space"></div>

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