<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KULINER</title>
    <link rel="stylesheet" href="stylekuliner.css">
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
                <!-- <img src="../../img/fb.png" alt="Facebook"> -->
                <a href="https://www.instagram.com/kasuami.team/" target="_blank"><img src="../../img/homepage/ig.svg" alt=""></a>
                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank"><img src="../../img/homepage/g+.svg" alt=""></a>
                <!-- 				<img src="../../img/g+.png" alt="Google+">
				<img src="../../img/ig.png" alt="Instagram">  -->
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
                <a href="">
                    <p>Sign Up</p>
                </a>
            </div>
            <!-- <a href="#"><img src="../../img/signup.svg" alt=""></a> -->
        </div>
    </div>

    <div class="tag"></div>
    <div class="judat">
        <h1>KEBUDAYAAN</h1>
        <div class="judatgar"></div>
        <div class="judat1">
            <h1>Makanan Tradisional</h1>
        </div>

    </div>

    <!-- hero -->
    <div class="hero">
        <div class="jud">
        </div>
    </div>

    <!--Konten Baris 1-->
    <div class="kontenbar1">
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
        <div class="boxkt1">
            <img src="../../img/kt1.png">
        </div>

        <div class="boxkt2">
            <img src="../../img/kt2.png">
        </div>

        <div class="boxkt3">
            <h1>Parende</h1>
            <p>Kuliner ini merupakan olahan ikan yang dimasak dengan kuah asam dan cabai, dan ikan yang biasa digunakan adalah ikan laut. Parende biasanya sangat cocok dihidangkan dengan kasuami, yang mana juga merupakan sajian khas Wakatobi. Kasuami merupakan
                parutan singkong yang diperas sehingga tidak menyisakan air.
            </p>
        </div>
    </div>

    <!--Konten Baris 2-->
    <div class="kontenbar2">
        <img src="../../img/par.png">
        <div class="maskot">
            <img src="../../img/maskot.png">
        </div>
    </div>

    <!--Konten Baris 3-->
    <div class="kontenbar3">

        <div class="boxlul1">
            <img src="../../img/lul1.png">
        </div>

        <div class="boxbir1">
            <p>Setelah beras terbungkus dengan daun pisang, kemudian dimasukkan ke dalam bambu untuk dibakar di ujung bagian bawahnya.
            </p>

            <p>
                Cara memasak nasi seperti ini memang unik dan memberikan kelezatan nasi yang khas. Selain di Wakatobi, cara memasak seperti ini juga dilakukan oleh Suku Dayak Kalimantan.
            </p>
        </div>

        <div class="boxlul2">
            <img src="../../img/lul2.png">
        </div>

        <div class="boxlul3">
            <img src="../../img/lul3.png">
        </div>

        <div class="boxlulis">
            <h1>Luluta</h1>
            <p>Makanan khas Wakatobi selanjutnya adalah Luluta, yang mana merupakan nasi yang dimasak dalam bambu. Makanan yang berasal dari Pulau Binong ini bahan dasarnya adalah beras yang dibungkus dengan daun pisang.</p>
        </div>
    </div>

    <!--Konten Baris 4-->
    <div class="kontenbar4">

        <div class="boxkamisi">
            <h1>Kambalu</h1>
            <p>Kambalu berasal dari umbi-umbian tepatnya keladi dan talas yang dibungkus dengan daun kelapa muda. Untuk membuat Kambalu, keladi/talas bisa dihaluskan terlebih dahulu, kemudian dicampur dan diaduk dengan santan, minyak dan bawang goreng.
            </p>
        </div>

        <div class="boxkam1">
            <img src="../../img/kam1.png">
        </div>

        <div class="boxkam2">
            <img src="../../img/kam2.png">
        </div>

        <div class="boxkamisi2">
            <p>Jika sudah, adonan bisa dimasukkan ke dalam pembungkus dari daun kelapa mudah yang telah diolesi dengan minyak. Kemudian Kambalu bisa dikukus selama 30 menit hingga 1 jam, atau tunggu hingga warna daun kelapa muda berwarna kecoklatan.</p>
        </div>
    </div>

    <!--Konten Baris 5-->
    <div class="kontenbar5">

        <div class="boxkur1">
            <img src="../../img/kur1.png">
        </div>

        <div class="boxkur2">
            <img src="../../img/kur2.png">
        </div>

        <div class="boxbir2">
            <div class="boxisibir">
                <p>
                    Meskipun begitu cara mengolahnya membutuhkan keahlian khusus, ini karena adanya duri pada bulu babi yang bisa melukai manusia.
                </p>
                <p>
                    Setelah bulu babi dibersihkan durinya, kemudian bisa dibakar hingga matang. Biasanya Kukure paling lezat dinikmati dalam kondisi sangat fresh saat dimasak.
                </p>
            </div>
        </div>

        <div class="boxkur3">
            <img src="../../img/kur3.png">
        </div>

        <div class="boxkurisi">
            <h1>Kukure</h1>
            <p>Makanan khas Wakatobi Kukure ini terbuat dari bulu babi yang banyak ditemukan di perairan pinggir pantai. Makanan khas Wakatobi ini merupakan makanan yang kaya akan gizi yang bermanfaat untuk tubuh.</p>
        </div>
        <div class="boxtl">
            <h1>Kamu juga mungkin Menyukai</h1>
        </div>
    </div>
    <div class="bor"></div>
    <!-- konten baris 6 -->


    <div class="kontenbar6">

        <div class="paket1">
            <div class="ww">
            <a href="package.php?id=1"><img src="../../img/wd.png"></a>
            </div>

            <div class="boxrec">
                <h1>Rekomendasi</h1>
            </div>

            <div class="boxlike">
                <img src="../../img/suka.png">
            </div>

            <div class="boxloc">
                <img src="../../img/locpin.png">
                <h1>Wakatobi, Sulawesi Tenggara</h1>
            </div>

            <div class="boxwandiu">
            <a href="package.php?id=1"><h1>Wa Ndiu-Ndiu Trip</h1></a>
            </div>

            <div class="boxbin">
                <img src="../../img/binjer.png">
                <p>4 Reviews</p>
            </div>

            <div class="boxjdw">
                <img src="../../img/genda.png">
                <h1>Agt 2022 - Nov 2022</h1>
            </div>

            <div class="boxhari">
                <img src="../../img/jam.png">
                <div class="hari">
                    <h1>2 Hari 3 Malam</h1>
                </div>
            </div>

            <div class="boxmuldar">
                <img src="../../img/petir.png">
                <h1>mulai dari</h1>
            </div>

            <div class="boxpr">
                <h1>Rp. 1.850.000,-</h1>
            </div>
        </div>

        <div class="paket2">
            <div class="ww">
            <a href="package.php?id=2"><img src="../../img/land.png"></a>
            </div>

            <div class="boxrec">
                <h1>Rekomendasi</h1>
            </div>

            <div class="boxlike">
                <img src="../../img/suka.png">
            </div>

            <div class="boxloc">
                <img src="../../img/locpin.png">
                <h1>Wakatobi, Sulawesi Tenggara</h1>
            </div>

            <div class="boxwandiu">
            <a href="package.php?id=2"><h1>La Ndoke-Ndoke Trip</h1></a>
            </div>

            <div class="boxbin">
                <img src="../../img/binjer.png">
                <p>4 Reviews</p>
            </div>

            <div class="boxjdw">
                <img src="../../img/genda.png">
                <h1>Agt 2022 - Nov 2022</h1>
            </div>

            <div class="boxhari">
                <img src="../../img/jam.png">
                <div class="hari">
                    <h1>3 Hari 2 Malam</h1>
                </div>
            </div>

            <div class="boxmuldar">
                <img src="../../img/petir.png">
                <h1>mulai dari</h1>
            </div>

            <div class="boxpr">
                <h1>Rp. 3.500.000,-</h1>
            </div>
        </div>

        <div class="paket3">
            <div class="ww">
            <a href="package.php?id=3"><img src="../../img/gal.png"></a>
            </div>

            <div class="boxrec">
                <h1>Rekomendasi</h1>
            </div>

            <div class="boxlike">
                <img src="../../img/suka.png">
            </div>

            <div class="boxloc">
                <img src="../../img/locpin.png">
                <h1>Wakatobi, Sulawesi Tenggara</h1>
            </div>

            <div class="boxwandiu">
            <a href="package.php?id=3"><h1>Goa La Sikori Trip</h1></a>
            </div>

            <div class="boxbin">
                <img src="../../img/binjer.png">
                <p>4 Reviews</p>
            </div>

            <div class="boxjdw">
                <img src="../../img/genda.png">
                <h1>Agt 2022 - Nov 2022</h1>
            </div>

            <div class="boxhari">
                <img src="../../img/jam.png">
                <div class="hari">
                    <h1>3 Hari 4 Malam</h1>
                </div>
            </div>

            <div class="boxmuldar">
                <img src="../../img/petir.png">
                <h1>mulai dari</h1>
            </div>

            <div class="boxpr">
                <h1>Rp. 2.500.000,-</h1>
            </div>
        </div>

        <div class="paket4">

            <div class="ww">
            <a href="package.php?id=4"><img src="../../img/wtn.png"></a>
            </div>

            <div class="boxrec">
                <h1>Rekomendasi</h1>
            </div>

            <div class="boxlike">
                <img src="../../img/suka.png">
            </div>

            <div class="boxloc">
                <img src="../../img/locpin.png">
                <h1>Wakatobi, Sulawesi Tenggara</h1>
            </div>

            <div class="boxwandiu">
            <a href="package.php?id=4"><h1>Watumokuri Trip</h1></a>
            </div>

            <div class="boxbin">
                <img src="../../img/binjer.png">
                <p>4 Reviews</p>
            </div>

            <div class="boxjdw">
                <img src="../../img/genda.png">
                <h1>Mulai dari 05 Agt - 08 Agt 2021</h1>
            </div>

            <div class="boxhari">
                <img src="../../img/jam.png">
                <div class="hari">
                    <h1>4 Hari 3 Malam</h1>
                </div>
            </div>

            <div class="boxmuldar">
                <img src="../../img/petir.png">
                <h1>mulai dari</h1>
            </div>

            <div class="boxpr">
                <h1>Rp. 4.000.000,-</h1>
            </div>
        </div>

    </div>
    <!-- footer -->

    <div class="footer cf">
        <hr width="100%" color="#C4C4C4">
        <div class="subfooter">
            <div class="a">
                <div class="ahead">
                    <p>BUTUH BANTUAN?</p>
                    <hr width="135px" color="#C4C4C4">
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
                    <a href="#"><img src="../../img/fb2.png" alt=""></a>
                    <a href="https://www.instagram.com/kasuami.team/" target="_blank"><img src="../../img/ig2.png" alt=""></a>
                    <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank"><img src="../../img/g+2.png" alt=""></a>
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
                    <hr width="135px" color="#C4C4C4">
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
                    <hr width="135px" color="#C4C4C4">
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
        <hr width="100%" color="#C4C4C4">
        <div class="subfooter">
            <div class="copy">
                <p>Copyright © 2021 by <a href="">KASUAMI.TEAM</a></p>
            </div>
            <div class="sup">
                <p>Support by : </p>
                <img src="../../img/kasuamilogo.png" alt="">
                <img src="../../img/ristek.png" alt="">
            </div>
            <div class="kbkm">
                <img src="../../img/kbkm.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>