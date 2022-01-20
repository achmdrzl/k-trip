<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAGAR BUDAYA</title>
    <link rel="stylesheet" href="stylecagarb.css">
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
            <h1>Cagar Budaya</h1>
        </div>

    </div>

    <!-- hero -->
    <div class="hero">
        <div class="jud">
            <h1>Cagar Budaya</h1>
        </div>
    </div>

    <!-- konten baris 1-->
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
        <div class="gbrbkl">
            <div class="bkl">
                <img src="../../img/kuburr.png">
            </div>
        </div>

        <div class="dl">
            <div class="dltx">
                <h1>Desa Liya</h1>
            </div>
            <div class="dltxp">
                <p>Liya Togo adalah salah satu desa yang terletak di Kecamatan Wangi-Wangi Selatan, Kabupaten Wakatobi, Provinsi Sulawesi Tenggara, Indonesia. Desa ini sebagian besar penduduknya bersuku Wakatobi. Di sini Benteng Liya Togo ditetapkan jadi
                    cagar budaya Indonesia.</p>
            </div>
        </div>

        <div class="boxbir1">
            <div class="txdl">
                <h1>Benteng Keraton Liya</h1>
                <p class="contdl">Benteng ini terletak di dataran tinggi Pulau Wangi-wangi, sehingga ketika berdiri dari atas benteng kita akan disuguhkan dengan pemandangan laut yang indah dan perkampungan masyarakat Liya Togo.</p>
            </div>
        </div>

        <div class="gbrkliya">
            <div class="ky">
                <img src="../../img/go.png">
            </div>
        </div>
    </div>

    <!-- konten baris 2-->
    <div class="kontenbar2">
        <div class="kontenbar2bkkl">
            <img src="../../img/lyngg.png">
        </div>
        <div class="maskot">
            <img src="../../img/maskot.png">
        </div>
    </div>

    <!-- konten baris 3-->
    <div class="kontenbar3">

        <div class="kottiang">
            <img src="../../img/paris.png">
        </div>

        <div class="boxbir2">
            <div class="boxbir2isi">
                <p>
                    Tujuan dibangun Mercusuar ini adalah terciptanya keselamatan pelayaran, karena telah banyak kapal karam di laut wangi-wangi menabrak karang maupun daratan. Pada saat itu terdapat Kristal sebagai sinar pantulan penunjuk arah navigasi kapal, namun telah
                    diambil oleh perhubungan laut Makasar dan sekarang diganti dengan cahaya petromax.
                </p>
            </div>
        </div>

        <div class="kottiang2">
            <div class="gbtiang2">
                <img src="../../img/wahaef.png">
            </div>
        </div>

        <div class="kotmercu">
            <img src="../../img/vanwaha.png">
        </div>

        <div class="boxdw">
            <div class="boxdwisi">
                <h1>Desa Waha</h1>
                <p>Waha adalah desa di kecamatan Wangi-Wangi, Kabupaten Wakatobi, Sulawesi Tenggara, Indonesia. Di desa ini terdapat mercusuar peninggalan Belanda.</p>
            </div>
        </div>

        <div class="boxtxmercu">
            <div class="boxtxmercuisi">
                <h1>
                    Mercusuar
                </h1>
                <p>
                    Mercusuar ini dibangun 1901 pada masa penjajahan Belanda. Bangunan masih asli dengan tekstur Belanda
                </p>
            </div>
        </div>
    </div>

    <!-- konten baris 3-->

    <div class="kontenbar4">

        <div class="boxgk">
            <div class="boxgkisi">
                <h1>Goa Kontamale</h1>
                <p>Sebuah goa mata air tawar yang terletak di Kelurahan Wanci, Kecamatan Wangi-Wangi. Goa yang konon dipercaya untuk mempermudah jodoh itu bernama Goa Kontalawe. Goa telaga ini cukup luas dan dalam. Terdapat kolam dengan airnyayang jernih.
                    Di langit-langit goa terdapat stalaktit</p>
            </div>
        </div>

        <div class="boxgoa">
            <img src="../../img/goahira.png">
        </div>

        <div class="boxgoa2">
            <img src="../../img/goaaaa.png">
        </div>

        <div class="txtbar4">
            <div class="txtbar4isi">
                <p>
                    Warga meyakini zaman dulu ada seorang pasangan kekasih yang sulit untuk menikah. Meski keduanya lama berpacaran, tapi salah satunya tak ingin menikah. Mereka berdua kemudian mendatangi goa tersebut untuk mandi. Tak lama setelah itu keduanya saling setuju
                    untuk menikah dan direstui oleh masing-masing keluarga mereka.
                </p>
            </div>
        </div>

    </div>

    <!-- konten baris 5-->

    <div class="kontenbar5">

        <div class="boxsw">
            <img src="../../img/pha.png">
        </div>

        <div class="boxsw2">
            <img src="../../img/batu.png">
        </div>

        <div class="boxbir3">
            <div class="boxbir3isi">
                <p>
                    Makam Syekh H. La Ode Abdul Rahman Sangia Yi Wandoka, Makam La Ode Tindoi Lakina Liya Makam La Ode Mbiu Lakina Lasina Lasalimu. merupakan cagar budaya yang menjadi warisan budaya sehingga generasi sekarang tidak lupa akan pendahulunya.
                </p>
            </div>
        </div>

        <div class="boxsw3">
            <img src="../../img/batttt.png">
        </div>

        <div class="txsw">
            <div class="txswisi">
                <h1>Baruga Sangia Yi Wandoka</h1>
                <p>merupakan tempat pertemuan berdiskusi segala urusan bernilai sosial yang tidak terpisah dari lembaga adat pemerintah, menjadi mitra untuk menjaga nilai-nilai tradisi, budaya yang ada di wakatobi
                </p>
            </div>
        </div>

    </div>

    <div class="boxgaris">
        <div class="garis1"></div>
    </div>

    <div class="boxkmj">
        <h1>Kamu Juga Mungkin Menyukai</h1>
    </div>

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
                <h1>Watu Mokuri Trip</h1>
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
                    <h1>4 Hari 3 Malam</h1>
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





</body>