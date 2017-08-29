<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

/*authmail.debug = Off;
authmail.port = 587;
authmail.address = "contatocomercial@sermonti.com.br"
authmail.smtp_account = "contatocomercial=sermonti.com.br"
authmail.smtp = "smtp.sermonti.com.br"
authmail.password = "Admin123"*/

$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'];// <- O e-mail que está configurado no .htaccess
$headers = 'Date:'.date('r');
if (mail('pauloamserrano@gmail.com', 'Pedido de contacto através do website', $message, $headers)) {
    $jsonResponse = array('status'=>true);
    echo json_encode($jsonResponse);
}else{
    $jsonResponse = array('status'=>false);
    echo json_encode($jsonResponse);
};

