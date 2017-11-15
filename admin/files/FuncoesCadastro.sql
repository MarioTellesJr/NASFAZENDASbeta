<?php
		include("conexao.php");
		$pessoaFisica_nome = $_POST['nome'];
		$usu_email = $_POST['email'];
		$usu_foneCel = $_POST['fone'];
		$usu_foneCom = $_POST['fonecom'];
		$pessoaFisica_cpf = $_POST['cpf'];
		$pessoaJur_cnpj = $_POST['cnpj'];
		$pessoa_jur_nomeFantasia = $_POST['fantasia'];
		$usu_senha = $_POST['senha'];
		$usuario_usu_id = $_POST['usu_id'];
		$endereco_rua = $_POST['endereco_rua'];
		$endereco_cep = $_POST['endereco_cep'];
		$endereco_numero = $_POST['endereco_numero'];
		$endereco_comp = $_POST['endereco_comp'];
		$usuario_usu_id = $_POST['usu_id'];
		$sql = "INSERT INTO usuario VALUES ";
		$sql = "('$usu_email', '$usu_foneCel', '$usu_fonecom','$usu_senha' )"; 
		$sql "INSERT INTO endereco VALUES ";
		$sql = "('$usuario_usu_id','$usu_email', '$endereco_rua', '$endereco_cep','$endereco_numero','$endereco_comp')"; 
		
		if ($pessoaJur_cnpj = ""){

			$sql = "INSERT INTO pessoa_fisica VALUES ";
			$sql .= "('$usuario_usu_id', '$pessoaFisica_cpf', '$pessoaFisica_nome' )"; 
		}else {
			$sql = "INSERT INTO pessoa_jur VALUES ";
			$sql .= "('$usuario_usu_id', '$pessoa_jur_nomeFantasia', '$pessoaJur_cnpj' )";
		}
?>