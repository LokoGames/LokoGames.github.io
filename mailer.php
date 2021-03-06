<?php

require_once('PHPMailer.php');
// Check if the form is submitted
if ( isset( $_REQUEST['submit'] ) ) {
    // retrieve the form data by using the element's name attributes value as key 
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $texto = $_REQUEST['texto'];

    $dt = "Nome: ". $nome . " Email: " . $email . " Texto: " . $texto;
    echo("Form Sent!");
    file_put_contents('log.out', $dt, FILE_APPEND);
    
    $to      = 'joaovictordonato2@gmail.com';
    $subject = $nome;
    $message = $texto;

    $res = sendMail($email, $to, $nome, 'Email de > ' . $nome, $texto);

    echo(($res == true) ? "Mail Sent" : "Mail not sent");

    exit;
}else{
    die("Form not sent");
}

?>