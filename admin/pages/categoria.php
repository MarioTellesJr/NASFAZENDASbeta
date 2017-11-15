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
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/styles.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html" style="color:#fff;    ">Painel Admin NASFAZENDAS</a>
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
                    <h1 class="page-header">Categorias</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 ">
                    <form action="../files/Funcoes.php?funcao=3" method="post">
                        <input type="text" class="form-control" name="nome" placeholder="Nome da Categoria" required="required"/>
                        <br>
                        <button type="submit" class="btn btn-success"  >Cadastrar</button>
                    </form>
                <h2>Adicionar Subcategoria</h2>
                <form action="../files/Funcoes.php?funcao=4" method="post">
                <select name="subcategoria" class="form-control">
                    <option>Escolha uma categoria</option>
                <?php
                    $res = mysql_query("SELECT * from categoria")or due(mysql_error());
                    while($most = mysql_fetch_assoc($res)):
                        $id=$most['categoria_id'];
                        $cat=$most['categoria_nome'];
                ?>
                    <option value="<?php echo $id; ?>"><?php echo $cat; ?></option>
                <?php 
                    endwhile;
                ?>
                </select>
                    <br/>
                    <input type="text" class="form-control" name="nome" placeholder="Nome da SubCategoria" required="required"/>
                        <br/>

                        <button type="submit" class="btn btn-success">Cadastrar</button>
                 </form>
                        <h2>Categorias Cadastradas</h2>
                        <table class="table table-bordered" style="font-size:14px;margin-top:20px;">
                            <tr>
                                <th style="text-align:center;">#id</th>
                                <th style="text-align:center;">Categoria</th>
                                <th style="text-align:center;">Subcategoria</th>
                            </tr>
                        <!-- INICIANDO A CATEGORIA -->
                    <?php
                        $res = mysql_query("SELECT * FROM categoria  ")or die(mysql_error());
                        $total = mysql_num_rows($res);
                        while($resultado = mysql_fetch_assoc($res)){
                                    $id = $resultado['categoria_id'];
                                    $nome = $resultado['categoria_nome'];  
                            ?>
                            <tr>
                                <th > <?php echo $id; ?> </th>
                                <th > 
                                    <?php echo $nome; ?> 
                                    <a href="" data-toggle="modal" data-target=".editarCat<?php echo $id?>" title="Editar">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </a>
                                    <a href="" data-toggle="modal" data-target=".excluirCategoria<?php echo $id?>" title="Excluir">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </a>
                                </th>
                                <th> 
                                    <ul> 


                        <!-- INICIANDO SUB CATEGORIA -->
                                         
                                        <?php 
                                                $subCat = mysql_query("SELECT * FROM categoria JOIN subcategoria WHERE categoria_id = categoria_categoria_id AND categoria_categoria_id = '$id'")or die(mysql_error());
                                                while($totalSubCat = mysql_fetch_assoc($subCat)):
                                                    $nomeSub = $totalSubCat['subcat_nome'];
                                                    $idSubCat = $totalSubCat['subcat_id'];
                                        ?>
                                                
                                                <li>
                                        <?php
                                                    echo $nomeSub;
                                        ?>
                                                    <a href="#" data-toggle="modal" data-target=".editarSubCat<?php echo $idSubCat;?>" title="Editar">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target=".excluirSubCategoria<?php echo $idSubCat;?>" title="Excluir">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                            <div class="modal fade excluirSubCategoria<?php if($idSubCat==$idSubCat)echo $idSubCat;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">

                                                        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Deletar Sub-Categoria</h2>
                                                            </div>
                                                                <p style="font-size:16px;">Tem certeza que deseja deletar a Sub-Categoria <span style="padding:5px 5px;border:1px solid;border-radius:20px;width:auto;height:auto;"><?php echo $nomeSub ?></span> ? 
                                                                    <a href="../files/Funcoes.php?funcao=8&id=<?php echo $idSubCat;?>">
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success">Deletar</button>
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                                                                </div>
                                                                </a>
                                                            </p>
                                                        </div>
                                                </div>
                                            </div>
                                             <div class="modal fade editarSubCat<?php if($idSubCat==$idSubCat)echo $idSubCat;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">

                                                        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Alterar Sub-Categoria</h2>
                                                            </div>
                                                                    <p style="font-size:16px;">Nome Atual da Sub-Categoria: <span style="padding:5px 5px;border:1px solid;border-radius:20px;width:auto;height:auto;"> <?php echo $nomeSub ?></span></p>
                                                                    </br>
                                                                    
                                                                        <form action="../files/Funcoes.php?funcao=9" method="post" >
                                                                                <p style="font-size:16px;">Informe o novo nome da Sub-Categoria: <span style="padding:10px 10px;border:1px solid;border-radius:20px;width:auto;height:auto;">
                                                                                <input type="hidden" name="id" value="<?php echo $idSubCat; ?>">
                                                                                <input type="text" name="nomeSub" value="<? echo $nomeSubCat; ?>" required="required">
                                                                                </span> 
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                                                                                </div>
                                                                                
                                                                        </form>
                                                                        </p>    
                                                        </div>
                                                    </div>
                                             </div>
                                            
                                         <?php   
                                                endwhile;
                                        ?> 
                                        
                                        <div class="modal fade excluirCategoria<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">

                                                        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title">Deletar Categoria</h2>
                                                            </div>
                                                                <p style="font-size:16px;">Tem certeza que deseja deletar a Categoria <span style="padding:5px 5px;border:1px solid;border-radius:20px;width:auto;height:auto;"><?php echo $nome ?></span> ? </p>
                                                                <a href="../files/Funcoes.php?funcao=7&id=<?php echo $id; ?>" >
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success">Salvar</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                                                            </div>
                                                        </a>
                                                        </div>
                                                </div>
                                            </div>
                                        <div class="modal fade editarCat<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        </br>
                                                        <div class="modal-content" style="padding:5px 5px;padding-right:25px;">
                                                            </br><div class="modal-header"></br>
                                                                <h2 class="modal-title">Alterar Sub-Categoria</h2>
                                                            </div>
                                                                    <p style="font-size:16px;">Nome Atual da Categoria: <span style="padding:5px 5px;border:1px solid;border-radius:20px;width:auto;height:auto;"> <?php echo $nome ?></span></p>
                                                                    </br>
                                                                     
                                                                        <form action="../files/Funcoes.php?funcao=10" method="post">
                                                                                <div id="inputInvisivel"> <p style="font-size:16px;">Informe o novo nome da Categoria: <span style="padding:10px 10px;border:1px solid;border-radius:20px;width:50px;height:100px;"><input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                                <input type="text" name="nome" value="<? echo $nomeCat; ?>" required="required"></span></p>

                                                                            </div>
                                                                                
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                                                                                </div>
                                                                                
                                                                        </form>  

                                                        </div>
                                                    </div>
                                             </div>
                                     </ul>
                                </th>
                            </tr>
                    <?php 
                    } 
                    ?>

                        
            <?php 
                    include("../files/conexao.php");
                    $sqlCat = mysql_query("SELECT * FROM categoria JOIN subcategoria WHERE categoria_categoria_id ='0'")or die(mysql_error());
                    $categoria = mysql_fetch_assoc($sqlCat);
                    $id=$categoria['categoria_id'];
                    $cat=$categoria['categoria_nome'];
                  
        ?>
            </div>  
        </div>  
    </div>
            
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
