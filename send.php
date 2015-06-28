<?php
$args = array(
	'name' => FILTER_SANITIZE_STRING,
	'email' => FILTER_VALIDATE_EMAIL,
	'comment' => FILTER_SANITIZE_STRING
);
$json = [];
$params = filter_input_array(INPUT_POST, $args);

$params['name'] = trim($params['name']);
$params['comment'] = trim($params['comment']);

if( $params['name'] == '' ) {
	$json['info'][] = '<li>Escriba su nombre completo</li>';
}
if( ! $params['email'] ) {
	$json['info'][] = '<li>Escriba un correo electrónico válido</li>';
}
if( $params['comment'] == '' ) {
	$json['info'][] = '<li>Debe escribir su Mensaje</li>';
}

if (!empty($json)) {
	$json['is_errors'] = true;
} else {

	require 'mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);
	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.mandrillapp.com';
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'larriega@gmail.com';
		$mail->Password = '';
		$mail->CharSet = 'UTF-8';
		$mail->Port = 587;

		$mail->From = $params['email'];
		$mail->FromName = $params['name'];
		$mail->addAddress('centrocv@outlook.com', 'Centrocardiovascular');
		// $mail->addCC($params['email'], $params['name']);
		$mail->addReplyTo('no-reply@centrocardiovascular.com.pe', 'Centrocardiovascular');

		$mail->isHTML(true);
		$mail->Subject = 'Mensaje enviado desde la web de centrocardiovascular';
		$mail->Body = '<h2>De: ' . $params['name'] . '</h2><p>' . nl2br($params['comment']) . '</p>';

		if( $mail->send() ) {
			$json = array('load' => true, 'success' => 'Su mensaje ha sido enviado, Gracias!');
		} else {
			$json = array('load' => false, 'error' => '<li>Lo sentimos, ocurrió un error inesperado. Intentelo de nuevo mas tarde.</li>');
		}
	} catch (phpmailerException $pex) {
		$json = ['load' => false, 'error' => $pex->getMessage()];
	}
}

echo json_encode($json);
