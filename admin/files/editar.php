<?php
error_reporting(0);
$erro = $_GET['erro'];
include("conexao.php");
$usu_id = $_GET['id'];
$usu_email = $_POST['email'];
$usu_fonecom = $_POST['fonecom'];
$usu_senha = $_POST['usu_senha'];

$pegaId = mysql_query("SELECT usuario_usu_id from usuario JOIN pessoa_fisica WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$usu_id' ")or die(mysql_error());
$mostrarFis = mysql_fetch_assoc($pegaId);
$idPessoaF = $mostrarFis['usuario_usu_id'];

$pegaIdJ = mysql_query("SELECT usuario_usu_id from usuario JOIN pessoa_jur WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$usu_id' ")or die(mysql_error());
$mostrarJur = mysql_fetch_assoc($pegaIdJ);
$idPessoaJ = $mostrarJur['usuario_usu_id'];

$busca = mysql_query("SELECT * from usuario JOIN pessoa_fisica WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$usu_id' ")or die(mysql_error());
$mostraBusca = mysql_fetch_assoc($busca);

$dados = mysql_query("SELECT * from usuario JOIN pessoa_jur WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$usu_id' ")or die(mysql_error());
$dadosJur = mysql_fetch_assoc($dados);

$dadosEnd = mysql_query("SELECT * from usuario JOIN endereco WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$usu_id' ")or die(mysql_error());
$dadosEndereco = mysql_fetch_assoc($dadosEnd);

$dadosUser = mysql_query("SELECT * from usuario WHERE usu_id ='$usu_id' ")or die(mysql_error());
$dadosUsuario = mysql_fetch_assoc($dadosUser);

$id = $dadosUsuario['usu_id'];
$email = $dadosUsuario['usu_email'];
$fonecel = $dadosUsuario['usu_foneCel'];
$fonecom = $dadosUsuario ['usu_foneCom'];
$senha1 = $dadosUsuario ['usu_senha'];
$senha =  base64_decode($senha1);
$cpf = $mostraBusca['pessoaFisica_cpf'];
$nome = $mostraBusca['pessoaFisica_nome'];
$usu_id_fis = $mostraBusca['usuario_usu_id'];
$cnpj = $dadosJur['pessoaJur_cnpj'];
$fantasia = $dadosJur['pessoa_jur_nomeFantasia'];
$usu_id_jur = $dadosJur['usuario_usu_id'];
$rua = $dadosEndereco['endereco_rua'];
$cep = $dadosEndereco['endereco_cep'];
$numero = $dadosEndereco['endereco_numero'];
$comp = $dadosEndereco['endereco_comp'];
$usu_id_end = $dadosEndereco['usuario_usu_id'];
//$estado = $dadosEndereco['endereco_estado'];
//$cidade = $dadosEndereco['endereco_cidade'];
?>
<html>
    <head>
        <title>Editar Informações</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">


        <!-- Latest compiled and minified JavaScript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function () {
                var movementStrength = 55;
                var height = movementStrength / $(window).height();
                var width = movementStrength / $(window).width();
                $("#top-image").mousemove(function (e) {
                    var pageX = e.pageX - ($(window).width() / 2);
                    var pageY = e.pageY - ($(window).height() / 2);
                    var newvalueX = width * pageX * -1 - 25;
                    var newvalueY = height * pageY * -1 - 50;
                    $('#top-image').css("background-position", newvalueX + "px     " + newvalueY + "px");
                });
            });

        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#pessoajuridicaform").hide(100);
                $("#pessoafisica").click(function () {//clicando em pessoa fisica
                    $("#pessoajuridicaform").hide(100);
                    $("#pessoafisicaform").show(100);
                });
                $("#pessoajuridica").click(function () {//clicando em pessoa juridica
                    $("#pessoafisicaform").hide(100);
                    $("#pessoajuridicaform").show();//habilita cnpj
                });
            });

        </script>
    </head>

    <body>


<?php
if ($idPessoaF == $usu_id) {
    ?>
                        <form class="cadas" action="Funcoes.php?funcao=6&id=<?php echo $id ?>" method="post" id="pessoafisicaform" >

                            <input type="hidden" name="id" value="<?php echo $nome; ?>" >
                            <div class="form-group">
                                Nome:<input class="form-control" type="text" name="nome" required="required" value="<?php echo $nome; ?>" />
                            </div>
                            <div class="form-group">
                                E-mail: <input class="form-control" type="email" name="email" placeholder="Email" required="required" value="<?php echo $email ?>" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    Tel. Celular: <input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" value="<?php echo $fonecel; ?>"/>
                                </div>
                                <div class="col-6">
                                    Tel. Comercial: <input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" value="<?php echo $fonecom; ?>" />
                                </div>
                                <div class="col-4">
                                    CEP:<input class="form-control" type="text" name="cep" placeholder="CEP" required="required" value="<?php echo $cep; ?>"/>
                                </div>
                                <div class="col-8">
                                    Rua: <input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" value="<?php echo $rua; ?>" />
                                </div>
                                <div class="col-6">
                                    Numero:<input class="form-control" type="text" name="numero" placeholder="Número" required="required" value="<?php echo $numero; ?>"/>
                                </div>
                                <div class="col-6">
                                    Complemento:<input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" value="<?php echo $comp; ?>" />
                                </div>

                            </div>
                            <div class="form-group">
                                CPF: <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF"  title="Digite o CPF no formato 000.000.000-00"   value="<?php echo $cpf; ?>" />
                            </div>
                            <div class="form-group">
                                Senha:<input class="form-control" type="text" name="senha" placeholder="Senha" required="required" value="<?php echo $senha; ?> " />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Salvar" name="atualiza"  />
                                <a  href="../pages/usuario.php?error=0"><input class="btn btn-danger" type="submit" value="Cancelar"/></a>
                            </div>
                        </form>


<?php }if ($idPessoaJ == $usu_id) { ?>

                        <form class="cadas" action="Funcoes.php?funcao=6&id=<?php echo $id ?> " method="post">


                            <div class="form-group">
                                E-mail:<input class="form-control" type="email" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    Tel. Celular:<input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" value="<?php echo $fonecel; ?>"/>
                                </div>
                                <div class="col-6">
                                    Tel. Comercial:<input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" value="<?php echo $fonecom; ?>" />
                                </div>
                                <div class="col-4">
                                    CEP:<input class="form-control" type="text" name="cep" placeholder="CEP" required="required" value="<?php echo $cep; ?>" />
                                </div>
                                <div class="col-8">
                                    Rua:<input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" value="<?php echo $rua; ?>" />
                                </div>
                                <div class="col-6">
                                    Numero:<input class="form-control" type="text" name="numero" placeholder="Número" required="required" value="<?php echo $numero; ?>" />
                                </div>
                                <div class="col-6">
                                    Complemento:<input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" value="<?php echo $comp; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                CNPJ:<input class="form-control" type="text" title="Digite o CNPJ no formato 00.000.000/0000.00" name="cnpj" id="cnpj" /*pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}"*/ placeholder="CNPJ" required="required" value="<?php echo $cnpj; ?>" />
                            </div>
                            <div class="form-group">
                                Nome Fantasia:<input class="form-control" type="text" name="fantasia" id="fantasia" required="required" value="<?php echo $fantasia; ?>" />
                            </div>
                            <div class="form-group">
                                Senha: <input class="form-control" type="text" name="senha" placeholder="Senha" required="required" value="<?php echo $senha; ?>" />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="Salvar" value="Salvar" />
                                <a  href="Funcoes.php?funcao=6&id=<?php echo $id ?>"><input class="btn btn-danger" type="submit" value="Cancelar"/></a>
                            </div>
                        </form>

    <?php
}
?>   



    </body>
</html>



