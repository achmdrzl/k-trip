<?php 
require_once __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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
    $mail->addAddress('achmd.rzl13@gmail.com', 'Kasuami Team');

    // //Attachments

    // $mail->addStringAttachment($content,"$paycode.pdf");

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hallo Admin!';
    $mail->Body    = 'Cek Dashboard yuk min ada yang bayar nih! :)';
    $mail->AltBody = 'Silahkan Cek Report Pembayaran Anda';

    $mail->send();

    // echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
    header("Location: pages/user/validate.php");
        
// }   

// header("Location: booking.php?paycode=".urlencode($paycode));

?>

?>