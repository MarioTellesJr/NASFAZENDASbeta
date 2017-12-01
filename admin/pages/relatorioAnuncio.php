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
                    
                    <h2>Gerar Relatórios</h2>
                    <hr>
                        <form action="" method="post">
                            <input type="text" class="form-control" name="buscar" placeholder="Titulo,valor,data..." required="required"><br>
                        <table style="width:100%;text-align:center;">
                            <tr>
                           

                            <td><label>Categoria</label></td>
                            <td>
                                <select name="Distrito" size="1" width="180" class="COMBODISTCSS form-control" id="COMBOFAB" tabindex="1">
                                    <option value="0">Escolha uma Categoria</option>
                                    <?php
                                        $formCateg = mysql_query("SELECT *FROM categoria ")or die(mysql_error());
                                        while($mostraCat = mysql_fetch_assoc($formCateg)):
                                            $ct = $mostraCat['categoria_nome'];
                                    ?>
                                    <option value="<?php echo $ct; ?>">Atividade <?php echo $ct; ?></option>
                                    <?php 
                                        endwhile;
                                        ?>
                                </select>
                            </td>
                            <td><label>SubCategoria</label></td>
                                <td>
                                    <select name="Concelho" size="1" width="195" class="COMBOCONCCSS form-control" id="COMBOCID" tabindex="1">
                                        <option data-distrito="0" value="0">Escolha uma subcategoria</option>
                                        <option data-distrito="interna" value="Negociação">Negociação</option>
                                        <option data-distrito="interna" value="Atualizar cadastro SGE">Atualizar Cadastros SGE</option>
                                        <option data-distrito="interna" value="Organizar documentos">Organizar Documentos</option>
                                        <option data-distrito="interna" value="Pós vendas">Pós vendas</option>
                                        <option data-distrito="interna" value="Contato com cliente">Contato Cliente</option>
                                       
                                        <option data-distrito="externa" value="Distribuição de materiais">Distribuições de Materiais</option>
                                        <option data-distrito="externa" value="Visita em empresa">Visitas Empresas</option>
                                        <option data-distrito="externa" value="Viagens">Viagens</option>
                                        
                                        <option data-distrito="estrategia" value="Participação em evento">Participação em Evento</option>
                                        <option data-distrito="estrategia" value="Campanha publicitária">Campanha Publicitaria</option>
                                        <option data-distrito="estrategia" value="Ações sazonais">Ações Sazonais</option>
                                    
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td><label>Data Início</label></td>
                                <td><input type="date" name="start"  required class="form-control"/></td>
                                <td><label>Data Final</label></td>
                                <td><input type="date" name="end"  required class="form-control"/></td>
                               
                                
                            </tr>
                            
                        </table>
                            <button type="submit" value="buscar" class="btn btn-success">Buscar</button>
                        </form>
                        <?php
                            if(isset($_POST['buscar'])){
                        ?>
                        <hr>
                        <h2>Relatório</h2>
                        <hr>
                        <table class="table table-bordered" style="font-size:13px;">
                        <tr>
                            <th style="text-align:center;">#id</th>
                            <th style="text-align:center;">Titulo</th>
                            <th style="text-align:center;">Descrição</th>
                            <th style="text-align:center;">Preço</th>
                            <th style="text-align:center;" >Data Postagem</th>
                            <th style="text-align:center;">Data Expira</th>
                            <th style="text-align:center;">Status</th>
                            <th style="text-align:center;">Total Imagens</th>
                            <th style="text-align:center;">Ação</th>
                        </tr>
                        <?php 

                            $res =mysql_query("SELECT *FROM anuncio ORDER BY anuncio_id DESC LIMIT 10")or die(mysql_error());
                            while($mostrar = mysql_fetch_assoc($res)):
                                $id = $mostrar['anuncio_id'];
                                $titulo = $mostrar['anuncio_titulo'];
                                $desc = $mostrar['anuncio_desc'];
                                $valor = $mostrar['anuncio_valor'];
                                $data = $mostrar['anuncio_datainicial'];
                                $data = date('d-m-Y', strtotime($data));
                                $dataFinal = $mostrar['anuncio_datafinal'];
                                $dataFinal = date('d-m-Y', strtotime($dataFinal));
                                $forma = $mostrar['anuncio_formPag'];

                                $resImg = mysql_query("SELECT COUNT(*) as total FROM img_produto WHERE anuncio_anuncio_id = '$id'")or die(mysql_error());
                                $mostrarImg = mysql_fetch_assoc($resImg);
                                $totalImg = $mostrarImg['total'];


                        ?>
                         <tr>
                            <th > <?php echo $id ?> </th>
                            <th > <?php echo $titulo ?> </th>
                            <th > <?php echo $desc; ?> </th>
                            <th > <?php echo $valor;  ?> </th> 
                            <th > <?php echo $data; ?> </th>
                            <th > <?php echo $dataFinal; ?> </th>
                            <th > <?php echo $forma; ?> </th>
                            <th > <?php echo "Imagens ( " .$totalImg." )"; ?> </th>
                            <th style="text-align:center;">
                                <a href="editarAnuncio.php?id=<?php echo $id; ?>" data-toggle="modal" title="PDF">
                                <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                </a>
                               
                               
                            </th>
                        </tr>
                   
                        <?php 
                            endwhile;
                        }else{
                         ?>
                            <small>Realize uma consulta primeiro!</small>
                        
                        <?php }

                        ?>
                    </fieldset>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    
                </div><!-- /#col-lg3 -->
            </div> <!-- /#row -->
   

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
