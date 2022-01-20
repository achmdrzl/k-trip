<?php 
session_start();

$id = 1;
$id2 = 2;
$id3 = 3;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="stylehomepage.css">
    <link rel="stylesheet" href="stylelogin.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/loader.js"></script>
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
        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup cf">
            <h2>Daftar</h2>
            <div class="b"><img src="img/login/masskot.svg" alt=""></div>
            <div>
                <input type="text" id="login" value="" placeholder="Nama Pengguna*" autocomplete="off" required/> 
                <div class="a"><img src="img/login/user.svg" alt=""></div>
                <input type="text" id="login" value="" placeholder="Nama Lengkap" autocomplete="off" />
                <div class="a"><img src="img/login/nama.svg" alt=""></div>
                <input type="text" id="login" value="" placeholder="Email*" autocomplete="off" required/>
                <div class="a"><img src="img/login/email.svg" alt=""></div>
            </div>
            <div>
                <input type="password" id="password" value="" placeholder="Password*" required/>
                <div class="a"><img src="img/login/pass.svg" alt=""></div>
            </div>
            <div class="terms cf">
                <input type="checkbox" name="check" required>
                <p>Saya telah membaca serta menerima Syarat dan Kebijakan Privasi</p>
            </div>
            <!-- <input type="submit" value="Log In" /> -->
            <button type="submit" name="login">Daftar</button>
            <div class="conti">
                <p>atau lanjutkan dengan</p>
            </div>
            <div class="log cf">
                <div class="in">
                    <a href="#"><img src="img/login/fb.svg" alt=""></a> 
                    <a href="#"><img src="img/login/google.svg" alt=""></a>
                    <a href="#"><img src="img/login/twit.svg" alt=""></a>
                </div>
            </div>
            <div class="log2">
                <p>Sudah punya akun? <a href="#">Masuk</a></p>
            </div>     
            <a class="close" href="#close"></a>
        </div>

        <!-- popup form #2 -->

        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Login</h2>
            <div class="b"><img src="img/login/masskot.svg" alt=""></div>
            <form action="#" method="POST">
                <div>
                    <input type="text" id="login" name="username" value="" placeholder="Nama Pengguna/Email*" autocomplete="off"  required/> 
                    <div class="a"><img src="img/login/user.svg" alt=""></div>
                </div>
                <div>
                    <input type="password" name="password" id="password" value="" placeholder="Password*" autocomplete="off" required/>
                    <div class="a"><img src="img/login/pass.svg" alt=""></div>
                </div>
                <button type="submit" name="login" value="login">Login</button>
            </form>
            <div class="conti">
                <p>atau lanjutkan dengan</p>
            </div>
            <div class="log cf">
                <div class="in">
                    <a href="#"><img src="img/login/fb.svg" alt=""></a> 
                    <a href="#"><img src="img/login/google.svg" alt=""></a>
                    <a href="#"><img src="img/login/twit.svg" alt=""></a>
                </div>
            </div>
            <a class="close" href="#close"></a>
        </div>
        <?php
            if(isset($_POST['login'])){
                include 'koneksi.php';
                $username = $_POST['username'];
                $password = $_POST['password'];

                $cek_user = mysqli_query($db1, "SELECT * FROM user WHERE username = '$username' AND status = 'admin' ");
                $valid = mysqli_num_rows($cek_user);

                if($valid === 1){
                    $fetch_pass = mysqli_fetch_assoc($cek_user);
                    $cek_pass = $fetch_pass['password'];
                    if($cek_pass <> $password){
                        echo"<script>alert('Password Salah');</script>";
                    }else{
                        $_SESSION['username'] = $username;
                        $_SESSION['login'] = true;
                        echo "<script>document.location.href='pages/admin/validate_admin.php'</script>";
                    }
                }else{
                    echo "<script>document.location.href='index.php'</script>";
                }
            } 
            ?>
    <!-- navbar 1 -->
    <div class="nav cf">
        <div class="nav1">
            <div class="bar">
                <a href=""><img src="img/homepage/fb.svg" alt=""></a>
                <!-- <img src="img/fb.png" alt="Facebook"> -->
                <a href="https://www.instagram.com/kasuami.team/" target="_blank"><img src="img/homepage/ig.svg" alt=""></a>
                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank"><img src="img/homepage/g+.svg" alt=""></a>
                <!-- 				<img src="img/g+.png" alt="Google+">
				<img src="img/ig.png" alt="Instagram">  -->
                <div class="line">
                    <img src="img/homepage/line.png" alt="">
                </div>
                <p><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank">kasuamiteam@gmail.com</a></p>
                <div class="line2">
                    <img src="img/homepage/line.png" alt="">
                </div>
            </div>
        </div>
        <div class="nav2">
            <div class="bar2">
                <div class="line5">
                    <img src="img/homepage/line.png" alt="">
                </div>
                <p><select name="" id="">
				    <option value="">ID</option>
				    <option value="">ENG</option>
				   	</select>
                </p>
                <div class="line4">
                    <img src="img/homepage/line.png" alt="">
                </div>
                <p><a href="#login_form" id="login_pop">Login</a></p>
                    <!-- <a href="#login_form" id="login_pop"><button class="btn" onclick=""> Open modal</button></a> -->
                <div class="line3">
                    <img src="img/homepage/line.png" alt="">
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
                <li class="menu_item"><a href="index.php">BERANDA</a></li>
                <li class="menu_item"><a href="pages/user/destinasi.php">DESTINASI</a></li>
                <li class="menu_item"><a href="pages/user/kebudayaan.php">KEBUDAYAAN</a></li>
                <li class="menu_item"><a href="pages/user/blog.php">BLOGS</a></li>
                <li class="menu_item"><a href="#">INFORMASI</a>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="pages/user/about_us.php">TENTANG KAMI</a></li>
                        <br>
                        <li class="submenu-item"><a href="pages/user/faq.php">PERTANYAAN</a></li>
                        <br>
                        <li class="submenu-item"><a href="pages/user/contact.php">KONTAK</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="pages/user/galery.php">GALERI</a></li>
            </ul>
        </div>

        <div class="bar4 cf">
            <a href="#"><img src="img/homepage/basket.svg" alt=""></a>
            <div class="signup">
                <a href="#join_form" id="join_pop">
                    <p>Sign Up</p>
                </a>
            </div>
            <!-- <a href="#"><img src="img/signup.svg" alt=""></a> -->
        </div>
    </div>

    <!-- hero -->
    <div class="hero">
        <div class="jud">
            <h1>Yuk Jelajahi Desa Waha!</h1>
            <h4>Liburan Mudah dan Murah, Bersama Kami!</h4>
        </div>
    </div>

    <!-- main -->
    <div class="main cf">
        <div class="icon">
            <div class="a">
                <img src="img/homepage/a.svg" alt="">
                <p class="judul">25+ Pemandu Lokal</p>
                <br>
                <p class="text">Ada pemandu wisata yang siap memandu Anda berkeliling mengunjungi berbagai destinasi wisata.</p>
            </div>
            <div class="b">
                <img class="b" src="img/homepage/b.svg" alt="">
                <p class="judul1">Mudah Di Akses</p>
                <br>
                <p class="text1">Kemudahan dalam mengakses nya memudahkan anda untuk bisa berkunjung, tanpa perlu ribet.</p>
            </div>
            <div class="c">
                <img class="c" src="img/homepage/c.svg" alt="">
                <p class="judul2">Pengunjung adalah Prioritas</p>
                <br>
                <p class="text2">Kebahagiaan pengunjung prioritas kami.</p>
            </div>
            <div class="d">
                <img class="d" src="img/homepage/d.svg" alt="">
                <p class="judul3">Pesan Sekarang, Bayar Nanti</p>
                <br>
                <p class="text3">Bayar liburan gak pake pusing, Booking paket liburanmu bisa di Dp dlu pembayaran selanjutnya boleh di cicil.</p>
            </div>
        </div>
    </div>
    <!-- main section 1 -->
    <div class="main2 cf">
    <!-- floating -->
    <a href="pages/user/validate.php" class="float">
        <i class="fa fa-envelope my-float"></i>
            <div class="zoomm">
                    <div class="kotakk">
                        <img src="img/floating/float.svg" alt="">
                    </div>
            </div>
    </a>
            <div class="label-container">
                <div class="label-text">Validasi Pembayaran</div>
                <i class="fa fa-play label-arrow"></i>
            </div>
        <div class="paket">
            <div class="trip">
                <h1>Liburan Yuk!</h1>
                <div class="a">
                    <div class="zoom">
                        <div class="kotak">
                            <div class="rec cf">
                                <p>Rekomendasi</p>
                                <img src="img/homepage/love.svg" alt="">
                            </div>
                            <a href="pages/user/package.php?id=1"><img src="img/homepage/paket1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="loc cf">
                        <img src="img/homepage/loc.svg" alt="">
                        <p>Wakatobi, Sulawesi Tenggara</p>
                        <a href="pages/user/package.php?id=1">Wa Ndiu-Ndiu Trip</a>
                    </div>
                    <div class="rev cf">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star2.svg" alt="">
                        <p>4 Review</p>
                    </div>
                    <div class="cal cf">
                        <img src="img/homepage/cal.svg" alt="">
                        <p>Agt 2022 - Nov 2022</p>
                    </div>
                    <div class="time">
                        <img src="img/homepage/time.svg" alt="">
                        <p>2 Hari 3 Malam</p>
                    </div>
                    <div class="flash cf">
                        <img src="img/homepage/flash.svg" alt="">
                        <p>mulai dari</p>
                        <h1>Rp. 1.850.000,-</h1>
                    </div>
                </div>
                <div class="b">
                    <div class="zoom">
                        <div class="kotak">
                            <div class="rec cf">
                                <p>Rekomendasi</p>
                                <img src="img/homepage/love.svg" alt="">
                            </div>
                            <a href="pages/user/package.php?id=2"><img src="img/homepage/paket2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="loc cf">
                        <img src="img/homepage/loc.svg" alt="">
                        <p>Wakatobi, Sulawesi Tenggara</p>
                        <a href="pages/user/package.php?id=2">La Ndoke-Ndoke Trip</a>
                    </div>
                    <div class="rev cf">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star2.svg" alt="">
                        <p>4 Review</p>
                    </div>
                    <div class="cal cf">
                        <img src="img/homepage/cal.svg" alt="">
                        <p>Agt 2022 - Nov 202</p>
                    </div>
                    <div class="time">
                        <img src="img/homepage/time.svg" alt="">
                        <p>3 Hari 2 Malam</p>
                    </div>
                    <div class="flash cf">
                        <img src="img/homepage/flash.svg" alt="">
                        <p>mulai dari</p>
                        <h1>Rp. 3.500.000,-</h1>
                    </div>
                </div>
                <div class="c">
                    <div class="zoom">
                        <div class="kotak">
                            <div class="rec cf">
                                <p>Rekomendasi</p>
                                <img src="img/homepage/love.svg" alt="">
                            </div>
                            <a href="pages/user/package.php?id=3"><img src="img/homepage/paket3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="loc cf">
                        <img src="img/homepage/loc.svg" alt="">
                        <p>Wakatobi, Sulawesi Tenggara</p>
                        <a href="pages/user/package.php?id=3">Gua La Sikori Trip</a>
                    </div>
                    <div class="rev cf">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star.svg" alt="">
                        <img src="img/homepage/star2.svg" alt="">
                        <p>4 Review</p>
                    </div>
                    <div class="cal cf">
                        <img src="img/homepage/cal.svg" alt="">
                        <p>Agt 2022 - Nov 202</p>
                    </div>
                    <div class="time">
                        <img src="img/homepage/time.svg" alt="">
                        <p>3 Hari 4 Malam</p>
                    </div>
                    <div class="flash cf">
                        <img src="img/homepage/flash.svg" alt="">
                        <p>mulai dari</p>
                        <h1>Rp. 2.500.000,-</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main section 3 -->
    <div class="main3 cf">
        <div class="dest">
            <div class="wisata">
                <h1>Destinasi Rekomendasi Kami!</h1>
            </div>
            <div class="a">
                <div class="zoom2">
                    <div class="kotak2">
                        <div class="rec2 cf">
                            <a href="#">
                                <h1>Desa Waha</h1>
                            </a>
                            <p>6 Trips</p>
                        </div>
                        <a href="#"><img src="img/homepage/dest1.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="b">
                <div class="zoom3">
                    <div class="kotak3">
                        <div class="rec3 cf">
                            <a href="#">
                                <h1>Sombu Dive</h1>
                            </a>
                            <p>3 Trips</p>
                        </div>
                        <a href="#"><img src="img/homepage/dest2.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="c">
                <div class="zoom3">
                    <div class="kotak3">
                        <div class="rec4 cf">
                            <a href="#">
                                <h1>Cagar Budaya</h1>
                            </a>
                            <p>3 Trips</p>
                        </div>
                        <a href="#"><img src="img/homepage/dest3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main section 4 -->
    <div class="main4 cf">
        <div class="jajan">
            <div class="sec4">
                <h1>Pusat Oleh-oleh dan Kerajinan</h1>
            </div>
            <div class="a">
                <div class="zoom4">
                    <div class="kotak4">
                        <div class="rec4 cf">
                            <img src="img/homepage/love.svg" alt="">
                        </div>
                        <a href="#"><img src="img/homepage/jajan1.png" alt=""></a>
                    </div>
                </div>
                <div class="loc2 cf">
                    <img src="img/homepage/loc.svg" alt="">
                    <p>Wakatobi, Sulawesi Tenggara</p>
                    <a href="#">Kerajinan Tangan</a>
                </div>
                <div class="rev2 cf">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star2.svg" alt="">
                    <p>4 Review</p>
                </div>
                <div class="flash2 cf">
                    <img src="img/homepage/flash.svg" alt="">
                    <p>mulai dari</p>
                    <h1>Rp. 250.000,-</h1>
                </div>
                <div class="box">
                    <a href="#"><Button>Cek Sekarang!</Button></a>
                </div>
            </div>
            <div class="b">
                <div class="zoom4">
                    <div class="kotak4">
                        <div class="rec4 cf">
                            <img src="img/homepage/love.svg" alt="">
                        </div>
                        <a href="#"><img src="img/homepage/jajan2.png" alt=""></a>
                    </div>
                </div>
                <div class="loc2 cf">
                    <img src="img/homepage/loc.svg" alt="">
                    <p>Wakatobi, Sulawesi Tenggara</p>
                    <a href="#">Kain Tradisional</a>
                </div>
                <div class="rev2 cf">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star2.svg" alt="">
                    <p>4 Review</p>
                </div>
                <div class="flash2 cf">
                    <img src="img/homepage/flash.svg" alt="">
                    <p>mulai dari</p>
                    <h1>Rp. 250.000,-</h1>
                </div>
                <div class="box">
                    <a href="#"><Button>Cek Sekarang!</Button></a>
                </div>
            </div>
            <div class="c">
                <div class="zoom4">
                    <div class="kotak4">
                        <div class="rec4 cf">
                            <img src="img/homepage/love.svg" alt="">
                        </div>
                        <a href="#"><img src="img/homepage/jajan3.png" alt=""></a>
                    </div>
                </div>
                <div class="loc2 cf">
                    <img src="img/homepage/loc.svg" alt="">
                    <p>Wakatobi, Sulawesi Tenggara</p>
                    <a href="#">Makanan Tradisional</a>
                </div>
                <div class="rev2 cf">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star2.svg" alt="">
                    <p>4 Review</p>
                </div>
                <div class="flash2 cf">
                    <img src="img/homepage/flash.svg" alt="">
                    <p>mulai dari</p>
                    <h1>Rp. 250.000,-</h1>
                </div>
                <div class="box">
                    <a href="#"><Button>Cek Sekarang!</Button></a>
                </div>
            </div>
            <div class="d">
                <div class="zoom4">
                    <div class="kotak4">
                        <div class="rec4 cf">
                            <img src="img/homepage/love.svg" alt="">
                        </div>
                        <a href="#"><img src="img/homepage/jajan4.png" alt=""></a>
                    </div>
                </div>
                <div class="loc2 cf">
                    <img src="img/homepage/loc.svg" alt="">
                    <p>Wakatobi, Sulawesi Tenggara</p>
                    <a href="#">Pusat Outfit</a>
                </div>
                <div class="rev2 cf">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star.svg" alt="">
                    <img src="img/homepage/star2.svg" alt="">
                    <p>4 Review</p>
                </div>
                <div class="flash2 cf">
                    <img src="img/homepage/flash.svg" alt="">
                    <p>mulai dari</p>
                    <h1>Rp. 250.000,-</h1>
                </div>
                <div class="box">
                    <a href="#"><Button>Cek Sekarang!</Button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- promo section -->
    <div class="promo cf">
        <div class="iklan">
            <div class="iklan2">
                <a href="#">Mistery Trip!</a>
                <br>
                <p>Akan ada misteri trip di tiap tahunnya, misteri trip ini untuk kalian yang senang explore kebudayaan di indonesia khususnya Wakatobi.</p>
            </div>
            <img src="img/homepage/misteritrip.png" alt="">
            <div class="box2">
                <a href="#"><Button>Cek Sekarang!</Button></a>
            </div>
        </div>
    </div>

    <!-- testimoni section -->
    <div class="testi cf">
        <div class="head">
            <h1>Testimoni Pelanggan</h1>
        </div>
        <div class="slidershow middle">
            <div class="slides">
                <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">

                <div class="slide s1">
                    <div class="box3">
                        <div class="a">
                            <div class="user">
                                <img src="img/homepage/user.svg" alt="">
                                <p>Linda</p>
                                <div class="star">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                </div>
                            </div>
                            <div class="comma">
                                <img src="img/homepage/comma.svg" alt="">
                            </div>
                            <div class="komen">
                                <p>Wah ga nyangka sih bakal seseru itu, next time order lagi sih ga mengecewakan. Pokoknya recommended deh thank u kak!</p>
                            </div>
                        </div>
                        <div class="b">
                            <div class="user">
                                <img src="img/homepage/user.svg" alt="">
                                <p>Bahar</p>
                                <div class="star">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                </div>
                            </div>
                            <div class="comma">
                                <img src="img/homepage/comma.svg" alt="">
                            </div>
                            <div class="komen">
                                <p>Kata orang ada harga ada kualitas, tapi ga berlaku sih disini harga pertrip nya murah banget udah gitu banyak activitynya ga nyesel deh pesan disini hehehe thank you kak, nextt time order lagi:)</p>
                            </div>
                        </div>
                        <div class="c">
                            <div class="a">
                                <div class="user">
                                    <img src="img/homepage/user.svg" alt="">
                                    <p>La Ode</p>
                                    <div class="star">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="comma">
                                    <img src="img/homepage/comma.svg" alt="">
                                </div>
                                <div class="komen">
                                    <p>Seumur-umur baru sih nemu paket trip yang nyediain semua fasilitas sampe ke wisata budayanya, biasa nya cumn trip aja disini udh trip, wisata budaya, masih banyak deh. Highly recommended deh guys ga nyesel order disini:)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="box3">
                        <div class="a">
                            <div class="user">
                                <img src="img/homepage/user.svg" alt="">
                                <p>Linda</p>
                                <div class="star">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                </div>
                            </div>
                            <div class="comma">
                                <img src="img/homepage/comma.svg" alt="">
                            </div>
                            <div class="komen">
                                <p>Wah ga nyangka sih bakal seseru itu, next time order lagi sih ga mengecewakan. Pokoknya recommended deh thank u kak!</p>
                            </div>
                        </div>
                        <div class="b">
                            <div class="user">
                                <img src="img/homepage/user.svg" alt="">
                                <p>Bahar</p>
                                <div class="star">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                </div>
                            </div>
                            <div class="comma">
                                <img src="img/homepage/comma.svg" alt="">
                            </div>
                            <div class="komen">
                                <p>Kata orang ada harga ada kualitas, tapi ga berlaku sih disini harga pertrip nya murah banget udah gitu banyak activitynya ga nyesel deh pesan disini hehehe thank you kak, nextt time order lagi:)</p>
                            </div>
                        </div>
                        <div class="c">
                            <div class="a">
                                <div class="user">
                                    <img src="img/homepage/user.svg" alt="">
                                    <p>La Ode</p>
                                    <div class="star">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="comma">
                                    <img src="img/homepage/comma.svg" alt="">
                                </div>
                                <div class="komen">
                                    <p>Seumur-umur baru sih nemu paket trip yang nyediain semua fasilitas sampe ke wisata budayanya, biasa nya cumn trip aja disini udh trip, wisata budaya, masih banyak deh. Highly recommended deh guys ga nyesel order disini:)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="box3">
                        <div class="a">
                            <div class="user">
                                <img src="img/homepage/user.svg" alt="">
                                <p>Linda</p>
                                <div class="star">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                </div>
                            </div>
                            <div class="comma">
                                <img src="img/homepage/comma.svg" alt="">
                            </div>
                            <div class="komen">
                                <p>Wah ga nyangka sih bakal seseru itu, next time order lagi sih ga mengecewakan. Pokoknya recommended deh thank u kak!</p>
                            </div>
                        </div>
                        <div class="b">
                            <div class="user">
                                <img src="img/homepage/user.svg" alt="">
                                <p>Bahar</p>
                                <div class="star">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                    <img src="img/homepage/star.svg" alt="">
                                </div>
                            </div>
                            <div class="comma">
                                <img src="img/homepage/comma.svg" alt="">
                            </div>
                            <div class="komen">
                                <p>Kata orang ada harga ada kualitas, tapi ga berlaku sih disini harga pertrip nya murah banget udah gitu banyak activitynya ga nyesel deh pesan disini hehehe thank you kak, nextt time order lagi:)</p>
                            </div>
                        </div>
                        <div class="c">
                            <div class="a">
                                <div class="user">
                                    <img src="img/homepage/user.svg" alt="">
                                    <p>La Ode</p>
                                    <div class="star">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                        <img src="img/homepage/star.svg" alt="">
                                    </div>
                                </div>
                                <div class="comma">
                                    <img src="img/homepage/comma.svg" alt="">
                                </div>
                                <div class="komen">
                                    <p>Seumur-umur baru sih nemu paket trip yang nyediain semua fasilitas sampe ke wisata budayanya, biasa nya cumn trip aja disini udh trip, wisata budaya, masih banyak deh. Highly recommended deh guys ga nyesel order disini:)</p>
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

    <!-- footer -->

    <div class="footer cf">
        <hr width="100%" color="#E1E1E1">
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
                    <a href="#"><img src="img/homepage/fb2.svg" alt=""></a>
                    <a href="https://www.instagram.com/kasuami.team/" target="_blank"><img src="img/homepage/ig2.svg" alt=""></a>
                    <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com" target="_blank"><img src="img/homepage/g+2.svg" alt=""></a>
                </div>
            </div>
            <div class="b">
                <div class="ahead2">
                    <p>KASUAMI TEAM</p>
                    <hr class="2" width="135px" color="#C4C4C4">
                </div>
                <div class="foot">
                    <h1><a href="pages/user/about_us.php">Tentang Kami</a></h1>
                    <h1><a href="pages/user/blog.php">Blog</a></h1>
                    <h1><a href="pages/user/galery.php">Galeri</a></h1>
                    <h1><a href="pages/user/kebudayaan.php">Kebudayaan</a></h1>
                    <h1><a href="pages/user/destinasi.php">Destinasi</a></h1>
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
        <hr width="100%" color="#E1E1E1">
        <div class="subfooter">
            <div class="copy">
                <p>Copyright © 2021 by <a href="">KASUAMI.TEAM</a></p>
            </div>
            <div class="sup">
                <p>Support by : </p>
                <img src="img/homepage/kasuamilogo.svg" alt="">
                <img src="img/homepage/ristek.svg" alt="">
            </div>
            <div class="kbkm">
                <img src="img/homepage/kbkm.svg" alt="">
            </div>
        </div>
    </div>
        <!-- <script>
            $(document).ready(function(){
            $(".preloader").fadeOut();
            })
        </script> -->
        <!-- <script>
            // set delay 10s
            var delay = 1000;
            
            $(window).load(function() {
                setTimeout(function(){
                    $("#loading").hide();
                    $(".loader").hide();
                },delay);
            });
        </script> -->
</body>

</html>