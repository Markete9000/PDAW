<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../View/PHPMailer/Exception.php';
require '../View/PHPMailer/PHPMailer.php'; 
require '../View/PHPMailer/SMTP.php';

$email = 'ayofundation@gmail.com';
$password = 'ayostudios2000';
$name = 'Ayo Company';
$address = $usuario->getEmail();

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $email;                     // SMTP username
    $mail->Password   = $password;                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($address);     // Add a recipient

    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pedido';
    $mail->Body    = '
    ¡Hola, '.$_SESSION['usuario'].'! ¡En nombre de Ayo\'s, queremos agradecerte inmensamente por la confianza en nuestros productos!
    Esperamos que estés súper contento con tu compra, tal como lo estamos nosotros.
    <br><br><b>Listado de productos comprados: <br>';

    foreach ($array as $codigo => $cantidad) {
        $producto = Producto::getProductoByCodigo($codigo);
        $mail->Body .= '<br>'.$producto->getNombre().': '.$cantidad;
    }

    $mail->Body .= '<br><br><br>Factura Total: '.$totalAPagar;
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header('Location: ../Controller/principal.php');