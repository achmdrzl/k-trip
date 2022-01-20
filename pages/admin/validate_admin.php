<?php 
    session_start();
    include '../../koneksi.php';
    if(!isset ($_SESSION['login']) ){
        header('location: ../../index.php');
        exit;
    }
    $admin = $_SESSION['username'];
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Validate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylevalidate_admin.css">
        <link rel="stylesheet" href="stylelogin.css">

    </head>
    <body>
    <!-- popup form #1 -->
    <a href="#x" class="overlay" id="join_form"></a>
    <div class="popup cf">
        <h2>Daftar Admin</h2>
        <div class="b"><img src="../../img/login/masskot.svg" alt=""></div>
        <div>
            <form action="new_admin.php" method="post" >
            <input type="text" id="login" value="" placeholder="Nama Pengguna*" name="username"  required/> 
            <div class="a"><img src="../../img/login/user.svg" alt=""></div>
            <input type="text" id="login" value="" placeholder="Nama Lengkap" name="nama"/>
            <div class="a"><img src="../../img/login/nama.svg" alt=""></div>
            <input type="text" id="login" value="" placeholder="Email*" name="email" required/>
            <div class="a"><img src="../../img/login/email.svg" alt=""></div>
        </div>
        <div>
            <input type="password" id="password" value="" placeholder="Password*" name="password" required/>
            <div class="a"><img src="../../img/login/pass.svg" alt=""></div>
        </div>
        <div class="terms cf">
            <input type="checkbox" name="check" required>
            <p>Saya telah membaca serta menerima Syarat dan Kebijakan Privasi</p>
        </div>
        <!-- <input type="submit" value="Log In" /> -->
        <button type="submit" name="login" name="daftar">Daftar</button>
        <a class="close" href="#close"></a>
        </form>
    </div>

    <div class="fixed">
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
                    <p>Howdy, <?php echo $admin ?></p>
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
                <li class="menu_item"><a href="../user/destinasi.php">DESTINASI</a></li>
                <li class="menu_item"><a href="../user/kebudayaan.php">KEBUDAYAAN</a></li>
                <li class="menu_item"><a href="blog.php">BLOGS</a></li>
                <li class="menu_item"><a href="#">INFORMASI</a>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="../user/about_us.php">TENTANG KAMI</a></li>
                        <br>
                        <li class="submenu-item"><a href="../user/faq.php">PERTANYAAN</a></li>
                        <br>
                        <li class="submenu-item"><a href="../user/contact.php">KONTAK</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="../user/galery.php">GALERI</a></li>
            </ul>
        </div>

            <div class="bar4 cf">
                <a href="#join_form" id="join_pop"><img src="../../img/admin/signup.svg" alt=""></a>
                <div class="signup">
                    <a href="logout.php" onclick="return confirm('Yakin ingin Log Out?')"><p>Log Out</p></a>
                </div>
                <!-- <a href="#"><img src="img/signup.svg" alt=""></a> -->
            </div>
        </div>
    </div>
        <div class="navjud cf">
            <img src="../../img/validate/maskot.svg" alt="">
            <h1>Validasi Pembayaran</h1>
        </div>
        <!-- <hr width="1440px" color="#E1E1E1"> -->
        <!-- navigation list -->
        <div class="list cf">
            <div class="beranda">
                <h1> </h1>
                <!-- <hr width="10px" color="#C5C5C5"> -->
            </div>
            <div class="desa">
                <h1>Validasi Pembayaran</h1>
                <!-- <hr width="10px" color="#C5C5C5">	 -->
            </div>
            <p></p>
        </div>

        <!-- main section -->
        <div class="cont">
            <div class="main">
            <div class="jud">
                <h1>Validasi Yuk Min!</h1>
            </div>
            <div class="space"></div>
            <div class="table">
                <div class="halo cf">
                    <p>Halo<p>.</p><h1><?php echo $admin?></h1>, Silahakan Lakukan Validasi Pembayaran Konsumen yahh! </p>
                </div>
                <table cellspacing>
                    <thead>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>Kode Booking</th>
                        <th>Email</th>
                        <th>Jumlah Transfer</th>
                        <th>Jumlah Bayar</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM transaksi where status = 'waiting'";
                        $data = mysqli_query($db1,$sql);
                        foreach ($data as $db){
                            $id = $db["id"];
                            $nama = $db["nama"];
                            $nope = $db["nohp"];
                            $paycode = $db["paycode"];
                            $email = $db["email"];
                            $pay = $db["last_pay"];
                            $total = $db["biaya"];
                            $bukti = $db["bukti_pemb"];
                            $path = '../../img/bukti/'.$bukti;
                            $tgl = $db["tgl_pay"];

                            echo "<tr>";
                            echo "<td>$nama</td>";
                            echo "<td>$nope</td>";
                            echo "<td>$paycode</td>";
                            echo "<td>$email</td>";
                            echo "<td> Rp.".strval(number_format($pay,0,"",".")).",-"."</td>";
                            echo "<td> Rp.".strval(number_format($total,0,"",".")).",-"."</td>";
                            echo "<td>".$tgl."</td>";
                            echo "<td>";
                                echo "<a href='reject.php?id=$id'><img src='../../img/admin/cancel.svg' alt=''></a>";
                                echo "<a href='../../approve1.php?admin=$admin&id=$id&paycode=$paycode'><img src='../../img/admin/accept.svg' alt=''></a>";
                                echo "<a href='$path' download onclick='../../cetak_bill1.php?paycode=$paycode'><img src='../../img/admin/download.svg' alt=''></a>";
                            echo "</td>";
                        echo "</tr>";        
                        }
                    ?>
                        <!-- <tr>
                            <td>Suritno</td>
                            <td>081242323852</td>
                            <td>KTRIP6673</td>
                            <td>suritno@gmail.com</td>
                            <td>Rp.500.000</td>
                            <td>Rp.9.500.000</td>
                            <td>
                                <a href="#"><img src="img/admin/cancel.svg" alt=""></a>
                                <a href="#"><img src="img/admin/accept.svg" alt=""></a>
                                <a href="#"><img src="img/admin/download.svg" alt=""></a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <!-- main section -->
        <div class="cont">
            <div class="main">
            <div class="jud">
                <h1>Riwayat Validasi</h1>
            </div>
            <div class="space"></div>
            <div class="table">
                <div class="space2"></div>
                <div class="cari">
                    <form method="post" action="validate_admin.php">
                        <label>Mau Cari apa Min ?</label>
                        <?php 
                            $cari ="";
                            if(isset($_POST['cari1'])) {
                                $cari = $_POST['cari'];
                            }
                        ?>
                        <input type="text" name="cari" autocomplete="off" value="<?php echo $cari; ?>">
                        <!-- <input type="submit" value="Cari"> -->
                        <button type="submit" name="cari1">Cari!</button>
                    </form>
                </div>
                <table cellspacing>
                    <thead>
                        <th>Kode Booking</th>
                        <th>Jumlah Transfer</th>
                        <th>Total Yang Harus di Bayar</th>
                        <th>Status</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Admin Validated</th>
                    </thead>
                    <tbody>
                    <?php 
                        if(isset($_POST['cari1'])){
                            $cari = $_POST['cari'];
                            $sql = "SELECT * FROM history WHERE paycode like '%".$cari."%' or status like 
                            '%".$cari."%' or validated like '%".$cari."%' ";	
                        }else{
                            $sql = "SELECT * FROM history";
                        }
                        $data = mysqli_query($db1, $sql);
                        while($db = mysqli_fetch_array($data)){
                            $id = $db["id"];
                            $paycode = $db["paycode"];
                            $jml_tf = $db["jumlah_transfer"];
                            $total = $db["total"];
                            $status = $db["status"];
                            $validated = $db["validated"];
                            $tgl = $db["tgl_pemb"];

                    ?>
                    <tr>
                        <td><?php echo $paycode ?></td>
                        <td><?php echo "Rp. ".strval(number_format($jml_tf,0,"",".")).",-" ?></td>
                        <td><?php echo "<b>Rp. ".strval(number_format($total,0,"",".")).",-</b>" ?></td>
                        <td><?php echo $status ?></td>
                        <td><?php echo $tgl ?></td>
                        <td><?php echo $validated ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
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
        </div>



        <script type="text/javascript"></script>
    </body>
</html>