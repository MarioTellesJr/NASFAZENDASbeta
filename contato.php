<!DOCTYPE html>
<html>
<head>
	<title>Nas Fazendas</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
  
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
        <div class="maps" style="width:50%; float:right;padding:15px 15px;">
          <span class="title">Endereço</span>
        </div>
          <div class="form-contato" style="width:50%; float:right;padding:15px 15px;">
              <span class="title">Contato</span>
              <form action="funcoes.php" method="post">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" >
                <label>Email</label>
                <input class="form-control" type="text" name="email" >
                <label>Assunto</label>
                <input class="form-control" type="text" name="assunto" >
                <label>Mensagem</label><br>
                <textarea class="form-control"></textarea>
                <br>
                <input type="submit" class="btn-success" name="Enviar" value="Enviar" >
              </form>
          </div>
      </div>
    <div class="row social">
          <div class="face col-md-4">
            <span class="title">Redes Sociais</span>
          </div>
          <div class="categorias col-md-4">
            <span class="title">Categorias</span>
          </div>
          <div class="news col-md-4">
            <span class="title">Cadastre-se</span>
          </div>
    </div>
    <footer>
      <center>
        <span>&copy;Todos os direitos reservados</span>
      </center>
    </footer>
	</div><!-- row-fluid -->

	<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>