<!DOCTYPE html>
<html>
<head>
	<title>Nas Fazendas</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="banner/orbit-1.2.3.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>
  
  <!--  galery -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/demo.css" />
  <script src="js/vendor/modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <!-- xzoom plugin here -->
  <script type="text/javascript" src="admin/dist/xzoom.min.js"></script>
  <link rel="stylesheet" type="text/css" href="admin/dist/xzoom.css" media="all" /> 
  <!-- hammer plugin here -->
  <script type="text/javascript" src="hammer.js/1.0.5/jquery.hammer.min.js"></script>  
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link type="text/css" rel="stylesheet" media="all" href="fancybox/source/jquery.fancybox.css" />
  <link type="text/css" rel="stylesheet" media="all" href="magnific-popup/css/magnific-popup.css" />
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script>
  <script type="text/javascript" src="magnific-popup/js/magnific-popup.js"></script>
   
   
  <!-- Attach necessary JS -->
</head>
<body>
	<div class="row-fluid">
		<header>
			<div class="logo col-md-3">
				<img src="images/logo.png" width="70" />
        <!--  <img src="images/logo2.png" width="160" />-->
        <!--<img src="images/logo3.png" width="110" />-->
			</div>
				  
	   <div class="search col-md-6">
					<input type="text" class="form-control input-sm" maxlength="64" placeholder="Olá, o que você procura?" />
          <button class="btn">Buscar</button>

		 </div>
				
			<div class="user col-md-3">
				<span><a href="#"> \/ Olá Visitante</a></span>
			</div>
		</header>
			<div id='cssmenu'>
      <ul>
         <li><a href='index.php'>Home</a></li>
         <li class='active'><a href='#'>Máquinarios</a>
            <ul>
               <li><a href='#'>Tratores</a>
                  <ul>
                     <li><a href='#'>Pesados</a></li>
                     <li><a href='#'>Colheitaderas</a></li>
                     <li><a href='#'>Semeadoras</a></li>
                  </ul>
               </li>
               <li><a href='#'>Arados</a>
                  <ul>
                     <li><a href='#'>Sub Product</a></li>
                     <li><a href='#'>Sub Product</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li><a href='#'>Agricultura</a></li>
         <li><a href='#'>Pecuária</a></li>
         <li><a href='#'>Agroindústria</a></li>
         <li><a href='contato.php'>Contato</a></li>
      </ul>
      </div>
   <div class="anuncios row-fluid">
      <div class="envelope">
        <?php 
        include("admin/files/conexao.php");
        $id = $_GET['id'];
        $res = mysql_query("SELECT *FROM anuncio JOIN img_produto WHERE anuncio_id = '$id' AND anuncio_anuncio_id = anuncio_id ")or die(mysql_error());
        $show = mysql_fetch_assoc($res);
        $title = $show['anuncio_titulo'];
        $desc = $show['anuncio_desc'];
        $valor = $show['anuncio_valor'];
        $img = $show['img_nome'];
        //echo $img;
        $anuncio = mysql_query("SELECT *from usuario JOIN anuncio where anuncio_id = '$id' ")or die(mysql_error());
        $mostrar = mysql_fetch_assoc($anuncio);
        $anunciante = $mostrar['usu_email'];
        ?>
       
    
    <!-- magnific start -->
    <section id="magnific" style="width:80%;height:auto;margin:0 auto;padding: 0 auto;background:#fff;border:1px solid #ccc;margin-top:10px;">
    <div class="row">
      
      <div class="large-6 column"  >
        <div class="xzoom-container" >
          
          <img class="xzoom5" id="xzoom-magnific" src="admin/files/user_data/<?php echo $img ;?>" xoriginal="admin/files/user_data/<?php echo $img ;?>" />
          <div class="xzoom-thumbs">
            <?php 
              $imgMini = mysql_query("SELECT *FROM img_produto WHERE anuncio_anuncio_id = '$id' ")or die(mysql_error());
              while($mostrar = mysql_fetch_array($imgMini)):
                $imgThumb = $mostrar['img_nome'];
            ?>
            <a href="admin/files/user_data/<?php echo $imgThumb ;?>"><img class="xzoom-gallery5" width="80" src="admin/files/user_data/<?php echo $imgThumb ;?>"  xpreview="admin/files/user_data/<?php echo $imgThumb ;?>" title="The description goes here"></a>
            <?php endwhile; ?>
            
          </div>
        </div>    
        
      </div>
    <section style="float:left;width:50%; padding:10px 10px;color:#275b2f;">
          <center><span style="font-size:30px;font-height:bold;text-align:center;"><?php echo $title ?></span></center> 
          <h5 style="width:100%;border-bottom:1px solid #275b2f; color:#275b2f">Descrição</h5>

          <div style="text-align:justify;"><?php echo $desc; ?></div>
          <section style="background-color: #ddd;padding:10px 10px;text-align: center;border:1px solid #ccc;">
          <b>Preço R$</b> <?php echo $valor ;?>
          </section><br>
          <span><b>Anunciante:</b></span>
          <?php echo $anunciante ;?><br>
          <button type="button" class="btn btn-sucess" data-toggle="modal" data-target="#myModal">Mensagem</button>
           <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog" style="z-index:99999999999;" >
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                
                <h4 class="modal-title">Mensagem para o vendedor</h4>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <div class=form-group>
                    <input class="form-control" type="text" name="nome" required="required" placeholder="Nome"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="email" required="required" placeholder="Email"/>
                  </div>
                  <div class="form-group"> 
                    <input class="form-control" type="text" name="fone"  required="required" placeholder="Telefone (xx)x xxxx-xxxx"/>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Mensagem"></textarea>
                  </div>
                  <div class="form-group">
                      <input style="margin-top:-5px;" class="btn btn-sucess" type="submit" name="Enviar" value="Enviar"/>
                  </div>
                </form>

              </div>
              <div class="modal-footer" >
                <input style="margin-top:-15px;" type="submit" class="btn btn-danger" value="Fechar" data-dismiss="modal">
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
    </section>    
   
    
    </section>   
    
        
      </div>
    </div>
    <div class="bannerSec">
      <span class="title">Anuncios Relacionados</span>
    </div>
    
    
    <footer>
      <center>
        <span>&copy;Todos os direitos reservados</span>
      </center>
    </footer>
	</div><!-- row-fluid -->

	
    
  <script src="js/foundation.min.js"></script>
  <script src="js/setup.js"></script>

  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
</body>
</html>