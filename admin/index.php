<?php
  error_reporting(0);
  $erro=$_GET['erro'];
  
?>
<html>
<head>
  <title>Gestão de Clientes</title>
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript">
      $(document).ready(function() {
        var movementStrength = 55;
        var height = movementStrength / $(window).height();
        var width = movementStrength / $(window).width();
        $("#top-image").mousemove(function(e){
                  var pageX = e.pageX - ($(window).width() / 2);
                  var pageY = e.pageY - ($(window).height() / 2);
                  var newvalueX = width * pageX * -1 - 25;
                  var newvalueY = height * pageY * -1 - 50;
                  $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
        });
     });

</script>
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
  
      <p>
        <center><img src="../images/logo.png" width="160" /></center>
      </p>
      <form class="form-signin" action="validaLog.php" method="post">
      <?php
         if(isset($erro)){
          switch ($erro) {
            case 0:
              echo"<div style='width:99%;height:30px;background:#0099cc;border-radius:10px;border:1px solid blue;color:#fff;font-family:Arial;margin:5px 5px;padding-top:10px;'><center>Cadastro efetuado com sucesso!!!</center></div>";
              break;
            case 1:
              echo"<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Usuário ou Senha inválida</b></div>";
            break;
            case 2:
              echo"<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Usuario ou senha inválida</b></div>";
            break;
            case 3:
                echo"<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Erro!! Você deve estar logado para acessar o conteúdo.</b></div>";
            break;
            case 4:
                echo"<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Você foi desconectado!</b></div>";
            break;
            case 5:
              echo"<div class='alert alert-success' role='alert'><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Cadastro efetuado.<br> Verifique a caixa de entrada do seu email.</b></div>";
              break;
            default:
              echo"<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Algo estranho aconteceu!</b></div>";
              break;
         }
       }
         ?>
        <h2 class="form-signin-heading"></h2>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-edit"></i>
            </span>
          <input name="usuario" type="text" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        </div>
        <div class="checkbox">
          
          <label>
            <a href="" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastre-se</a>
          </label>
          
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->
    <!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
     <div class="modal-header">
      <h5 class="modal-title">Cadastro usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div style="width:auto;height:30px;padding-left:10px;">
          <small style="padding:10px; ">Tipo de cadastro</small><br>  
          <input type="radio" name="tipo" id="pessoafisica" value="pessoafisica" checked="checked">Pessoa Física
            <input type="radio" name="tipo" id="pessoajuridica" value="pessoajuridica">Pessoa Jurídica <br>
         </div>
        <form class="cadas" action="files/Funcoes.php?funcao=1" method="post" id="pessoafisicaform">
            
            <div class="form-group">
              <input class="form-control" type="text" name="nome" placeholder="Nome" required="required" />
            </div>
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email" required="required"  />
            </div>
            <div class="row">
                <div class="col-6">
                  <input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" />
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" />
                </div>
                <div class="col-4">
                  <input class="form-control" type="text" name="cep" placeholder="CEP" required="required" />
                </div>
                <div class="col-8">
                  <input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" />
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="numero" placeholder="Número" required="required" />
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" />
                </div>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato 000.000.000-00" required="required" />
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="senha" placeholder="Senha" required="required"  />
            </div>
            <div class="form-group">
              <input class="btn btn-success" type="submit" value="Cadastrar" />
            </div>
        </form>

         <form class="cadas" action="files/Funcoes.php?funcao=2" method="post" id="pessoajuridicaform">
            
           
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email" required="required"  />
            </div>
            <div class="row">
                <div class="col-6">
                  <input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" />
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" />
                </div>
                <div class="col-4">
                  <input class="form-control" type="text" name="cep" placeholder="CEP" required="required" />
                </div>
                <div class="col-8">
                  <input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" />
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="numero" placeholder="Número" required="required" />
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" />
                </div>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" title="Digite o CNPJ no formato 00.000.000/0000.00" name="cnpj" id="cnpj" pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}" placeholder="CNPJ" required="required" />
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="fantasia" id="fantasia" placeholder="Nome Fantasia" required="required" />
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="senha" placeholder="Senha" required="required"  />
            </div>
            <div class="form-group">
              <input class="btn btn-success" type="submit" value="Cadastrar" />
            </div>
        </form>
    </div>
  </div>
</div>

</body>
</html>