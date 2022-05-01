<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'microstart.email@gmail.com';
    $mail -> Password = 'Etec1234567';
    $mail -> port = 587;

    $mail -> setFrom('microstart.email@gmail.com');
    $mail -> addAddress('');

    $mail -> isHTML(true);
    $mail -> Subject = 'Teste de email';
    $mail -> Body = ' <h1>Obrigado por comprar em nosso site!</h1>
<hr><br>
        <label>Sua compra foi aprovada e já esta sendo encaminhada para produção, mais atualizações em breve.</label>
        <label>Caso haja algum problema ou tenha alguma dúvida sobre sua compra entre em contato conosco!</label>
<br><br><hr>
<footer>
    <p>Não responda esta mensagem. Este é um email automático.</p>
    <p>Nosso contato: microstart.email@gmail.com</p>
</footer>';
    $mail -> AltBody = 'Obrigado por comprar em nosso site!
     Sua compra foi aprovada e já esta sendo encaminhada para produção, mais atualizações em breve.
     Caso haja algum problema ou tenha alguma dúvida sobre sua compra entre em contato conosco!
     Não responda esta mensagem. Este é um email automático.
     Nosso contato: microstart.email@gmail.com';

    if($mail -> send()){
        echo 'Email enviado com sucesso';
    }else{
        echo 'Email não enviado';
    }
    

} catch(Exception $e){
    echo "Erro ao encaminhar mensagem: {$mail->ErrorInfo}";
}

?>