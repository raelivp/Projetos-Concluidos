
<?php include "cabecalho.php" ?>

<?php

session_start();


require "../controller/FilmesController.php";
require "../utils/Mensagem.php";


$controller = new FilmesController();
$filmes = $controller->index();

?>


<body>

	<nav class="nav-extended purple lighten-3">
		<div class="nav-wrapper">
		 <ul id="nav-content" class="right">
			<li class="active"><a  href="/">Galeria</a></li>
			<li><a href="/novo">Cadastrar</a></li>        
		 </ul>    	
		</div>
		<div class="nav-header center">
				<h1>CLOROCINE</h1>
			</div>
		<div class="nav-content">
		  <ul class="tabs tabs-transparent #8e24aa purple darken-1">
		  </ul>
		</div>
	</nav>


  <div class="row">

  	<?php	foreach($filmes as $filme) : ?>

			<div class="col s3 ">
			  <div class="card hoverable">
				<div class="card-image">
				  <img src="<?= $filme->poster ?>">
				  <span class="card-title"></span>
				</div>
				<div class="card-content">
					<p class="valign-wrapper">
					<i class="material-icons amber-text">star</i> <?= $filme->nota ?>
					</p>
					<span class="card-title"><?= $filme->titulo ?></span>
					<p><?= $filme->sinopse ?></p>
					
				  <p></p>
				</div>
			  </div>
			</div>
	<?php endforeach ?>
	
  </div>

  
<?= Mensagem::mostrar(); ?>
			

</body>



</html>