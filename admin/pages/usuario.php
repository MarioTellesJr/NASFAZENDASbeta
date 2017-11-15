<?php
    include("../files/conexao.php");
    session_start();
    require_once("../verifica.php");
    $email = $_SESSION['LOGIN_USUARIO'];
    $res = mysql_query("SELECT *from usuario as u JOIN pessoa_fisica as pf WHERE usu_email = '$email' AND u.usu_id = pf.usuario_usu_id " );
    $show = mysql_fetch_assoc($res);
    $nomePF = $show['pessoaFisica_nome'];
   // $nomeJUR = $show['pessoa_jur_nomeFantasia'];
    

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NAS FAZENDAS PAINEL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){
           
                 $('#mydiv').fadeOut(5000);
            });
        
 
   </script>

</head>

<body>

    <div id="wrapper">
        

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #275b2f;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:#fff;">Painel Admin NASFAZENDAS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile "<?php  echo $nomePF; ?>"</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logoff.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Anúncios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="anuncio.php">Gerenciar Anúncios</a>
                                </li>
                                <li>
                                    <a href="relatorioAnuncio.php">Relatórios</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="categoria.php"><i class="fa fa-table fa-fw"></i> Categorias</a>
                        </li>
                        <li>
                            <a href="qualificar.php"><i class="fa fa-edit fa-fw"></i>Qualificações</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Financeiro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pagamentoEfetuado.php">Pagementos Efetuados</a>
                                </li>
                                <li>
                                    <a href="pagamentoAreceber.php">Pagementos a receber</a>
                                </li>
                                 <li>
                                    <a href="relatorioPagamento.php">Relatórios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="favorito.php"><i class="fa fa-gittip fa-fw"></i>Meus Favoritos</a>
                           
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Usuários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="usuario.php">Gerenciar Usuários</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                        <?php 
                        error_reporting(0);
                    $erro = $_GET['error'];
                    switch ($erro) {
                    case 0:
                      echo "<div class='alert alert-success' style='position:absolute;width:40%;bottom:-500px;opacity:0.8;left:610px;' id='mydiv' role='alert'><center><span class='glyphicon glyphicon-ok' aria-hidden='true'> </span>Dados atualizados com sucesso!!!</center></div>";
                      break;
                    case 1:
                      echo "<div class='alert alert-danger' style='position:absolute;width:40%;bottom:-500px;opacity:0.8;left:610px;' id='mydiv' role='alert'><center><span class='glyphicon glyphicon-remove' aria-hidden='true'> </span> <b>Erro ao atualizar os dados!</b></center></div>";
                    break;
         }


        ?>
                    <h1 class="page-header">Gerenciar Usuário</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <form action="" method="post">
                    <label>Buscar</label>
                    <input type="text" class="form-control" name="buscar" placeholder="Digite um nome/cpf..." required="required">
                    <button type="submit" value="buscar" class="btn btn-success">Buscar</button>
                </form>
                <?php
                    if(!isset($_POST['buscar'])){
                ?>
                    <table class="table table-bordered" style="font-size:14px;margin-top:20px;">
                <tr>
                    <th style="text-align:center;">Nome</th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">CPF/CNPJ</th>
                    <th style="text-align:center;" >Privilégios</th>
                    <th style="text-align:center;">Ação</th>
                </tr>
                <?php 
                $res = mysql_query("SELECT *FROM usuario as u JOIN pessoa_fisica as pf JOIN pessoa_jur as pj WHERE u.usu_id = pf.usuario_usu_id  OR u.usu_id = pj.usuario_usu_id LIMIT 40")or die(mysql_error());

                $res = mysql_query("SELECT * from usuario")or die(mysql_error());

                $res = mysql_query("SELECT * FROM usuario left join pessoa_fisica on usuario.usu_id = pessoa_fisica.usuario_usu_id left join pessoa_jur on usuario.usu_id = pessoa_jur.usuario_usu_id LIMIT 40")or die(mysql_error());

                $total = mysql_num_rows($res);
                while($resultado = mysql_fetch_assoc($res)){
                    $id = $resultado['usu_id'];
                    $nomeFisica = $resultado['pessoaFisica_nome'];
                    $nomeJur = $resultado['pessoa_jur_nomeFantasia'];
                    $email= $resultado['usu_email'];
                    $cpf = $resultado['pessoaFisica_cpf'];
                    $cnpj = $resultado['pessoaJur_cnpj'];
                    $priv = $resultado['privilegio'];
                
                ?>
                <tr>
                    
                    <th > <?php if($nomeJur == NULL)echo $nomeFisica; else echo $nomeJur; ?> </th>
                    <th > <?php echo $email; ?> </th>
                    <th > <?php if($cnpj == NULL)echo $cpf;else echo $cnpj;  ?> </th> 
                    <th > <?php echo $priv; ?> </th>
                    <th style="text-align:center;">
                        <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg<?php echo $id;?>" data-toggle="modal" title="Editar">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>

                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo $id;?>" title="Excluir">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                        <a href="#" data-toggle="modal" data-target=".bd-info-modal-lg<?php echo $id;?>" title="Mais Informações">
                        </a>
                        <a href="home.php?go=info&id=<?php echo $id; ?>" data-toggle="modal" title="Mais Informações">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        </a>
                        <a href="home.php?go=email&id=<?php echo $id; ?>" data-toggle="modal" title="Enviar Email">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </a>
                    </th>
                </tr>
                    <!-- [[ MODAL EXCLUIR ]] -->

    <div class="modal fade bd-example-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
         <div class="modal-header">
          <h2 class="modal-title">Deletar Usuário</h2>
          </div>
            <p style="font-size:16px;">Tem certeza que deseja deletar o usuário <span style="padding:5px 5px;border:1px solid;border-radius:20px;width:auto;height:auto;"><?php echo $email ?></span> ? </p>
            <a href="../files/excluir.php?id=<?php echo $id; ?>" ><button class="btn btn-success">Deletar</button></a>
            <a href="" ><button class="btn btn-danger">Cancelar</button></a>
           
        </div>
      </div>
    </div><!-- FIM MODAL EXCLUIR -->

    <!-- [[ MODAL INFORMAÇÕES ]] -->

    <div class="modal fade bd-info-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
         <div class="modal-header">
          <h2 class="modal-title">Informações</h2>
          </div>
            <?php
             $resInfo = mysql_query("SELECT * FROM usuario left join pessoa_fisica on usuario.usu_id = pessoa_fisica.usuario_usu_id left join pessoa_jur on usuario.usu_id = pessoa_jur.usuario_usu_id left join endereco on usuario.usu_id = endereco.usuario_usu_id WHERE usuario.usu_id = '$id'")or die(mysql_error()); 
            $show=mysql_fetch_assoc($resInfo);
                        //$id = $show['usu_id'];
                        $nomeFisica = $show['pessoaFisica_nome'];
                        $nomeJur = $show['pessoa_jur_nomeFantasia'];
                        $email= $show['usu_email'];
                        $cpf = $show['pessoaFisica_cpf'];
                        $cnpj = $show['pessoaJur_cnpj'];
                        $priv = $show['privilegio'];
                        $fone = $show['usu_foneCel'];
                        $foneCom = $show['usu_foneCom'];
                        $rua = $show['endereco_rua'];
                        $cep = $show['endereco_cep'];
                        $num = $show['endereco_numero'];
                        $compl = $show['endereco_comp'];
             ?>
             <h3>Dados pessoais</h3>
             <hr>
             <h4>Nome: <b><?php echo $nomeFisica; ?></b></h4>
             <h4>Email: <b><?php echo $email; ?></b></h4>
             <h4>CPF/CNPJ: <b><?php echo $cpf; ?></b></h4>
             <h4>Celular: <b><?php echo $fone; ?></b></h4>
             <hr>
             <h3>Endereço</h3>
             <hr>
             <h4>Rua: <b><?php echo $rua; ?></b></h4>
             <h4>Número: <b><?php echo $num; ?></b></h4>
             <h4>CEP: <b><?php echo $cep; ?></b></h4>
             <h4>Complemento: <b><?php echo $compl; ?></b></h4>
             
            <a href="" ><button class="btn btn-danger">Fechar</button></a>
           
        </div>
      </div>
    </div><!-- FIM MODAL Informações -->

    <!-- [[ MODAL EDITAR ]] -->

    <div class="modal fade bd-edit-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
         <div class="modal-header">
          <h2 class="modal-title">Editar</h2>
         
          </div>
                <?php
                $pegaId = mysql_query("SELECT usuario_usu_id from usuario JOIN pessoa_fisica WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $mostrarFis = mysql_fetch_assoc($pegaId);
                $idPessoaF = $mostrarFis['usuario_usu_id'];

                $pegaIdJ = mysql_query("SELECT usuario_usu_id from usuario JOIN pessoa_jur WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $mostrarJur = mysql_fetch_assoc($pegaIdJ);
                $idPessoaJ = $mostrarJur['usuario_usu_id'];

                $busca = mysql_query("SELECT * from usuario JOIN pessoa_fisica WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $mostraBusca = mysql_fetch_assoc($busca);

                $dados = mysql_query("SELECT * from usuario JOIN pessoa_jur WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $dadosJur = mysql_fetch_assoc($dados);

                $dadosEnd = mysql_query("SELECT * from usuario JOIN endereco WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $dadosEndereco = mysql_fetch_assoc($dadosEnd);

                $dadosUser = mysql_query("SELECT * from usuario WHERE usu_id ='$id' ")or die(mysql_error());
                $dadosUsuario = mysql_fetch_assoc($dadosUser);

                //$id = $dadosUsuario['usu_id'];
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
                
if ($idPessoaF == $id) {
    ?>
                        <form class="cadas" action="../files/Funcoes.php?funcao=6&id=<?php echo $id ?>" method="post" id="pessoafisicaform" >

                            <input type="hidden" name="id" value="<?php echo $nome; ?>" >
                            <div class="form-group">
                                Nome:<input class="form-control" type="text" name="nome" required="required" value="<?php echo $nome; ?>" />
                            </div>
                            <div class="form-group">
                                E-mail: <input class="form-control" type="email" name="email" placeholder="Email" required="required" value="<?php echo $email ?>" />
                            </div>
                           
                                <div class="form-group">
                                    Tel. Celular: <input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" value="<?php echo $fonecel; ?>"/>
                                </div>
                                <div class="form-group">
                                    Tel. Comercial: <input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" value="<?php echo $fonecom; ?>" />
                                </div>
                                <div class="form-group ">
                                    CEP:<input class="form-control" type="text" name="cep" placeholder="CEP" required="required" value="<?php echo $cep; ?>"/>
                                </div>
                                <div class="form-group">
                                    Rua: <input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" value="<?php echo $rua; ?>" />
                                </div>
                                <div class="form-group">
                                    Numero:<input class="form-control" type="text" name="numero" placeholder="Número" required="required" value="<?php echo $numero; ?>"/>
                                </div>
                                <div class="form-group">
                                    Complemento:<input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" value="<?php echo $comp; ?>" />
                                </div>

                           
                            <div class="form-group">
                                CPF: <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF"  title="Digite o CPF no formato 000.000.000-00"   value="<?php echo $cpf; ?>" />
                            </div>
                            <div class="form-group">
                                Senha:<input class="form-control" type="text" name="senha" placeholder="Senha" required="required" value="<?php echo $senha; ?> " />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Salvar" name="atualiza"  />
                                <a  href="../pages/usuario.php"><input class="btn btn-danger" type="submit" value="Cancelar"/></a>
                            </div>
                        </form>


<?php }
if ($idPessoaJ == $id) { ?>

                        <form class="cadas" action="../files/Funcoes.php?funcao=6&id=<?php echo $id ?> " method="post">


                            <div class="form-group">
                                E-mail:<input class="form-control" type="email" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>" />
                            </div>
                            
                                <div class="form-group">
                                    Tel. Celular:<input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" value="<?php echo $fonecel; ?>"/>
                                </div>
                                <div class="form-group">
                                    Tel. Comercial:<input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" value="<?php echo $fonecom; ?>" />
                                </div>
                                <div class="form-group">
                                    CEP:<input class="form-control" type="text" name="cep" placeholder="CEP" required="required" value="<?php echo $cep; ?>" />
                                </div>
                                <div class="form-group">
                                    Rua:<input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" value="<?php echo $rua; ?>" />
                                </div>
                                <div class="form-group">
                                    Numero:<input class="form-control" type="text" name="numero" placeholder="Número" required="required" value="<?php echo $numero; ?>" />
                                </div>
                                <div class="form-group">
                                    Complemento:<input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" value="<?php echo $comp; ?>" />
                                </div>
                           
                            <div class="form-group">
                                CNPJ:<input class="form-control" type="text" title="Digite o CNPJ no formato 00.000.000/0000.00" name="cnpj" id="cnpj" /*pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}"*/ placeholder="CNPJ" required="required" value="<?php echo $cnpj; ?>" />
                            </div>
                            <div class="form-group">
                                Nome Fantasia:<input class="form-control" type="text" name="fantasia" id="fantasia" required="required" value="<?php echo $fantasia; ?>" />
                            </div>
                            <div class="form-group">
                                Senha: <input class="form-control" type="text" name="senha" placeholder="Senha" required="required" value="<?php echo $senha1; ?>" />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="Salvar" value="Salvar" /> 
                            </div>

                        </form>
                         <a href="usuario.php" ><button class="btn btn-danger">Cancelar</button></a>

            <?php
        }
        ?>   
            
           
        </div>
      </div>
    </div><!-- FIM MODAL Editar -->
                <?php } //fim while ?>
            </table>
            <?php 
                }//fim if
                else{
            ?>
                <h2>Resultado da busca...</h2>
                
                <?php
                    $info = $_POST['buscar'];
                    $res = mysql_query("SELECT * FROM usuario left join pessoa_fisica on usuario.usu_id = pessoa_fisica.usuario_usu_id left join pessoa_jur on usuario.usu_id = pessoa_jur.usuario_usu_id WHERE (pessoaFisica_cpf LIKE '%$info%' OR pessoaJur_cnpj LIKE '%$info%' OR pessoaFisica_nome LIKE '%$info%') ");
                    if(mysql_num_rows($res)>0){ ?>
                        <table class="table table-bordered" style="font-size:14px;margin-top:20px;">
                        <tr>
                            <th style="text-align:center;">Nome</th>
                            <th style="text-align:center;">Email</th>
                            <th style="text-align:center;">CPF/CNPJ</th>
                            <th style="text-align:center;" >Privilégios</th>
                            <th style="text-align:center;">Ação</th>
                        </tr>

                    <?php
                        while($show=mysql_fetch_assoc($res)):
                        $id = $show['usu_id'];
                        $nomeFisica = $show['pessoaFisica_nome'];
                        $nomeJur = $show['pessoa_jur_nomeFantasia'];
                        $email= $show['usu_email'];
                        $cpf = $show['pessoaFisica_cpf'];
                        $cnpj = $show['pessoaJur_cnpj'];
                        $priv = $show['privilegio'];
                   
                ?>
                
                 <tr>
                    
                    <th > <?php if($nomeJur == NULL)echo $nomeFisica; else echo $nomeJur; ?> </th>
                    <th > <?php echo $email; ?> </th>
                    <th > <?php if($cnpj == NULL)echo $cpf;else echo $cnpj;  ?> </th> 
                    <th > <?php echo $priv; ?> </th>
                    <th style="text-align:center;">
                        <a href="home.php?go=edit&id=<?php echo $id; ?>" data-toggle="modal" title="Editar">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>
                        <a href="../files/excluir.php?id=<?php echo $id; ?>" data-toggle="modal" title="Excluir">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                        <a href="home.php?go=info&id=<?php echo $id; ?>" data-toggle="modal" title="Mais Informações">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        </a>
                        <a href="home.php?go=email&id=<?php echo $id; ?>" data-toggle="modal" title="Enviar Email">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </a>
                    </th>
                </tr>
            <?php endwhile; ?>
            </table>
                <a href="usuario.php"><button class="btn btn-primary" >Voltar</button></a>
            <?php    
               }else{
                    echo "<small>Nunhum resultado encontrado</small>"; ?>
                    <br>
                    <a href="usuario.php"><button class="btn btn-primary" >Voltar</button></a>
            <?php
               }
             }//fim else
            ?>
                </div><!-- /#col-lg3 -->
            </div> <!-- /#row -->

    <!-- [[ MODAL EXCLUIR ]] -->

    <div class="modal fade bd-example-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
         <div class="modal-header">
          <h2 class="modal-title">Deletar Usuário</h2>
          </div>
            <p style="font-size:16px;">Tem certeza que deseja deletar o usuário <span style="padding:5px 5px;border:1px solid;border-radius:20px;width:auto;height:auto;"><?php echo $email ?></span> ? </p>
            <a href="../files/excluir.php?id=<?php echo $id; ?>" ><button class="btn btn-success">Deletar</button></a>
            <a href="" ><button class="btn btn-danger">Cancelar</button></a>
           
        </div>
      </div>
    </div><!-- FIM MODAL EXCLUIR -->

    <!-- [[ MODAL INFORMAÇÕES ]] -->

    <div class="modal fade bd-info-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
         <div class="modal-header">
          <h2 class="modal-title">Informações</h2>
          </div>
            <?php
             $resInfo = mysql_query("SELECT * FROM usuario left join pessoa_fisica on usuario.usu_id = pessoa_fisica.usuario_usu_id left join pessoa_jur on usuario.usu_id = pessoa_jur.usuario_usu_id left join endereco on usuario.usu_id = endereco.usuario_usu_id WHERE usuario.usu_id = '$id'")or die(mysql_error()); 
            $show=mysql_fetch_assoc($resInfo);
                        //$id = $show['usu_id'];
                        $nomeFisica = $show['pessoaFisica_nome'];
                        $nomeJur = $show['pessoa_jur_nomeFantasia'];
                        $email= $show['usu_email'];
                        $cpf = $show['pessoaFisica_cpf'];
                        $cnpj = $show['pessoaJur_cnpj'];
                        $priv = $show['privilegio'];
                        $fone = $show['usu_foneCel'];
                        $foneCom = $show['usu_foneCom'];
                        $rua = $show['endereco_rua'];
                        $cep = $show['endereco_cep'];
                        $num = $show['endereco_numero'];
                        $compl = $show['endereco_comp'];
             ?>
             <h3>Dados pessoais</h3>
             <hr>
             <h4>Nome: <b><?php echo $nomeFisica; ?></b></h4>
             <h4>Email: <b><?php echo $email; ?></b></h4>
             <h4>CPF/CNPJ: <b><?php echo $cpf; ?></b></h4>
             <h4>Celular: <b><?php echo $fone; ?></b></h4>
             <hr>
             <h3>Endereço</h3>
             <hr>
             <h4>Rua: <b><?php echo $rua; ?></b></h4>
             <h4>Número: <b><?php echo $num; ?></b></h4>
             <h4>CEP: <b><?php echo $cep; ?></b></h4>
             <h4>Complemento: <b><?php echo $compl; ?></b></h4>
             
            <a href="" ><button class="btn btn-danger">Fechar</button></a>
           
        </div>
      </div>
    </div><!-- FIM MODAL Informações -->

    <!-- [[ MODAL EDITAR ]] -->

    <div class="modal fade bd-edit-modal-lg<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
         <div class="modal-header">
          <h2 class="modal-title">Editar</h2>
          </div>
                <?php
                $pegaId = mysql_query("SELECT usuario_usu_id from usuario JOIN pessoa_fisica WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $mostrarFis = mysql_fetch_assoc($pegaId);
                $idPessoaF = $mostrarFis['usuario_usu_id'];

                $pegaIdJ = mysql_query("SELECT usuario_usu_id from usuario JOIN pessoa_jur WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $mostrarJur = mysql_fetch_assoc($pegaIdJ);
                $idPessoaJ = $mostrarJur['usuario_usu_id'];

                $busca = mysql_query("SELECT * from usuario JOIN pessoa_fisica WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $mostraBusca = mysql_fetch_assoc($busca);

                $dados = mysql_query("SELECT * from usuario JOIN pessoa_jur WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $dadosJur = mysql_fetch_assoc($dados);

                $dadosEnd = mysql_query("SELECT * from usuario JOIN endereco WHERE usu_id = usuario_usu_id AND usuario_usu_id ='$id' ")or die(mysql_error());
                $dadosEndereco = mysql_fetch_assoc($dadosEnd);

                $dadosUser = mysql_query("SELECT * from usuario WHERE usu_id ='$id' ")or die(mysql_error());
                $dadosUsuario = mysql_fetch_assoc($dadosUser);

                //$id = $dadosUsuario['usu_id'];
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
                
if ($idPessoaF == $id) {
    ?>
                        <form class="cadas" action="../files/Funcoes.php?funcao=6&id=<?php echo $id ?>" method="post" id="pessoafisicaform" >

                            <input type="hidden" name="id" value="<?php echo $nome; ?>" >
                            <div class="form-group">
                                Nome:<input class="form-control" type="text" name="nome" required="required" value="<?php echo $nome; ?>" />
                            </div>
                            <div class="form-group">
                                E-mail: <input class="form-control" type="email" name="email" placeholder="Email" required="required" value="<?php echo $email ?>" />
                            </div>
                           
                                <div class="form-group">
                                    Tel. Celular: <input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" value="<?php echo $fonecel; ?>"/>
                                </div>
                                <div class="form-group">
                                    Tel. Comercial: <input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" value="<?php echo $fonecom; ?>" />
                                </div>
                                <div class="form-group ">
                                    CEP:<input class="form-control" type="text" name="cep" placeholder="CEP" required="required" value="<?php echo $cep; ?>"/>
                                </div>
                                <div class="form-group">
                                    Rua: <input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" value="<?php echo $rua; ?>" />
                                </div>
                                <div class="form-group">
                                    Numero:<input class="form-control" type="text" name="numero" placeholder="Número" required="required" value="<?php echo $numero; ?>"/>
                                </div>
                                <div class="form-group">
                                    Complemento:<input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" value="<?php echo $comp; ?>" />
                                </div>

                           
                            <div class="form-group">
                                CPF: <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF"  title="Digite o CPF no formato 000.000.000-00"   value="<?php echo $cpf; ?>" />
                            </div>
                            <div class="form-group">
                                Senha:<input class="form-control" type="text" name="senha" placeholder="Senha" required="required" value="<?php echo $senha; ?> " />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Salvar" name="atualiza"  />
                                <a  href="../pages/usuario.php"><input class="btn btn-danger" type="submit" value="Cancelar"/></a>
                            </div>
                        </form>


<?php }
if ($idPessoaJ == $id) { ?>

                        <form class="cadas" action="../files/Funcoes.php?funcao=6&id=<?php echo $id ?> " method="post">


                            <div class="form-group">
                                E-mail:<input class="form-control" type="email" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>" />
                            </div>
                            
                                <div class="form-group">
                                    Tel. Celular:<input class="form-control" type="text" name="fone" placeholder="Telefone" required="required" value="<?php echo $fonecel; ?>"/>
                                </div>
                                <div class="form-group">
                                    Tel. Comercial:<input class="form-control" type="text" name="fonecom" placeholder="Telefone Comercial" required="required" value="<?php echo $fonecom; ?>" />
                                </div>
                                <div class="form-group">
                                    CEP:<input class="form-control" type="text" name="cep" placeholder="CEP" required="required" value="<?php echo $cep; ?>" />
                                </div>
                                <div class="form-group">
                                    Rua:<input class="form-control" type="text" name="rua" placeholder="Rua, Av..." required="required" value="<?php echo $rua; ?>" />
                                </div>
                                <div class="form-group">
                                    Numero:<input class="form-control" type="text" name="numero" placeholder="Número" required="required" value="<?php echo $numero; ?>" />
                                </div>
                                <div class="form-group">
                                    Complemento:<input class="form-control" type="text" name="complemento" placeholder="Complemento, Apt, casa..." required="required" value="<?php echo $comp; ?>" />
                                </div>
                           
                            <div class="form-group">
                                CNPJ:<input class="form-control" type="text" title="Digite o CNPJ no formato 00.000.000/0000.00" name="cnpj" id="cnpj" /*pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}"*/ placeholder="CNPJ" required="required" value="<?php echo $cnpj; ?>" />
                            </div>
                            <div class="form-group">
                                Nome Fantasia:<input class="form-control" type="text" name="fantasia" id="fantasia" required="required" value="<?php echo $fantasia; ?>" />
                            </div>
                            <div class="form-group">
                                Senha: <input class="form-control" type="text" name="senha" placeholder="Senha" required="required" value="<?php echo $senha1; ?>" />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="Salvar" value="Salvar" /> 
                            </div>

                        </form>
                         <a href="" ><button class="btn btn-danger">Cancelar</button></a>

    <?php
}
?>   
            
           
        </div>
      </div>
    </div><!-- FIM MODAL Editar -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
