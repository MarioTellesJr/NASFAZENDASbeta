<?php 
	include("conexao.php");


	

		$exclui_id = $_GET['id'];

		mysql_query("DELETE FROM usuario WHERE usu_id = '$exclui_id'")or die(mysql_error());
		
		header("Location:../pages/usuario.php");

		
    
 ?>