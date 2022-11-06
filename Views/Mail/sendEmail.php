<?php

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eventoscasadecristal@gmail.com';                     // SMTP username
    $mail->Password   = 'uxwhhzfczxygzvxk';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ecovivienda@gmail.com', 'Ecovivienda');
    $mail->addAddress($_REQUEST['email']);     // Add a recipient
    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('Assets/img/Logo.jpeg', 'ECDC.jpeg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperacion de cuenta';
    $mail->Body    = '
    <section>
        <div class="section-correo-bienvenida" style="margin: auto;height: auto;width: 60%;margin-top: 30px; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left; background-color: #fff;">
            <div style="text-align: center!important;">
                <img src="http://www.ecovivienda.gov.co/sites/ecovivienda-tunja/content/files/000351/17537_captura1-300x300_200x200.png" alt="logo"/>
            </div>
            <p>&iexcl; Hola <b>'.$dataUser->NOMBRE.'</b> &#33;</p>
            <p>A continuacion encontraras el link para recuperar tu clave.</p>
            <br>
            <table class="table text-center" style="width: 100%; max-width: 100%; margin-bottom: 1rem; background-color: transparent; border-collapse: collapse; text-align: center!important;border: 2px solid #004884;">
                <thead class="thead-dark">
                    <tr>
                        <th style="color: #fff; background-color: #004884; border-color: #004884; vertical-align: bottom; border-bottom: 2px solid #dee2e6; padding: .75rem;                     vertical-align: top;
                        border-top: 1px solid #dee2e6;">
                            Link
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">
                            <p>Da click <a href="'.$link.'">aqui</a> para continuar.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    ';
    /*$mail->AltBody = 'Mensaje alternativo';*/

    $mail->send();
    //echo $mail->Body;
} catch (Exception $e) {
    $_SESSION['message-login']="Error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
    $_SESSION['icon-message']='<i class="text-danger fs-1 fa-solid fa-triangle-exclamation"></i>';
    header('location:/retoEcovivienda/');
}

?>