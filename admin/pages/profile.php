<?php
    include("../files/conexao.php");
    session_start();
    require_once("../verifica.php");
    $email = $_SESSION['LOGIN_USUARIO'];
    $dadosUser = mysql_query("SELECT *from usuario WHERE usu_email = '$email'");
    $res = mysql_query("SELECT *from usuario as u JOIN pessoa_fisica as pf WHERE usu_email = '$email' AND u.usu_id = pf.usuario_usu_id " );
    $res2 = mysql_query("SELECT *from usuario as u JOIN pessoa_jur as jur WHERE usu_email = '$email' AND u.usu_id = jur.usuario_usu_id " );
    $show = mysql_fetch_assoc($res);
    $show2 = mysql_fetch_assoc($res2);
    $id2 = mysql_fetch_assoc($dadosUser);
    $id = $id2['usu_id'];
    $nomePF = $show['pessoaFisica_nome'];
    $nomeJur = $show2['pessoa_jur_nomeFantasia'];
    $idJur = $show2['usuario_usu_id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NAS FAZENDAS Editar Perfil</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="../../css/styleFoto.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php" style="color:#fff;">Minha Conta <?php if($id == $idJur ){echo $nomeJur;} else{ echo $nomePF;} ?> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                <!-- /.dropdown -->
                <li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" style="color:white"></i> <i style="color:white" class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> Minha Conta "<?php  if($id == $idJur ){echo $nomeJur;} else{ echo $nomePF;} ?>"</a>
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
                    <ul class="nav" id="side-menu" >
                        
                        <li>
                            <a href=""> <i class="fa fa-gear fa-spin" ></i> Dados Pessoais</a>
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
                                    $sql = mysql_query("SELECT usu_foto from usuario WHERE usu_id = '$id' ")or die(mysql_error());
                                    $mostraBusca = mysql_fetch_assoc($sql);
                                    $foto = $mostraBusca['usu_foto'];
                    ?>

                                    <form action="../files/Funcoes.php?funcao=12&id=<?php if($id == $idJur ){echo $idJur;} else{ echo $id;}?> " method="post" enctype="multipart/form-data">    
                                        <div class="foto">
                                            <img src="../files/uploadsProfile/<?php echo $foto ?>" height="200" width="200" ></img>
                                                <input type="file" name="fileToUpload" id="fileToUpload">   
                                                <input type="submit" value="Salvar Imagem" name="submit">
                                        </div>
                                    </form>
                                
                    
                            <h1 class="page-header">Informacões</h1>
                             <?php

                                    $resInfo = mysql_query("SELECT * FROM usuario left join pessoa_fisica on usuario.usu_id = pessoa_fisica.usuario_usu_id left join pessoa_jur on usuario.usu_id = pessoa_jur.usuario_usu_id left join endereco on usuario.usu_id = endereco.usuario_usu_id WHERE usuario.usu_id = '$id'")or die(mysql_error()); 
                                    $show=mysql_fetch_assoc($resInfo);
                                        $id = $show['usu_id'];
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
                                     <?php if($id == $idJur ){?>
                                     <h4>Nome Fantasia: <b> <?php echo $nomeJur; ?> </b></h4>
                                     <?php } else{  ?>
                                     <h4>Nome: <b> <?php echo $nomePF; ?> </b></h4>
                                    <?php } ?>
                                     <h4>Email: <b><?php echo $email; ?></b></h4>
                                     <h4>CPF/CNPJ: <b><?php if($id == $idJur ){echo $cnpj;} else{ echo $cpf;} ?></b></h4>
                                     <h4>Celular: <b><?php echo $fone; ?></b></h4>
                                     <hr>
                                     <h3>Endereço</h3>
                                     <hr>
                                     <h4>Rua: <b><?php echo $rua; ?></b></h4>
                                     <h4>Número: <b><?php echo $num; ?></b></h4>
                                     <h4>CEP: <b><?php echo $cep; ?></b></h4>
                                     <h4>Complemento: <b><?php echo $compl; ?></b></h4>
                                     </br>
                                     <a href="#" data-target=".bd-edit-modal-lg<?php echo $id;?>" data-toggle="modal">  
                                            <button type="button" class="btn btn-success"><i class="fa fa-edit"></i> Editar</button>
                                    </a> 
                                    <a href="index.php"> 
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </a> 
                                                        
                    
                </div>   
            </div>                
        </div>
    </div>
     
       

    
    <!-- /#wrapper -->
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
                    <form class="cadas" action="../files/Funcoes.php?funcao=11&id=<?php echo $id ?>" method="post" id="pessoafisicaform" >

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
                                <a  href="../pages/profile.php"><input class="btn btn-danger" type="submit" value="Cancelar"/></a>
                            </div>
                        </form>


<?php }
if ($idPessoaJ == $id) { ?>

                        <form class="cadas" action="../files/Funcoes.php?funcao=11&id=<?php echo $id ?> " method="post">


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
                                <a href="" ><button class="btn btn-danger">Cancelar</button></a>

                            </div>
                        </form>
                   
                         
                    

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
