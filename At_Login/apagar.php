<?php 

setcookie('nome', '', time() - 3600); // 3600 = 1 minutos assim conseguimos deletar ou expirar esse cookie;
header("location: index.php"); 
exit; 

?>