<h1>Qual seu nome ?</h1>

<?php 

    if (isset($_COOKIE['nome'])) { // ISSET = esta setado.
        $nome = $_COOKIE['nome'];
        echo '<h2>'.$nome.'</h2>';
    }

?>