<?php 
if(!isset($_SESSION["LOGIN_USUARIO"])){ //os nomes da sessao no caso to mostrando se for login e senha
header("Location:../index.php?erro=3");
 //aki o cara vai pra index.php se nao tiver logado  
}
