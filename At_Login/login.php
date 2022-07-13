<?php 

    session_start();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); //a minha tela de login, pegara da tela INDEX.PHP, o atributo " name " do input que esta dentro do FORM com o metodo POST.

    if ($nome) {
        $expiracao = time() + (86400 * 30); // 86400 expressão para 1 dia.
        setcookie('nome', $nome, $expiração);

        echo 'Olá '.$nome. ' Seja bem vindo - '. '<h3><a href="apagar.php">Sair</a></h3>'; //Se a informação do nome foi validada " TRUE " aparecera concatenado meu nome e a tela de boas vindas.
    }else{

        $_SESSION['aviso'] = 'Preencha os itens corretamente';

        header("location: index.php"); //Redireciono a página
        exit;
    }



?>