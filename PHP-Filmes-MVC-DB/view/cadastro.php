

<?php include "cabecalho.php" ?>



	<body>

		<nav class="nav-extended purple lighten-3">
			<div class="nav-wrapper">
				 <ul id="nav-mobile" class="right">
					<li><a href="/">Galeria</a></li>
					<li class="active"><a href="/novo">Cadastrar</a></li>        
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
		<form action="inserirFilme.php" method="POST" enctype="multipart/form-data">
			<div class="col s6 offset-s3"></div>
				<div class="card ">
					<div class="card-content">
						<span class="card-title">Cadastrar Filme</span>

							<!-- input -->
					<div class="row">
						<div class="input-field col s12">
							<input value="" id="titulo" type="text" class="validate" name="titulo" require>
	          				<label for="titulo">Título do Filme</label>
	          			</div>
	          		</div>


	          		<!-- input text -->
	          		<div class="row">
					    <form class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <textarea id="sinopse" name="sinopse" class="materialize-textarea"></textarea>
					          <label for="sinopse">Sinopse</label>
					        </div>
					      </div>
					    </form>
				  </div>


				  	<!-- input nota -->
				  <div class="row">
						<div class="input-field col s4">
							<input value="" id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" require>
	          				<label for="nota">Nota</label>
	          			</div>
	          		</div>

	          		<!-- Arquivo capa -->

	          		<div class="file-field input-field">

					      <div class="btn-small red">
					        <span>Capa</span>
					        <input type="file" name="poster_file" >
					      </div>

					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" name="poster">
					      </div>

				    </div>

					</div>

					<div class="card-action">
						<a class="btn-small grey" href="filmes.php">Cancelar</a>
						<button class="waves-effect waves-dark btn purple" type="submit">Enviar</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</body>
</html>