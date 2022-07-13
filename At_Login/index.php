<?php 
    session_start(); //Função utilizada para iniciarmos nossa sessão (Local para armazenar informações).
    require('header.php'); //Puxa o conteúdo de uma pág.

   if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso']='';
   }
    
?>

<form method="POST" action="login.php">

<input type="text" name="nome" placeholder="Digite seu nome" style="height:6%"></input>
<br/><br/>
<input type="submit" value="Enviar" style="height:6%"></input>

</form>
