<?php
ob_start();
include "koneksi.php";
require_once __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    $admin = $_GET["admin"];
    $id = $_GET["id"];
    $paycode = $_GET["paycode"];

    $sql = "SELECT * FROM transaksi where id = $id";
    $data = mysqli_query($db1,$sql);
    foreach ($data as $db){
        $paycode = $db["paycode"];
        $email = $db["email"];
        $last_pay = $db["last_pay"];
        $total = $db["biaya"];
        $tgl = $db["tgl_pay"];
    }
    $pay = $total - $last_pay;

    $sql = "UPDATE transaksi SET status = 'pending', biaya = $pay  WHERE id = $id";
    if($pay == 0){

        $sql = "UPDATE transaksi SET status = 'success',biaya = $pay  WHERE id = $id";

    }
    mysqli_query($db1,$sql);

    if($pay == 0){

        $sql = "INSERT INTO history(paycode, jumlah_transfer, total, status, validated, tgl_pemb) values ('$paycode', $last_pay, $pay, 'success', '$admin', '$tgl')";
        
        mysqli_query($db1,$sql);

        header("Location: pages/admin/validate_admin.php");
        //Dokumen PDF
        // $paycode = $_GET["paycode"];
        // $paycode = "KTRIP9616";
        $mpdf = new Mpdf\Mpdf();
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

        $html = '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title></title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="styleetiket.css" rel="stylesheet">
            </head>
            <body>';

            // $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
            // $data = mysqli_query($db1, $sql);
            // foreach ($data as $db){
            //     $nama = $db["nama"];
            //     $email = $db["email"];
            //     $nohp = $db["nohp"];
            //     $paycode = $db["paycode"];
            //     $tgl = $db["tgl_pay"];
            // }
            // $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
            // $data1 = mysqli_query($db1, $sql1);
            // foreach ($data1 as $db1){
            //     $id_paket = $db1["id_paket"];
            //     $parent = $db1["parent"];
            //     $child = $db1["child"];
            //     $infant = $db1["infant"];
            //     $total = $parent + $child + $infant;
            // }
            $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
            $data = mysqli_query($db1, $sql);
            foreach ($data as $a){
                $nama = $a["nama"];
                $email = $a["email"];
                $nohp = $a["nohp"];
                $paycode = $a["paycode"];
            }
            $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
            $data1 = mysqli_query($db1, $sql1);
            foreach ($data1 as $b){
                $parent = $b["parent"];
                $child = $b["child"];
                $infant = $b["infant"];
                $total = $parent + $child + $infant;
                $id_paket = $b["id_paket"];
            }
            $sql2 = "SELECT * FROM assets WHERE id = '$id_paket' ";
            $data2 = mysqli_query($db1, $sql2);
            foreach ($data2 as $c){
                $nama_trip = $c["paket"];
                $tgl_trip = $c["tgl"];
            }


            date_default_timezone_set('Asia/Jakarta');
            echo date('d-m-Y');

            $html .='
            <div class="bar">
                <div class="bir">
                    <h1>K-TRIP e-TIKET</h1>
                </div>
                <div class="container">
                    <div class="cont">
                        <div class="bok">
                            <h1>KODE BOOKING : '. $paycode .'</h1>
                        </div>
                        <div class="date">
                            <h1>Tanggal : '. $tgl .'</h1>
                        </div>
                        <div class="noted">
                            <h1>Noted :</h1>
                        </div>
                        <div class="isi">
                            <h1>Harap Menunjukkan e-Tiket ini sebagai Bukti Terdaftar dalam Trip</h1>
                        </div>
                    </div>
                </div>
                
                <div class="mas">
                    <img src="img/Group 540.png" alt="">
                </div>

                <div class="terimakasih">
                    <h1>Tarima Kasih aaa!</h1>
                </div>
                <!-- Tutup Maskot -->

                <!-- Data pemesan -->
                <div class="dp">
                    <div class="boxdp">
                        <h1>DATA PEMESAN</h1>
                    </div>

                    <!-- nama -->
                    <div class="nama">
                        <h1>Nama : '. $nama .'</h1>
                    </div>
                    <!-- Tutup nama -->

                    <!-- email -->
                    <div class="email">
                        <h1>Email : '. $email .'</h1>
                    </div>
                    <!-- Tutup email -->

                    <!-- telp -->
                    <div class="telp">
                        <h1>No. Telepon : '. $nohp .'</h1>
                    </div>
                    <!-- Tutup telp -->
                </div>
                <!-- Tutup Data pemesan -->

                <!-- Paket Trip -->
                <div class="trp">
                    <h1>PAKET TRIP</h1>
                </div>
                <!-- Tutup Paket Trip -->

                <!-- tabel -->';

                // $sql2 = "SELECT * FROM assets WHERE id = '$id_paket' ";
                // $data2 = mysqli_query($db1, $sql2);
                // foreach ($data2 as $d){
                //     $nama_trip = $d["paket"];
                //     $tgl_trip = $d["tgl"];
                // }

                $html .= '<div class="tabel">
                    <table id="customers">
                        <tr>
                            <div class="th">
                                <th>No</th>
                                <th>Nama Paket Trip</th>
                                <th>Tanggal Keberangkatan</th>
                                <th>Jml. Grup</th>
                                <th>Total Pembayaran</th>
                                <th>Status</th>
                            </div>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>'.$nama_trip.'</td>
                            <td>'.$tgl_trip.'</td>
                            <td>'. $total .'</td>
                            <td>Rp. '. strval(number_format($db["total_pemb"],0,"",".")).",-" .'</td>
                            <td>Lunas</td>
                        </tr>
                    </table>
                </div>
                <!-- Tutup tabel -->
            </div>
            <!-- Tutup pembungkus -->
            ';
            $html .= '<script src="" async defer></script>
            </body>
        </html>';

        $mpdf->WriteHTML($html);
        $mpdf->Output("$paycode.pdf","D");

        $content = $mpdf->Output(" ", "S");
        $html2 = 'K-Trip E-Tiket Anda [No. Pesanan '. $paycode .']';
        $html3 = '<b>Yth.'.$nama.'</b>,<br> 
            <p text-indent="15px">Reservasi Paket Tour Trip Anda telah sukses dikonfirmasi. E-tiket Anda terdapat di attachment. 
            Terima Kasih Karena Sudah Mau Mempercayakan Liburan Anda Bersama Kami. 
            Liburan Asik Bersama Kami, Booking Mudah serta Metode Pembayaran yang Ramah!</p>
            <b>Salam Hangat, KASUAMI TEAM:)</b>';
        // sendEmail($content);

        // function sendEmail($content){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        // try {
            // Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'kasuami.team@gmail.com';                     // SMTP username
            $mail->Password   = 'kasuami123';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('kasuami@gmail.com', 'Kasuami Team');
            $mail->addAddress($email, $nama);

            //Attachments

            $mail->addStringAttachment($content,"$paycode.pdf");

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $html2;
            $mail->Body    = $html3;
            $mail->AltBody = 'Silahkan Cek Report Pembayaran Anda';

            $mail->send();

            // echo 'Message has been sent';
            // } catch (Exception $e) {
            //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // }
                
        // }   

    }else{
    
    $sql = "INSERT INTO history(paycode, jumlah_transfer, total, status, validated, tgl_pemb) values ('$paycode', $last_pay, $pay,'on progress', '$admin', '$tgl')";

    mysqli_query($db1,$sql);

    header("Location: pages/admin/validate_admin.php");
    //PDF DOKUMEN CETAK BILL 2
    // $paycode = $_GET["paycode"];

    $mpdf = new Mpdf\Mpdf();
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [250, 290]]);

    $html = '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title></title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="stylecetak1.css" rel="stylesheet">
            </head>
            <body>';

            // $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
            // $data = mysqli_query($db1, $sql);
            // foreach ($data as $db){
            //     $nama = $db["nama"];
            //     $email = $db["email"];
            //     $nohp = $db["nohp"];
            //     $paycode = $db["paycode"];
            // }
            // $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
            // $data1 = mysqli_query($db1, $sql1);
            // foreach ($data1 as $db1){
            //     $id_paket = $db1["id_paket"];
            //     $parent = $db1["parent"];
            //     $child = $db1["child"];
            //     $infant = $db1["infant"];
            //     $total = $parent + $child + $infant;
            // }

            $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
            $data = mysqli_query($db1, $sql);
            foreach ($data as $a){
                $nama = $a["nama"];
                $email = $a["email"];
                $nohp = $a["nohp"];
                $paycode = $a["paycode"];
            }
            $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
            $data1 = mysqli_query($db1, $sql1);
            foreach ($data1 as $b){
                $parent = $b["parent"];
                $child = $b["child"];
                $infant = $b["infant"];
                $total = $parent + $child + $infant;
                $id_paket = $b["id_paket"];
            }
            $sql2 = "SELECT * FROM assets WHERE id = '$id_paket' ";
            $data2 = mysqli_query($db1, $sql2);
            foreach ($data2 as $c){
                $nama_trip = $c["paket"];
                $tgl_trip = $c["tgl"];
            }


    $html .=' 
            <div class="bar">
            <div class="box1">
                <div class="bxt">
                    <h1>BUKTI BOOKING (BILL)</h1>
                </div>

                <div class="box2">
                    <h1>Kode Booking : '. $db["paycode"] .'</h1>
                </div>
                <div class="box3">
                    <h1>Tanggal : '. $db["tgl_pay"] .'</h1>
                </div>
            </div>

            <div class="bar2">
                <div class="koma">
                    <img src="img/masked.png" alt="">
                </div>
                <div class="kotbir">
                    <h1>K-TRIP BILL</h1>
                </div>
            </div>

            <div class="bar3">
                <div class="dp">
                    <h1>DATA PEMESAN</h1>
                </div>
                <div class="nm1">
                    <h1>Nama : '. $nama .'</h1>
                </div>
                <div class="nm2">
                    <h1>Email : '. $email .'</h1>
                </div>
                <div class="nm3">
                    <h1>No. Telepon : '. $nohp .'</h1>
                </div>
            </div>

            <div class="bar4">
                <div class="dpm">
                    <h1>DETAIL PEMBAYARAN</h1>
                </div>
                <div class="dpm1">
                    <h1>Metode Transaksi : '. $db["metode_pemb"] .'</h1>
                </div>
            </div>';

            // $sql2 = "SELECT * FROM assets WHERE id = '$id_paket' ";
            // $data2 = mysqli_query($db1, $sql2);
            // foreach ($data2 as $c){
            //     $nama_trip = $c["paket"];
            //     $tgl_trip = $c["tgl"];
            // }

            $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
            $data = mysqli_query($db1, $sql);
            foreach ($data as $a){
                $nama = $a["nama"];
                $email = $a["email"];
                $nohp = $a["nohp"];
                $paycode = $a["paycode"];
            }
            $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
            $data1 = mysqli_query($db1, $sql1);
            foreach ($data1 as $b){
                $parent = $b["parent"];
                $child = $b["child"];
                $infant = $b["infant"];
                $total = $parent + $child + $infant;
                $id_paket = $b["id_paket"];
            }
            $sql2 = "SELECT * FROM assets WHERE id = '$id_paket' ";
            $data2 = mysqli_query($db1, $sql2);
            foreach ($data2 as $c){
                $nama_trip = $c["paket"];
                $tgl_trip = $c["tgl"];
            }

            $html.= '<div class="bar6">
                <h1>BUKTI BOOKING (BILL)</h1>
            </div>
            <div class="bar7">
            <table id="customers">
                <tr>
                    <div class="th">
                        <th>No</th>
                        <th>Nama Paket Trip</th>
                        <th>Tanggal Keberangkatan</th>
                        <th>Jml. Grup</th>
                        <th>Status</th>
                    </div>
                </tr>
                <tr>
                    <td>1</td>
                    <td>'.$nama_trip.'</td>
                    <td>'.$tgl_trip.'</td>
                    <td>'. $total .'</td>
                    <td>On Progress</td>
                </tr>
            </table>
        </div>
        <div class="bar8">
            <h1>HISTORY PEMBAYARAN</h1>
        </div>

        <div class="bar9">
            <table id="customerss">
                <tr>
                    <div class="th1">
                        <th>Tanggal Pembayaran</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Sisa Pembayaran</th>
                        <th>Total Pembayaran</th>
                    </div>
                </tr>
                <tr>
                    <td>'. $db["tgl_pay"] .'</td>
                    <td>Rp. '. strval(number_format($db["last_pay"],0,"",".")).",-" .'</td>
                    <td>Rp. '. strval(number_format($db["biaya"],0,"",".")).",-" .'</td>
                    <td>Rp. '. strval(number_format($db["total_pemb"],0,"",".")).",-" .'</td>
                </tr>
            </table>
        </div>

        <div class="bar10">
            <h1>*Noted</h1>
        </div>

        <div class="isinoted">
            <ol>
                <li>Harap Selalu Lakukan Validasi Setiap kali Selesai Melakukan Pembayaran</li>
                <li>Harap Perhatikan Kode Booking yang anda Dapatkan setiap kali Melakukan Validasi</li>
                <li>Mohon Perhatikan Data yang di Masukkan ketika melakukan Validasi harus sesuai ketika melakukan Order</li>
                <li>Pembayaran hanya di Lakukan pada Nomor Rekening Berikut 5200391570 a/n Achmad Rizal</li>
                <li>Untuk Mencegah Kesalahan dalam Pembayaran Harap Perhatikan Seluruh Data yang Anda Isikan pada Halaman Validasi Pembayaran</li>
            </ol>
        </div>
    </div>';

    $html .= '<script src="" async defer></script>
        </body>
    </html>';

    $mpdf->WriteHTML($html);
    $mpdf->Output("$paycode.pdf","D");

    $content = $mpdf->Output(" ", "S");
    
    $html2 = 'K-Trip Bill Anda [No. Pesanan '. $paycode .']';
    $html3 = '<b>Yth.'.$nama.'</b>,<br> 
            <p text-indent="15px">Pembayaran Anda Sudah Kami Validasi, Segera Selesaikan Pembayaran Anda. 
            Periode Batas Pembayaran Akan ditutup pada H-7 Sebelum Keberangkatan, Jika Pada Saat Itu Pembayaran
            Anda Masih Belum Terselesaikan maka akan dinyatakan hangus dan pengajuan Refund hanya akan berlaku
            yaitu <b>50%</b> dari Total Pembayaran Yang Sudah Anda Lakukan Sebelumnya, <i>Untuk lebih detailnya
            Harap Kunjungi Syarat & Ketentuan Pada Website kasuamitrip.com</i>, Terima Kasih!</p>
            <b>Salam Hangat, KASUAMI TEAM:)</b>';

    // sendEmail($content);

    // function sendEmail($content){
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    // try {
        // Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'kasuami.team@gmail.com';                     // SMTP username
        $mail->Password   = 'kasuami123';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('kasuami@gmail.com', 'Kasuami Team');
        $mail->addAddress($email, $nama);

        //Attachments

        $mail->addStringAttachment($content,"$paycode.pdf");

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $html2;
        $mail->Body    = $html3;
        $mail->AltBody = 'Silahkan Cek Report Pembayaran Anda';

        $mail->send();

        // echo 'Message has been sent';
        // } catch (Exception $e) {
        //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // }
            
    // }
    }
    // }else{
    //     shell_exec("python send_email.py $email KTRIP");
    //     sleep(3);
    // }
            
    // mysqli_query($db1,$sql);
    // header("Location: pages/admin/validate_admin.php");

?>