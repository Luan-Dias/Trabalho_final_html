<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destino = "luandias121@gmail.com";
    $assunto = "Solicitação de contato - Frota Martins";
    
    $corpo = "---- Dados para contato ----"."\n"."Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: luandias121@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($destino, $assunto, $corpo, $cabeca)){
        echo("Sua solicitação de contato foi enviada, em breve lhe responderemos!");
    } else {
        echo("Houve um erro no envio da solicitação!");
    }

?>