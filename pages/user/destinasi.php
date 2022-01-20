
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>DESTINASI</title>
    <link rel="stylesheet" href="styledestinasi.css">
    

</head>

<body>
    <!-- navbar 1 -->
    <div class="nav cf">
        <div class="nav1">
            <div class="bar">
                <a href=""><img src="../../img/homepage/fb.svg" alt=""></a>
                <!-- <img src="img/fb.png" alt="Facebook"> -->
                <a href="https://www.instagram.com/kasuami.team/"><img src="../../img/homepage/ig.svg" alt=""></a>
                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com"><img src="../../img/homepage/g+.svg" alt=""></a>
                <!-- 				<img src="img/g+.png" alt="Google+">
				<img src="img/ig.png" alt="Instagram">  -->
                <div class="line">
                    <img src="../../img/homepage/line.png" alt="">
                </div>
                    <p><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com">kasuamiteam@gmail.com</a></p>
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

    <div class="tag"></div>
    <div class="judat">
        <h1>DESTINASI</h1>
        <div class="judatgar"></div>
        <div class="judat1">
            <h1>Destinasi Rekomendasi Kami</h1>
        </div>
    </div>

    <!-- hero -->
    <div class="hero">
        <div class="jud">
            <h1>Di K-TRIP Ada pilihan Destinasi apa aja sih?</h1>
        </div>
        <div class="mas">
            <img src="../../img/maskot.png" alt="">
        </div>
    </div>

    <!-- cb -->
    
    <!-- baris 1 -->
    <div class="baris1">
        <div class="kot1">
            <div class="bxp">
            </div>

            <div class="renc cf">
                <h1>Urut Berdasarkan</h1>
                <div class="border">
                    <div class="day1">
                        <details class="renc2">
                       
                        <summary>Urutan Harga</summary>
        
                            <div class="sum-cont">
                                
                                <div class="slidecontainer">
                                    <input type="range" min="100000" max="10000000" value="50000" class="slider" id="myRange">
                                    <p>Price: <span id="demo"></span></p>
                                  </div>
                                  
                                  <script>
                                  var slider = document.getElementById("myRange");
                                  var output = document.getElementById("demo");
                                  output.innerHTML = slider.value;
                                  
                                  slider.oninput = function() {
                                    output.innerHTML = this.value;
                                  }
                                  </script>
                                  
                                
  
  
                                <!-- <div class="a">
                                    
                                    <!-- <img src="../../img/package/menara_suar.png" alt="">
                                    <p>Mengunjungi Mercusuar</p> -->
                                <!-- </div>
                                <div class="b"> -->
                                    
                                    <!-- <img src="../../img/package/a2.png" alt="">
                                    <p>Mengunjungi Benteng Keraton Lia</p> -->
                                <!-- </div>
                                <div class="c"> -->
            
                                <!-- </div> -->
                            </div>
                        </details>
                    </div>
                </div>
                <!-- <hr width="815px" color="white"> -->
                <div class="border">
                    <div class="day2">
                        <details class="renc2">
        
                        <summary>Skor Ulasan</summary>
                            <div class="sum-cont">
                                <div class="blll">
                                    <div class="skor1">
                                        <div class="rating1">
                                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                                        </div>
                                    </div>

                                    <div class="skor1">
                                        <div class="rating2">
                                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                                        </div>
                                    </div>

                                    <div class="skor1">
                                        <div class="rating3">
                                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                                        </div>
                                    </div>

                                    <div class="skor1">
                                        <div class="rating4">
                                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                                        </div>
                                    </div>

                                    <div class="skor1">
                                        <div class="rating5">
                                            <input type="radio" name="star" id="star1"><label for="star1"></label>
                                            <input type="radio" name="star" id="star2"><label for="star2"></label>
                                            <input type="radio" name="star" id="star3"><label for="star3"></label>
                                            <input type="radio" name="star" id="star4"><label for="star4"></label>
                                            <input type="radio" name="star" id="star5"><label for="star5"></label>
                                        </div>
                                    </div>
                
                                </div>
                            </div>
                        </details>
                    </div>
                </div>

                <div class="border">
                    <div class="day3">
                        <details class="renc2">
        
                        <summary>Durasi</summary>
                            <div class="sum-cont">
                                <div class="sumi">
                                <div class="durasi">
                                    <div class="durasi1">
                                        <label for="3hari">
                                            <input id="3hari" name="3hari" type="checkbox"> < 3 hari
                                        </label>
                                    </div>
                                    <div class="durasi2">
                                        <label for="7hari">
                                            <input id="7hari" name="7hari" type="checkbox"> < 7 hari
                                        </label>
                                    </div>
                                    <div class="durasi3">
                                        <label for="14hari">
                                            <input id="14hari" name="14hari" type="checkbox"> < 14 hari
                                        </label>
                                    </div>
                                    <div class="durasi4">
                                        <label for="21hari">
                                            <input id="21hari" name="21hari" type="checkbox"> < 21 hari
                                        </label>
                                    </div>
                                    <div class="durasi5">
                                        <label for="30hari">
                                            <input id="30hari" name="30hari" type="checkbox"> < 30 hari
                                        </label>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </details>
                    </div>
                </div>

                <div class="border">
                    <div class="day3">
                        <details class="renc2">
        
                        <summary>Bahasa</summary>
                            <div class="sum-cont">
                                <div class="bhs1">
                                    <label for="Indonesia">
                                        <input type="checkbox"> < Indonesia
                                    </label>
                                </div>
                                <div class="bhs2">
                                    <label for="English">
                                        <input type="checkbox"> < English
                                    </label>
                                </div>
                                
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>

        <div class="kot2">
            <div class="judpa">
                <h1>4 Paket Trip Tersedia + 1 Misteri Trip</h1>
            </div>
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
                <a href="package.php?id=2"><h1>La Ndoke-Ndoke</h1></a>
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
                    <h1>Rp. 2.500.000,-</h1>
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

            <div class="mispaket">
                <div class="ww">
                    <img src="../../img/abs.png" alt="">
                </div>
                <div class="bw1">
                    <h1>Mysteri Trip</h1>
                </div>
                <div class="bw2">
                    <h1>Coming Soon</h1>
                </div>
                <a href="">
                    <div class="ps">
                        <h1>Selengkapnya</h1>
                    </div>
                </a>
            </div>

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
                    <h1>+62 1234 5678 910</h1>
                </div>
                <div class="email">
                    <p>Email Kami</p>
                    <h1><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com">kasuami.team@gmail.com</a></h1>
                </div>
                <div class="ikuti">
                    <p>Ikuti Kami</p>
                    <a href="#"><img src="../../img/fb2.png" alt=""></a>
                    <a href="#"><img src="../../img/ig2.png" alt=""></a>
                    <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=kasuami.team@gmail.com"><img src="../../img/g+2.png" alt=""></a>
                </div>
            </div>
            <div class="b">
                <div class="ahead2">
                    <p>KASUAMI TEAM</p>
                    <hr class="2" width="135px" color="#C4C4C4">
                </div>
                <div class="foot">
                    <h1><a href="about_us.php">Tentang Kami</a></h1>
                    <h1><a href="blog.php">Blog</a></h1>
                    <h1><a href="galery.php">Galeri</a></h1>
                    <h1><a href="kebudayaan.php">Kebudayaan</a></h1>
                    <h1><a href="des">Destinasi</a></h1>
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

</html>