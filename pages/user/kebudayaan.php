<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEBUDAYAAN</title>
    <link rel="stylesheet" href="stylekebudayaan.css">
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
                <a href="">
                    <p>Sign Up</p>
                </a>
            </div>
            <!-- <a href="#"><img src="img/signup.svg" alt=""></a> -->
        </div>
    </div>


    <!-- hero -->
    <div class="hero">
        <div class="kotjud1">
            <h1>DESA WAHA (WAHA TOURISM COMMUNITY)</h1>
        </div>

        <div class="kotjud2">
            <h1>ETNIS</h1>
            <h1>SENI</h1>
            <h1>DARI</h1>
            <h1>WAKATOBI</h1>
        </div>

        <div class="kotjud3">
            <h1>Cintai, Lestarikan Budaya & Produk Lokal</h1>
        </div>

        <div class="kotjud4">
            <h1>Lihat lebih banyak</h1>
        </div>

    </div>

    <!-- kontenbar1 -->
    <div class="kotpil">
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
        <a href="">
            <div class="ritus">
                <a href="ritus.php"><img src="../../img/swings 2.png"></a>
            </div>
        </a>
        <a href="">
            <div class="cb">
                <a href="cagarbudaya.php"><img src="../../img/museum 1.png"></a>
            </div>
        </a>
        <a href="">
            <div class="mt">
                <a href="kuliner.php"><img src="../../img/cuisine 1.png"></a>
            </div>
        </a>
        <a href="">
            <div class="bhs">
                <a href="bahasa.php"><img src="../../img/fantasy 1.png"></a>
            </div>
        </a>
        <div class="kotrit">
            <h1>Ritus</h1>
        </div>
        <div class="kotcb">
            <h1>Cagar Budaya</h1>
        </div>
        <div class="kotmt">
            <h1>Makanan</h1>
            <h1>Tradisional</h1>
        </div>
        <div class="kotbhs">
            <h1>Bahasa</h1>
        </div>
        <div class="garis"></div>
    </div>

    <!-- kontenbar2 -->

    <div class="kot">

        <div class="sejarah">
            <a href="">
                <div class="brr2">
                    <img src="../../img/men.png">
                </div>
                <div class="kotgar">
                </div>
                <div class="kotsj">
                    <h1>Sejarah</h1>
                </div>
            </a>
        </div>

        <div class="wisata">
            <a href="">
                <div class="brr2">
                    <img src="../../img/wis.png">
                </div>
                <div class="kotgar"></div>
                <div class="kotws">
                    <h1>Wisata</h1>
                </div>
                <div class="kotws2">
                    <p>Nikmati pemandangan bawah laut wakatobi yang indah</p>
                </div>
            </a>
        </div>

        <div class="events">
            <a href="">
                <div class="brr2">
                    <img src="../../img/ev.png">
                </div>
                <div class="kotgar"></div>
                <div class="kotev">
                    <h1>Events</h1>
                </div>
            </a>
        </div>

        <div class="kuliner">
            <a href="">
                <div class="brr2">
                    <img src="../../img/kul.png">
                </div>
                <div class="kotgar"></div>
                <div class="kotkl">
                    <h1>Kuliner</h1>
                </div>
            </a>
        </div>

        <div class="maskot">
            <img src="../../img/mamas.png">
        </div>

    </div>

    <!-- kontenbar3 -->
    <div class="koth">
        <h1>Yuk Kenali Desa Waha!</h1>
    </div>

    <div class="koth2">
        <p>adalah sebuah desa yang kaya akan keindahan wisata bawah lautnya yang masih sangat terjaga serta beragam adat istiadat yang menarik.</p>
    </div>

    <!-- kontenbar4 -->
    <div class="konten4">
        <div class="kotbr1">
            <div class="gbrr">
                <img src="../../img/waww.png">
            </div>
            <div class="vid">
                <a href="">
                    <img src="../../img/vid.png">
                </a>
            </div>
            <div class="tulis1">
                <h1>Wakatobi Wave (Wonderful Festival and Expo) 2015</h1>
            </div>
        </div>

        <div class="kotbr2">
            <div class="brr2">
                <img src="../../img/ak.png">
            </div>
            <div class="tulis2">
                <h1>Pergelaran adat kabuenga di wakatobi</h1>
            </div>
        </div>

        <div class="kotbr3">
            <div class="brr2">
                <img src="../../img/liyo.png">
            </div>
            <div class="tulis4">
                <h1>Benteng keraton liya</h1>
            </div>
        </div>

        <div class="kotbr4">
            <div class="brr2">
                <img src="../../img/mandi.png">
            </div>
            <div class="tulis3">
                <h1>Telaga jodoh</h1>
            </div>
        </div>

        <div class="kotbr5">
            <div class="brr2">
                <img src="../../img/dug.png">
            </div>
            <div class="tulis5">
                <h1>Sombu Dive Wakatobi</h1>
            </div>
        </div>

    </div>

    <!-- kontenbar5 -->
    <div class="konbr5">
        <h1>Kuliner Terfavorit</h1>
    </div>
    <div class="kon">
        <h1>Yuk cobain kuliner-kuliner ini, dijamin enak lho!</h1>
    </div>

    <!-- kontenbar6 -->
    <div class="kon6">

        <div class="kotkur">
            <div class="brr2">
                <img src="../../img/kure.png">
            </div>
            <div class="kotstar">
                <img src="../../img/binbar.png">
            </div>
            <div class="kurtul">
                <h1>Kukure</h1>
            </div>
        </div>

        <div class="kotpar">
            <div class="brr2">
                <img src="../../img/pare.png">
            </div>
            <div class="kotstar">
                <img src="../../img/binbar.png">
            </div>
            <div class="kurpar">
                <h1>Parende</h1>
            </div>
        </div>

        <div class="kotkam">
            <div class="brr2">
                <img src="../../img/kalu.png">
            </div>
            <div class="kotstar1">
                <img src="../../img/binbar.png">
            </div>
            <div class="kurkam">
                <h1>Kambalu</h1>
            </div>
        </div>

        <div class="kotlul">
            <div class="brr2">
                <img src="../../img/lulu.png">
            </div>
            <div class="kotstar1">
                <img src="../../img/binbar.png">
            </div>
            <div class="kurlul">
                <h1>Luluta</h1>
            </div>
        </div>

        <div class="kotkas">
            <div class="brr2">
                <img src="../../img/kas.png">
            </div>
            <div class="kotstar1">
                <img src="../../img/binbar.png">
            </div>
            <div class="kurkas">
                <h1>Kasuami</h1>
            </div>
        </div>
    </div>

    <!-- kontenbar7 -->
    <div class="bar7">
        <h1>Yuk Telusuri Kawan Bersejarah di Desa Waha!</h1>
    </div>

    <div class="baris">
        <h1>Ini lho beberapa tempat bersejarah yang ada di desa waha dan sekitar nya, yuk simak!</h1>
    </div>

    <!-- kontenbar8 -->
    <div class="bar8">

        <div class="kotbl">
            <div class="brr2">
                <img src="../../img/liyab (2).png">
            </div>
            <div class="bltul">
                <h1>Benteng Keraton Liya</h1>
            </div>
        </div>

        <div class="kottel">
            <div class="brr2">
                <img src="../../img/tgjod.png">
            </div>
            <div class="bltul">
                <h1>Goa Kontamale</h1>
            </div>
        </div>

        <div class="kotmena">
            <div class="brr2">
                <img src="../../img/cuab.png">
            </div>
            <div class="bltul">
                <h1>Menara Mercusuar</h1>
            </div>
        </div>
    </div>

    <div class="gar"></div>

    <!-- kontenbar9 -->
    <div class="bar9">
        <h1>Kamu juga mungkin Menyukai</h1>
    </div>

    <!-- kontenbar10 -->
    <div class="bar10">

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
                <img src="../../img/Vector.png">
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
                <img src="../../img/Vector.png">
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
            <a href="package.php?id=3"><h1>Gua La Sikori Trip</h1></a>
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
                <img src="../../img/Vector.png">
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
            <a href="package.php?id=4"><h1>Watu Mokuri Trip</h1></a>
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
                <img src="../../img/Vector.png">
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