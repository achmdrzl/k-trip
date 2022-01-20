<?php 

require_once __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include "koneksi.php";

// $paycode = $_REQUEST["paycode"];
$paycode = $_GET["paycode"];
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
    $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
    $data = mysqli_query($db1, $sql);
    foreach ($data as $db){
        $nama = $db["nama"];
        $email = $db["email"];
        $nohp = $db["nohp"];
        $paycode = $db["paycode"];
        $tgl = $db["tgl_pay"];
    }
    $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
    $data1 = mysqli_query($db1, $sql1);
    foreach ($data1 as $db1){
        $parent = $db1["parent"];
        $child = $db1["child"];
        $infant = $db1["infant"];
        $total = $parent + $child + $infant;
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

        <!-- tabel -->
        <div class="tabel">
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
                    <td>Wa Ndiu-Ndiu Trip</td>
                    <td>'. $tgl .'</td>
                    <td>'. $total .'</td>
                    <td>Rp. 27.000.000,-</td>
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
$mpdf->Output("$paycode.pdf","I");

$content = $mpdf->Output(" ", "S");

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
    $mail->Subject = 'Validasi Pembayaran';
    $mail->Body    = 'Pembayaran Anda Sudah Kami Validasi</b>';
    $mail->AltBody = 'Silahkan Cek Report Pembayaran Anda';

    $mail->send();

    // echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
        
// }   

?>
