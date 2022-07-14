<!--
    Atividade fazer formulário que imprima os nomes digitados na tela em forma de lista.
    O mesmo devera ler e escrever dentro do arquivo txt e mostrar na tela os nomes digitados.
-->
<?php
     
require('header.php');

 $nome = filter_input(INPUT_POST,'nome'); //filter input, filta o nome de entrada
    if($nome != null){ // se o filtro for valido ou diferente de em branco
        
        $novo = file_get_contents('nomes.txt'); //lê todo o conteúdo de um arquivo 
        $novo .="\n <li>$nome</li>"; // cria um novo nome com em formato de lista <li>
        echo $novo; //imprime novo
        file_put_contents('nomes.txt',$novo); // file_put_contents — Escreve dados em um arquivo
     }
    else{
        $novo= file_get_contents('nomes.txt');
        echo $novo;
    }

?>