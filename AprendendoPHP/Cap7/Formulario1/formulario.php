<?php

// valida se a variavel tem valor

// <-- Se o email já não estiver preenchido ou estiver vazio , faça....
if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome =     addslashes($_POST['name']); 
    $email =    addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);
    
    // E-mail de recpção
    $to = "jonathaemulador@gmail.com"; 
    // Assunto
    $subject = "Formulario - TESTE";
    // Mensagem do email
    $body = "Nome: " .      $nome .  "\r\n" . 
            "Email: " .     $email . "\r\n" .
            "Mensagem: " .  $mensagem;
    // cabeçalho do email
    $header = "From: jonatha36077@gmail.com" . "\r\n" . // Obrigatorio inciar com From"
              "Reply-To: " . $email . "\r\n" . // E-mail de resposta
              "X=Mailer:PHP/" . phpversion();
} 

// caso seja verdadeiro preencha....
if(mail($to, $subject, $body, $header)){
    
    echo("Email enviado com sucesso!");
} else {
    echo ("Não foi possuvel enviar o seu e-mail");
}

?>