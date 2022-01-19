<?php


// Lógica para a execução da ação correta de acordo com o método executado

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Se validate_form() retornar erros, eles serão passados para show_form()
    if($form_errors = validate_form()){
        show_form($form_errors);
    } else {
        process_form();
    }
} else {
    show_form(); 
}




// Exibe formulario




// Seu nome deverá ter no minimo 3 caracteres
function validate_form(){
    // Começa com array de mensagens de erro
    $errors = array();

    // Valida se o nome e menor que 3
    if(strlen($_POST['my_name']) < 3 ) {
        $errors[] = 'Seu nome deve ter pelo menos 3 letras' . "\n";
    } else {
        return $errors;
    }

}

function show_form($errors ) {
    if($errors){
        print 'Desculpe houve um erro:  <ul><li>';
        print implode('<li></li>', $errors);
        print '</li></ul>';
    }

    print<<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    Qual seu nome : <input type="text" name="my_name"> 
    </br>
    <input type="submit" value="Clique aqui">
    </form>
    _HTML_;
}


// Verifica os dados do formulario





// Realize isso quando o formulario for enviado

function process_form() {
    print "Olá, " . $_POST['my_name'];
}

?>