<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'index.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Load Composer's autoloader
 //require 'vendor/autoload.php';

 if(isset($_POST['name']) && isset($_POST['email'])){
    $lawyer = $_POST['selAdv'];
    $date = $_POST['datepicker'];
    $clientes = $_POST['selClients'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['phone'];
    $subject = $_POST['subject'];
    $city = $_POST['city'];
 if(isset($_POST['txtCliente'])) {
    $txtCliente = $_POST['txtCliente'];
 } else {
     $txtCliente = "";
    }
 }
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fernandobattisti94@gmail.com';                     //SMTP username
    $mail->Password   = 'magnetasa3826649';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fernandobattisti94@gmail.com', 'Mailer');
    $mail->addAddress('febattisti@outlook.com', 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);
                                      //Set email format to HTML
    $mail->Subject = utf8_decode($lawyer. ": " .$subject. "");
    $mail->Body    = utf8_decode("Cliente: " .$name. "<br>Cidade: " .$city. "<br>Deseja marcar - " .$subject. " - para o dia " .$date. "<br>Sala com espaço para: " .$clientes. "<br>Telefone do cliente: " .$tel. "<br>Email: " .$email. "");
    $mail->send();
} catch (Exception $e) {
    echo "Falha no envio: {$mail->ErrorInfo} <br>Tente novamente.";
}

?>
