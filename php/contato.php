<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes(string: $_POST(['name']));
    $email = addslashes(string: $_POST(['email']));
    $telefone = addslashes(string: $_POST(['telefone']));
    $mensagem = addslashes(string: $_POST(['mensagem']));

    $to = "4ndr31.p1nt0@gmail.com";
    $subject = "Contato - GymUp";
    $body = "Nome: ".$nome. "\n"
        . "E-mail: ".$email. "\n"
        . "Mensagem: ".$mensagem. "\n";
    $header = "From: "
}

?>