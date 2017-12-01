<?php
	






?>
<?php
  error_reporting(0);
  $erro=$_GET['erro'];
  include("conexao.php");
  
?>
<html>
<head>
  <title>Recuperar SENHA</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/login.css">

  <!-- Latest compiled and minified JavaScript -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<script type="text/javascript">
   $(document).ready(function(){
    $("#pessoajuridicaform").hide(100);
     $("#pessoafisica").click(function(){//clicando em pessoa fisica
       $("#pessoajuridicaform").hide(100);
       $("#pessoafisicaform").show(100);
     });
     $("#pessoajuridica").click(function(){//clicando em pessoa juridica
        $("#pessoafisicaform").hide(100);
       $("#pessoajuridicaform").show();//habilita cnpj
   });
 });
   
  </script>
</head>
<body >
<div id="top-image"></div>
  <div class="container">
  
      
      <form class="form-signin" action="files/Funcoes.php?funcao=50" method="post">
        <p>
        	<center><img src="../images/logo.png" width="100" /></center>
      	</p>
        <h2 class="form-signin-heading"></h2>
	        <div class="form-group">
	          <div class="input-group">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	            <input name="email" type="text" class="form-control" placeholder="Digite seu E-mail" style="height: 30px; font-size: 15px; padding: 5px;" required autofocus>
	          </div>
	        </div>
        

         <button class="btn btn-large btn-primary" type="submit"  style="background-color: #006400; border-color: #006400; cursor:pointer; width: 100%; height: 30px; font-color: white; font-size: 15px; padding: 5px;">Entrar</button>
      </form>
 </div>

</body>
</html>