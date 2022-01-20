<?php 

require_once __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "koneksi.php";

// $paycode = $_REQUEST["paycode"];
$paycode = $_GET["paycode"];
$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [250, 260]]);

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
                <div class="box1">
                    <div class="bxt">
                        <h1>BUKTI BOOKING (BILL)</h1>
                    </div>

                    <div class="box2">
                        <h1>Kode Booking : '. $a["paycode"] .'</h1>
                    </div>
                    <div class="box3">
                        <h1>Tanggal : '. date('d-m-Y') .'</h1>
                    </div>

                </div>

                <div class="bar2">
                    <div class="koma">
                        <img src="img/etiket/masked.png" alt="">
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
                        <h1>Metode Transaksi : '. $a["metode_pemb"] .'</h1>
                    </div>
                </div>

                <div class="bar6">
                    <h1>PAKET TRIP YANG DI BOOKING (BILL)</h1>
                </div>

                <div class="bar7">
                    <table id="customers">
                        <tr>
                            <div class="th">
                                <th>No</th>
                                <th>Nama Paket Trip</th>
                                <th>Tanggal Keberangkatan</th>
                                <th>Jml. Grup</th>
                                <th>Total Pembayaran</th>
                            </div>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>'. $nama_trip .'</td>
                            <td>'. $tgl_trip .'</td>
                            <td>'. $total .'</td>
                            <td>Rp. '. strval(number_format($a["total_pemb"],0,"",".")).",-" .'</td>
                        </tr>
                    </table>
                </div>
                <div class="bar10">
                    <h1>*Noted</h1>
                </div>
                <div class="isinoted">
                    <ol>
                        <li>Harap Selalu Lakukan Validasi Setiap kali Selesai Melakukan Pembayaran</li>
                        <li>Harap Perhatikan <b>Kode Booking</b> yang anda Dapatkan setiap kali Melakukan Validasi</li>
                        <li>Mohon Perhatikan Data yang di Masukkan ketika melakukan Validasi harus sesuai ketika melakukan Order</li>
                        <li>Pembayaran hanya di Lakukan pada Nomor Rekening Berikut <b>5200391570 a/n Achmad Rizal</b></li>
                        <li>Untuk Mencegah Kesalahan dalam Pembayaran Harap Perhatikan Seluruh Data yang Anda Isikan pada Halaman Validasi Pembayaran</li>
                    </ol>
                </div>
            </div>';

$html .= '<script src="" async defer></script>
    </body>
</html>';

$html2 = 'K-Trip Bill Anda [No. Pesanan '. $paycode .']';
$html3 = '<b>Yth.'.$nama.'</b>,<br> 
            <p text-indent="15px">Booking Paket Tour Trip Anda telah berhasil. K-Trip Bill Anda terdapat di attachment. 
            Segera Lakukan Pembayaran Anda, Terima Kasih!</p>
            <b>Salam Hangat, KASUAMI TEAM:)</b>';

$mpdf->WriteHTML($html);
$mpdf->Output("$paycode.pdf","D");

$content = $mpdf->Output(" ", "S");

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

// header("Location: booking.php?paycode=".urlencode($paycode));

?>