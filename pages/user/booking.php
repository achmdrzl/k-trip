<?php
	include "../../koneksi.php";
	$paycode = $_GET["paycode"];
	$sql = "SELECT * FROM passenger WHERE paycode = '$paycode'";
	$data = mysqli_query($db1, $sql); 
	// echo var_dump($data);
	foreach ($data as $db){
		$id = $db["id_paket"];
		$pay_parent = $db["p_parent"];
		$pay_child = $db["p_child"];
		$pay_infant = $db["p_infant"];
	}
	$sql = "SELECT * FROM assets WHERE id = '$id'";
	$data = mysqli_query($db1, $sql);
	foreach ($data as $db){
		$nama_trip = $db["paket"];
		$price = $db["price"];
		$tgl = $db["tgl"];
		$bg = $db["gbr"];
		$durasi = $db["durasi"];
	}

	echo var_dump($id);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	<link rel="stylesheet" href="stylebooking.css">
	<link rel="stylesheet" href="styleterms.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#provinsi").change(function(){
                var provinsi = $("#provinsi").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kota.php",
                    data: {provinsi: provinsi},
                    cache: false,
                    success: function(msg){
                        $("#kota").html(msg);
                    }
                });
            });
        });
    </script>
</head>
<body>
<!-- navbar 1 -->
        <!-- popup Terms & Condition -->
        <a href="#x" class="overlay" id="privacy"></a>
        <div class="popup">
            <div class="canvas">
                <div class="scroll">
                    <h1>Syarat dan Ketentuan</h1>
                    <h2>Selamat datang di kasuami trip!</h2>
                    <p>Syarat dan ketentuan berikut menjelaskan peraturan dan ketentuan penggunaan Website Kasuami dengan alamat kasuamitrip.com.
                       Dengan mengakses website ini, kami menganggap Anda telah menyetujui syarat dan ketentuan ini. Jangan lanjutkan penggunaan kasuami 
                       trip jika Anda menolak untuk menyetujui semua syarat dan ketentuan yang tercantum di halaman ini.
                    </p>
                    <h3>Cookie:</h3>
                    <p>Website ini menggunakan cookie untuk mempersonalisasi pengalaman online Anda. Dengan mengakses kasuami trip, Anda menyetujui penggunaan cookie yang diperlukan.  
                    </p>
                    <p>Cookie merupakan file teks yang ditempatkan pada hard disk Anda oleh server halaman web. Cookie tidak dapat digunakan untuk menjalankan program atau mengirimkan 
                        virus ke komputer Anda. Cookie yang diberikan telah disesuaikan untuk Anda dan hanya dapat dibaca oleh web server pada domain yang mengirimkan cookie tersebut 
                        kepada Anda.
                    </p>
                    <p>
                    Kami dapat menggunakan cookie untuk mengumpulkan, menyimpan, dan melacak informasi untuk keperluan statistik dan pemasaran untuk mengoperasikan website kami. 
                    Ada beberapa Cookie wajib yang diperlukan untuk pengoperasian website kami. Cookie ini tidak memerlukan persetujuan Anda karena akan selalu aktif. Perlu diketahui bahwa dengan 
                    menyetujui Cookie wajib, Anda juga menyetujui Cookie pihak ketiga, yang mungkin digunakan melalui layanan yang disediakan oleh pihak ketiga jika Anda menggunakan layanan tersebut di website kami, misalnya, 
                    jendela tampilan video yang disediakan oleh pihak ketiga dan terintegrasi dengan website kami.
                    </p>
                    <h3>Lisensi:</h3>
                    <p>
                    Kecuali dinyatakan lain, Kasuami dan/atau pemberi lisensinya memiliki hak kekayaan intelektual atas semua materi di kasuami trip. Semua hak kekayaan 
                    intelektual dilindungi undang-undang. Anda dapat mengaksesnya 
                    dari kasuami trip untuk penggunaan pribadi Anda sendiri dengan batasan yang diatur dalam syarat dan ketentuan ini.
                    </p>
                    <p>Anda dilarang untuk:</p>
                    <ol>
                        <li>Menyalin atau menerbitkan ulang materi dari kasuami trip</li>
                        <li>Menjual, menyewakan, atau mensublisensikan materi dari kasuami trip</li>
                        <li>Memproduksi ulang, menggandakan, atau menyalin materi dari kasuami trip</li>
                        <li>Mendistribusikan ulang konten dari kasuami trip</li>
                    </ol>
                    <p>Perjanjian ini akan mulai berlaku pada tanggal perjanjian ini.</p>
                    <p>
                    Beberapa bagian website ini menawarkan kesempatan bagi pengguna untuk memposting serta bertukar pendapat dan informasi 
                    di area website tertentu. Kasuami tidak akan memfilter, mengedit, memublikasikan, atau meninjau Komentar di hadapan pengguna 
                    di website. Komentar tidak mencerminkan pandangan dan pendapat Kasuami, agennya, dan/atau afiliasinya. Komentar mencerminkan 
                    pandangan dan pendapat individu yang memposting pandangan dan pendapatnya. Selama diizinkan oleh undang-undang yang berlaku, 
                    Kasuami tidak akan bertanggung jawab atas Komentar atau kewajiban, kerugian, atau pengeluaran yang disebabkan dan/atau ditanggung 
                    sebagai akibat dari penggunaan dan/atau penempatan dan/atau penayangan Komentar di website ini.
                    </p>
                    <p>
                    Kasuami berhak memantau semua Komentar dan menghapus Komentar apa pun yang dianggap tidak pantas, menyinggung, atau menyebabkan 
                    pelanggaran terhadap Syarat dan Ketentuan ini.
                    </p>
                    <p>Anda menjamin dan menyatakan bahwa:</p>
                    <ol>
                        <li>Anda berhak memposting Komentar di website kami serta memiliki semua lisensi dan persetujuan yang diperlukan untuk melakukannya;</li>
                        <li>Komentar tidak melanggar hak kekayaan intelektual apa pun, termasuk tetapi tidak terbatas pada, hak cipta, paten, atau merek dagang pihak ketiga mana pun;</li>
                        <li>Komentar tidak mengandung materi yang bersifat memfitnah, mencemarkan nama baik, menyinggung, tidak senonoh, atau melanggar hukum, yang merupakan pelanggaran privasi.</li>
                        <li>Komentar tidak akan digunakan untuk membujuk atau mempromosikan bisnis atau kebiasaan atau memperkenalkan kegiatan komersial atau kegiatan yang melanggar hukum.</li>
                    </ol>
                    <p>Dengan ini Anda memberikan lisensi non-eksklusif kepada Kasuami untuk menggunakan, memproduksi ulang, mengedit, dan mengizinkan orang lain untuk menggunakan, memproduksi ulang, dan mengedit Komentar Anda dalam segala bentuk, format, atau media.</p>
                    <h3>Membuat hyperlink yang mengarah ke Konten kami:</h3>
                    <p>Organisasi berikut dapat membuat tautan menuju Website kami tanpa persetujuan tertulis sebelumnya:</p>
                    <ol>
                        <li>Lembaga pemerintah;</li>
                        <li>Mesin pencari;</li>
                        <li>Kantor berita;</li>
                        <li>Distributor direktori online dapat membuat tautan menuju Website kami dengan cara yang sama seperti membuat tautan ke Website bisnis terdaftar lainnya; dan</li>
                        <li>Bisnis Terakreditasi di Seluruh Sistem kecuali meminta organisasi nirlaba, pusat perbelanjaan amal, dan grup penggalangan dana amal yang mungkin tidak membuat hyperlink menuju Website kami.</li>
                    </ol>
                    <p>Organisasi-organisasi ini dapat menautkan ke halaman beranda, ke publikasi, atau ke informasi Website kami lainnya selama tautan tersebut: (a) tidak menipu dengan cara apa pun; (b) tidak menyiratkan secara keliru adanya 
                        hubungan sponsor, rekomendasi, atau persetujuan dari pihak yang menautkan beserta produk dan/atau layanannya; serta (c) sesuai dengan konteks website pihak yang menautkan.
                    </p>
                    <p>Kami dapat mempertimbangkan dan menyetujui permintaan penautan lain dari jenis organisasi berikut:</p>
                    <ol>
                        <li>Sumber informasi bisnis dan/atau konsumen yang sudah umum dikenal;</li>
                        <li>Website komunitas dot.com;</li>
                        <li>Asosiasi atau kelompok lain yang mewakili badan amal;</li>
                        <li>Distributor direktori online;</li>
                        <li>Portal internet;</li>
                        <li>Firma akuntansi, hukum, dan konsultan; dan</li>
                        <li>Lembaga pendidikan dan asosiasi dagang.</li>
                    </ol>
                    <p>
                    Kami akan menyetujui permintaan penautan dari organisasi-organisasi tersebut jika kami memutuskan bahwa: (a) tautan tersebut tidak akan membuat kami terlihat merugikan kami sendiri atau bisnis terakreditasi kami; 
                    (b) organisasi tidak memiliki catatan negatif apa pun dengan kami; (c) keuntungan bagi kami dari keberadaan hyperlink mengkompensasi tidak adanya Kasuami; dan (d) tautan tersebut dalam konteks informasi sumber daya umum.
                    </p>
                    <p>
                    Organisasi-organisasi ini dapat menautkan ke halaman beranda kami selama tautan tersebut: (a) tidak menipu dengan cara apa pun; (b) tidak menyiratkan secara keliru adanya hubungan sponsor, rekomendasi, atau persetujuan 
                    dari pihak yang menautkan beserta produk dan/atau layanannya; dan (c) sesuai dengan konteks website pihak yang menautkan.
                    </p>
                    <p>
                    Jika Anda merupakan salah satu organisasi yang tercantum dalam paragraf 2 di atas dan tertarik untuk membuat tautan ke website kami, Anda harus memberitahu kami dengan mengirimkan email ke Kasuami. Harap cantumkan nama 
                    Anda, nama organisasi Anda, informasi kontak dan URL website Anda, daftar URL apa pun yang akan memuat tautan ke Website kami, serta daftar URL di website kami yang ingin Anda tautkan. Silakan tunggu tanggapan dari kami selama 2-3 minggu.
                    </p>
                    <p>
                    Organisasi yang telah disetujui dapat membuat hyperlink menuju Website kami seperti berikut:
                    </p>
                    <ol>
                        <li>Dengan menggunakan nama perusahaan kami; atau</li>
                        <li>Dengan menggunakan Uniform Resource Locator yang ditautkan; atau</li>
                        <li>Dengan menggunakan deskripsi lain dari Website kami yang ditautkan yang masuk akal dalam konteks dan format konten di website pihak yang menautkan.</li>
                    </ol>
                    <p>
                    Tidak ada penggunaan logo Kasuami atau karya seni lainnya yang diizinkan untuk menautkan perjanjian lisensi merek dagang.
                    </p>
                    <h3>Tanggung jawab atas Konten:</h3>
                    <p>
                    Kami tidak akan bertanggung jawab atas konten yang muncul di Website Anda. Anda setuju untuk melindungi dan membela kami terhadap semua klaim yang diajukan atas Website Anda. Tidak ada tautan yang muncul di Website mana pun yang dapat 
                    dianggap sebagai memfitnah, cabul, atau kriminal, atau yang menyalahi, atau melanggar, atau mendukung pelanggaran lain terhadap hak pihak ketiga.
                    </p>
                    <h3>Pernyataan Kepemilikan Hak:</h3>
                    <p>
                    Kami berhak meminta Anda menghapus semua tautan atau tautan tertentu yang menuju ke Website kami. Anda setuju untuk segera menghapus semua tautan ke Website kami sesuai permintaan. Kami juga berhak mengubah syarat ketentuan ini dan 
                    kebijakan penautannya kapan saja. Dengan terus menautkan ke Website kami, Anda setuju untuk terikat dan mematuhi syarat dan ketentuan penautan ini.
                    </p>
                    <h3>Penghapusan tautan dari website kami:</h3>
                    <p>
                    Jika Anda menemukan tautan di Website kami yang bersifat menyinggung karena alasan apa pun, Anda bebas menghubungi dan memberi tahu kami kapan saja. Kami akan mempertimbangkan permintaan untuk menghapus tautan, tetapi kami tidak 
                    berkewajiban untuk menanggapi Anda secara langsung.
                    </p>
                    <p>
                    Kami tidak memastikan bahwa informasi di website ini benar. Kami tidak menjamin kelengkapan atau keakuratannya, dan kami juga tidak berjanji untuk memastikan bahwa website tetap tersedia atau materi di website selalu diperbarui.
                    </p>
                    <h3>Penolakan:</h3>
                    <p>Sejauh diizinkan oleh undang-undang yang berlaku, kami mengecualikan semua representasi, jaminan, dan ketentuan yang berkaitan dengan website kami dan penggunaan website ini. Tidak ada bagian dari penolakan ini yang akan:</p>
                    <ol>
                        <li>Membatasi atau mengecualikan tanggung jawab kami atau Anda terhadap kematian atau cedera pribadi;</li>
                        <li>Membatasi atau mengecualikan tanggung jawab kami atau Anda terhadap penipuan atau pemberian keterangan yang tidak benar;</li>
                        <li>Membatasi tanggung jawab kami atau Anda dengan cara apa pun yang tidak diizinkan oleh undang-undang yang berlaku; atau</li>
                        <li>Mengecualikan tanggung jawab kami atau Anda yang tidak dapat dikecualikan berdasarkan undang-undang yang berlaku.</li>
                    </ol>
                    <p>Batasan dan pengecualian tanggung jawab yang diatur dalam Bagian ini dan bagian lain dalam penolakan ini: (a) tunduk pada paragraf sebelumnya; dan (b) mengatur semua kewajiban yang timbul di bawah penolakan, termasuk kewajiban yang 
                        timbul dalam kontrak, dalam gugatan, dan untuk pelanggaran kewajiban hukum.
                    </p>
                    <p>
                    Selama website dan informasi serta layanan di website disediakan secara gratis, kami tidak akan bertanggung jawab atas kerugian atau kerusakan.
                    </p>
                    <!-- <h3>Terima Kasih!</h3> -->
                    <h3>Hormat Kami, <a href="#">KASUAMI TEAM</a></h3>
                </div>
                <a class="close" href="#close"></a>
        </div>
        </div>
            
        </div>
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

		<!-- navigation list -->
	<nav class="list cf">
		<div class="beranda">
			<h1>DESTINASI</h1>
			<hr width="10px" color="#C5C5C5">
		</div>
		<div class="desa">
			<h1>Pemesanan</h1>
			<!-- <hr width="10px" color="#C5C5C5">	 -->
		</div>
		<!-- <p>Wa Ndiu Ndiu Trip</p> -->
	</nav>

	<!-- main section -->
	<div class="cont cf">
		<div class="seca">
			<h1>Isi Data Kamu yah!</h1>
			<div class="sec1 cf">
				<form action="<?php echo "order.php?paycode=$paycode" ?>" method="post">
					<div class="nama">
						<label  for="nama">Nama Lengkap</label>
						<p>*</p>
						<input  type="text" name="nama"id="nama" required>
					</div>
					<div class="email1">
						<label for="email1">Email</label>
						<p>*</p>
						<input type="email" id="email1" name="email" required>
					</div>
					<div class="nohp">
						<label  for="nohp">No. Hp</label>
						<p>*</p>
						<input  type="tel" id="nohp" name="nohp" required>
					</div>
					<div class="alamat">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" id="alamat">
					</div>
					<div class="negara">
						<label for="negara">Negara</label>
						<select class="form-control" name="negara" id="negara">
							<option value="">NEGARA</option>
							<option value="">INDONESIA</option>
						</select>
					</div>
					<div class="provinsi">
						<label  for="provinsi">Provinsi</label>
						<select class="form-control" name="provinsi" id="provinsi">
							<option value="0">PROVINSI</option>
							<?php
								$sql = "SELECT * FROM provinces";
								$data = mysqli_query($db1, $sql);
								foreach ($data as $db){
									$provinsi = $db["prov_name"];
									$id = $db["prov_id"];
									echo "<option value=$id>$provinsi</option>";
								}
							?>
						</select>
					</div>
					<div class="kota">
						<label  for="kota">Kota</label>
						<select class="form-control" name="kota" id="kota">
							<option value="0">KOTA</option>
						</select>
					</div>
					<div class="nama">
						<label for="kodepos">Kode ZIP/ Kode Pos</label>
						<input type="text" id="kodepos" name="kodepos">
					</div>
					<div class="add">
						<label for="add">Tambahan Kebutuhan</label>
						<textarea name="add" id="add" cols="30" rows="10" placeholder="(Jika memiliki alergi atau hal yang ingin menjadi catatan K-Trip)"></textarea>
					</div>

					<div class="bid">
						<h1>Pilih Metode Pembayaran</h1>
						<div class="method">
							<label for="method" class="required"></label>
							<input type="radio" id="method" name="method" value="Menabung" required>Menabung
							<input type="radio" id="method" name="method" value="Cash" required>Cash/Tunai
						</div>
						<div class="spaces">
							<input type="checkbox" name="remember" value="remember" />
								Saya sudah membaca serta Menyetujui <a href="#privacy" id="privacy">Persyaratan dan Kebijakan Privasi</a>
							<!-- <label class="remember"></label> -->
						</div>
					</div>
					<div class="submit"> 
						<button type="submit" value="submit">Submit</button>
					</div>
					
						<!-- <div class="pay">
							<select class="form-control" name="pay" id="pay">
								<option value="">Bank</option>
								<option value="">BRI</option>
								<option value="">BNI</option>
								<option value="">BCA</option>
							</select>
						</div> -->
				 </form>
			</div>
		</div>
		<div class="secb">
			<h1>Pesanan Kamu</h1>
            <?php
                $sql = "SELECT * FROM passenger WHERE paycode = '$paycode'";
                $data = mysqli_query($db1,$sql);
                foreach ($data as $db){
                    $parent = $db["parent"];
                    $child = $db["child"];
                    $infant = $db["infant"];
                }
				
            ?>
			<div class="sec2 cf">
				<div class="a">
					<div class="loca">
						<h1><?php echo $nama_trip?></h1>
						<img src="../../img/package/loc.svg" alt="">
						<p>Desa Waha, Wakatobi, Sulawesi Tenggara</p>
					</div>
					<div class="pakett">
						<img src="../../img/package/bo1.jpg" alt="">
					</div>
				</div>
				<div class="b cf">
					<div class="info">
						<div class="tipe">
							<h1>Tipe Trip</h1>
							<p>Grup Trip</p>
						</div>
						<div class="depar">
							<h1>Keberangkatan</h1>
							<p><?php echo $tgl ?></p>
						</div>
						<div class="dura">
							<h1>Durasi</h1>
							<p><?php echo $durasi?></p>
						</div>
					</div>
					<div class="jum">
						<div class="parent">
							<div class="bor">
								<h1>Jumlah Dewasa</h1>
								<p><?php echo $parent ?></p>
							</div>
						</div>
						<div class="child">
							<div class="bor">
								<h1>Jumlah Anak-Anak</h1>
								<p><?php echo $child ?></p>
							</div>
						</div>
						<div class="infant">
							<h1>Jumlah Bayi</h1>
							<p><?php echo $infant ?></p>
						</div>
					</div>
				</div>
				<div class="c">
					<div class="kupon">
						<h1>Masukkan Kode Kupon</h1>
						<input  type="text" name="kupan"id="kupan" required>
						<button type="submit" value="submit">Submit</button>
					</div>
				</div>
				<div class="d">
					<div class="payy">
						<div class="biayaa">
							<h1>Biaya Dewasa</h1>
                            
							<p><?php echo "Rp. ".strval(number_format($pay_parent,0,"",".")).",-" ?></p>
						</div>
						<div class="biayab">
							<h1>Biaya Anak-anak</h1>
                        
                            <p><?php echo "Rp. ".strval(number_format($pay_child,0,"",".")).",-" ?></p>
						</div>
						<div class="biayac">
							<h1>Biaya Bayi</h1>
                            
                            <p><?php echo "Rp. ".strval(number_format($pay_infant,0,"",".")).",-" ?></p>
						</div>
						<div class="sub">
							<h1>Subtotal</h1>
                            <?php $total = $pay_parent + $pay_child + $pay_infant ?>
                            <p><?php echo "Rp. ".strval(number_format($total,0,"",".")).",-" ?></p>
						</div>
						<!-- <div class="pajak">
							<h1>Pajak</h1>
							<p>10%</p>
						</div> -->
						<div class="total">
							<h1>Total Pembayaran</h1>
                            <?php $total_pays = ($total * 0.1) + $total?>
                            <p><?php echo "Rp. ".strval(number_format($total,0,"",".")).",-" ?></p>
						</div>
					</div>
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
			<div class="hline">
				<!-- <hr width="100%" color="#E1E1E1"> -->
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