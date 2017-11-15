<!DOCTYPE html>
<html>
<head>
  <title>Nas Fazendas </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/banner.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="banner/orbit-1.2.3.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  
   
   
  <!-- Attach necessary JS -->
  <script type="text/javascript" src="banner/jquery-1.5.1.min.js"></script>
  <script type="text/javascript" src="banner/jquery.orbit-1.2.3.min.js"></script> 
  <script type="text/javascript">
      $(window).load(function() {
         $('#featured').orbit({
          "bullets" : true,
          "fluid" : true,
          "animation" : "horizontal-push",
          "autostart" : true,
          "caption" : true
        });
       });
  </script>
</head>
<body>
  <button type="button" class="btn btn-info btn-lg" id="feed" data-toggle="modal" data-target="#myModalFeed"></button>
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
    <div class="banner">
        
          <div style="width:100%; height:300px; background-color:transparent;">
            <div class="container" style="width:100%; height:300px">
                <div id="featured" style="width:100%; height:300px" >    
                  <img style="z-index:-999999999; display:table;" src="images/banners.png" width="1300px" alt="" />   
                  <img style="z-index:-999999999; display:table;" src="images/banners.png" width="1300px" alt="" />   
                </div>
            </div>                    
          </div>
    </div>
    <div class="bannerSec">
      <span class="title">Destaques</span>
     
  
  </div>
    </div>
    <div class="anuncios row-fluid">
      <div class="envelope">
        <span class="title">Anuncios</span>
        
        <?php 
          include("admin/files/conexao.php");
          $res = mysql_query("select *from anuncio ")or die(mysql_error());

        while($mostrar = mysql_fetch_assoc($res)){
            $idAnuncio = $mostrar['anuncio_id'];
            $img = mysql_query("SELECT *from anuncio JOIN img_produto  WHERE anuncio_anuncio_id = '$idAnuncio' ")or die(mysql_error());
            $mostrarImg = mysql_fetch_assoc($img);

          ?>
        <div class="destaque row-fluid">
            
            <div style="padding:15px 5px;">

              <center>
                <img style="border:1px solid #999;border-radius:200px;" src="admin/files/user_data/<?php echo $mostrarImg['img_nome']; ?>" width="200" height="200"/>
                <div style="width:100%;height:60px;color:#666; padding:5px 5px; ">
                  <span style="font-size:18px;" ><?php echo $mostrar['anuncio_titulo']; ?></span>
                </div>
                <span style="font-size:20px;color:#666;">
                    <b>Preço </b><br>R$<?php echo $mostrar['anuncio_valor']; ?>
                </span>
                <br>
                <br>
              <a href="anuncio.php?id=<?php echo $mostrar['anuncio_id']; ?>" target="_blank"> 
                <button class="btn-success" href="google.com" >+ Informações</button>
              </a>
              </center> 
          </div>

        </div>
        <?php 

            }//fim while anuncio
        ?>
      </div>
      <br>
      <div class="load">
          <img src="images/loader.gif"  />
      </div>
    </div>
    <div class="row social">
          <div class="face col-md-4">
            <span class="title">Redes Sociais</span>
          </div>
          <div class="categorias col-md-4">
            <span class="title">Categorias</span>
            <ul style="list-style-type:circle;font-weight: bold;">
              <?php 
              $res = mysql_query("SELECT *from categoria")or die(mysql_error());
              while($show = mysql_fetch_assoc($res)):
                $cat = $show['categoria_nome'];
              ?>
              <li><?php echo $cat; ?> </li>
              <?php 
              endwhile;
              ?>
            </ul>
          </div>
          <div class="news col-md-4">
            <span class="title">Newsletter</span>
            <form action="" method="post" style="width:90%;margin:0 auto;padding:0 auto;">
              <small>Informe seu email e receba novidades.</small>
              <div class='form-group'>
                <input class="form-control" type="email" name="news" placeholder="Email"/>
              </div>
              <div class="form-group">
                <input class="form-control" type="submit" name="cadastrar" value="Cadastrar"/>
              </div>
            </form>
          </div>
    </div>
      
      <div id="myModalFeed" style="z-index:99999999999;" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
              <div class="modal-body">
                <p>O que você acha desta pagina?</p>
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-primary ">
                    <img src="images/Pessimo.png" style="width:30%; height:110%">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Pessimo <br>  
                  </label>
                  <label class="btn btn-primary">
                    <img src="images/Ruim.png" style="width:35%; height:100%">
                    <input type="radio" name="options" id="option2" autocomplete="off">Ruim
                  </label>
                  <label class="btn btn-primary">
                    <img src="images/Regular.png" style="width:30%; height:90%">
                    <input type="radio" name="options" id="option3" autocomplete="off">Regular
                  </label>
                  <label class="btn btn-primary">
                    <img src="images/Bom.png" style="width:40%; height: 100%">
                    <input type="radio" name="options" id="option4" autocomplete="off">Bom
                  </label>
                  <label class="btn btn-primary active">
                    <img src="images/Otimo.png" style="width:30%; height:100%">
                    <input type="radio" name="options" id="option5" autocomplete="off">Otimo
                     </label>
                </div>
              </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
    <footer>
      <center>
        <span>&copy;Todos os direitos reservados</span>
      </center>
    </footer>
  </div><!-- row-fluid -->

  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  
</body>
</html>