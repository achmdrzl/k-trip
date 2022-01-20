<?php 

require_once __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "koneksi.php";

// $paycode = $_REQUEST["paycode"];
// $paycode = $_GET["paycode"];
$paycode = "KTRIP1213";

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

            $sql = "SELECT * FROM transaksi WHERE paycode = '$paycode' ";
            $data = mysqli_query($db1, $sql);
            foreach ($data as $db){
                $nama = $db["nama"];
                $email = $db["email"];
                $nohp = $db["nohp"];
                $paycode = $db["paycode"];
            }
            $sql1 = "SELECT * FROM passenger WHERE paycode = '$paycode' ";
            $data1 = mysqli_query($db1, $sql1);
            foreach ($data1 as $db1){
                $parent = $db1["parent"];
                $child = $db1["child"];
                $infant = $db1["infant"];
                $total = $parent + $child + $infant;
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
                </div>

                <div class="bar6">
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
                        <td>Wa Ndiu-Ndiu Trip</td>
                        <td>15 November 2021</td>
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
                            <td>Rp. '. strval(number_format($db["biaya"],0,"",".")).",-" .'</td>
                        </tr>
                    </table>
                </div>

                <div class="bar10">
                    <h1>*Noted</h1>
                </div>

                <div class="isinoted">
                    <ol>
                        <li>1. Harap Selalu Lakukan Validasi Setiap kali Selesai Melakukan Pembayaran</li>
                        <li>2. Harap Perhatikan Kode Booking yang anda Dapatkan setiap kali Melakukan Validasi</li>
                        <li>3. Mohon Perhatikan Data yang di Masukkan ketika melakukan Validasi harus sesuai ketika melakukan Order</li>
                        <li>4. Pembayaran hanya di Lakukan pada Nomor Rekening Berikut 5200391570 a/n Achmad Rizal</li>
                        <li>5. Untuk Mencegah Kesalahan dalam Pembayaran Harap Perhatikan Seluruh Data yang Anda Isikan pada Halaman Validasi Pembayaran</li>
                    </ol>
                </div>
            </div>';

$html .= '<script src="" async defer></script>
        </body>
    </html>';

$mpdf->WriteHTML($html);
$mpdf->Output("$paycode.pdf","D");

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