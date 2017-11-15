<?php 
	require_once("files/conexao.php");
	session_start();
/*	$usuario=trim(htmlspecialchars($_POST['usuario']));
	$senha=trim(htmlspecialchars(md5($_POST['senha'])));

	$ret = mysql_query("select usuario FROM usuarios");
	while($dados=mysql_fetch_assoc($ret)):
	if ($usuario==$dados['usuario']) {
			$pass = mysql_query("select senha FROM usuarios");
			$passFinal=mysql_fetch_assoc($pass);
			if ($senha==$passFinal['senha']) {
				session_start();
				$_SESSION["LOGIN_USUARIO"]=$usuario;
				$_SESSION["SENHA_USUARIO"]=$senha;
				header("Location:index.php");
			}
			else{
				header("Location:login.php?erro=1");
			}
		//$pass = mysql_query("select senha FROM usuarios WHERE $senha='".$dados['senha']."'");
	}
	else{
		header("Location:login.php?erro=2");
	}
	endwhile;
*/
		
		$gravalog= htmlspecialchars(trim($_POST["usuario"]));//salva na variavel $gravaLog o login do adm
		$gravaSenha= htmlspecialchars(trim($_POST["senha"]));//salva na variavel $gravaSenhaADM a senha do admim
		echo $gravaSenha;
		$gravaSenha2=md5($gravaSenha);//criptografa a senha
		if($gravalog && $gravaSenha != ""){
			$sql = mysql_query("SELECT * FROM usuario WHERE usu_email='$gravalog'");//seleciona o banco dados loginfum nome logADM
			$cont = mysql_num_rows($sql);//cont recebe a a linha selecionada
				while($linha = mysql_fetch_array($sql)){
					$id = $linha['idusuarios'];
					//$access = $linha['acesso'];
					//$gravaPriv = $linha['privilegio'];
					$senha_db = $linha["usu_senha"];	
					//$ativo = $linha["user_ativo"];
					//echo $ativo;
				}
				if($cont==0){//se o login do adm não for o cadastrado
					header("Location:index.php?erro=2");
				}
				else{	
					if($senha_db != $gravaSenha){//se a senha não for igual a que o admim cadastrou
					header("Location:index.php?erro=1");
					}
					
						else{	
							session_start();
							$_SESSION["LOGIN_USUARIO"]=$gravalog;
							$_SESSION["SENHA_USUARIO"]=$gravaSenha;
							//$_SESSION["PRIVILEGIO"]=$gravaPriv;

							/*$access++;
							$atualiza = mysql_query("UPDATE  usuarios 
													SET acesso = '$access' 
													WHERE idusuarios = '$id' ")or die(mysql_error());*/
							header("location:home.php");			
							session_destroy();
						}
							
				}
		}
		
?>