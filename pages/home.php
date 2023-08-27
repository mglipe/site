	<?php
		// include_once("controller/ReceiveDataController.php");
		// $_rd = new ReceiveDataController;
		// var_dump($_rd);
		//falar - ean lucas pimenteiras
	?>
	<div class="home-noticias">
		<div class="noticia-destaque">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				
				<?php
		
					//consulta no DB 
					$conn = new PDO('mysql:host=localhost;dbname=site', 'root', '');
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$sql = $conn->prepare("SELECT titulo, modulo, imagem_capa from site WHERE modulo = 'noticia-destaque' and status = 1 ");
					
					$sql->execute();
				

				
					
					$row = $sql->fetchAll(PDO::FETCH_ASSOC);
					
					foreach($row as $value){?>
						<div class="carousel-item text-center">
						<img src="<?= @$value["imagem_capa"]?>" alt="First slide">
						<div class="carousel-caption d-md-block bg-dark">
							<a href="/noticias/">
								<h6 class="text-white"><?=@$value["titulo"]?></h6>
							</a>
						</div> 
					</div>

					<?php } ?>

					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
			<script>
				$(".carousel-item:first-child").addClass("active");
			</script>
				
		</div>
			
		<div class="menu-lateral">
			<ul>
				<?php 
					//consulta no DB
					$conn = new PDO('mysql:host=localhost;dbname=site', 'root', '');
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = $conn->prepare("SELECT url, icon, titulo  FROM site WHERE modulo = 'menu-lateral' and status = 1");
					$sql->execute();

					$row = $sql->fetchAll(PDO::FETCH_ASSOC);
			

					foreach($row as $value){?>
						<li>
							<a href="<?= $value["url"] ?>" target="_blank">
								<i class="<?= $value["icon"] ?>"></i> <?= $value["titulo"] ?>
							</a>
						</li>
					<?php } ?>
				
				
			</ul>
		</div>
			
	</div>

	<section class="section-destaques" id="destaques">
		<h1 class="h1-titulo-sessao" data-icon="fa fa-newspaper-o">Notícias em destaque</h1>

		<div class="card-deck">
			<?php 
				//consulta no DB
				$conn = new PDO("mysql:host=localhost;dbname=site;", 'root', '');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = $conn->prepare("SELECT  titulo, modulo, imagem_capa from site WHERE modulo = 'noticia-destaque' LIMIT 3");
				$sql->execute();

				$row = $sql->fetchAll(PDO::FETCH_ASSOC);

				foreach($row as $value){?>
					<div class="card">
						<img src="<?= $value["imagem_capa"]?>">
						<div class="card-body">
							<a href="/noticias/">
								<h6><?= $value["titulo"]?></h6>
							</a>
						</div>
					</div>
				<?php } ?>
				
				
			
				
		
		</div>
	</section>
	
	
	<h1 class="h1-titulo-sessao" data-icon="fa fa-camera-retro" id="fotos">
		Fotos
		<a href="fotos">
			<button style="background:var(--cor-primaria); color: white;" type="button" class="btn btn-light">
				<b>
					Album
				</b>
			</button>
		</a>
	</h1>
	<section class="section-mideas">

		<div class="col-fotos">
			<?php
			//consulta no db
			$conn = new PDO('mysql:host=localhost;dbname=site', 'root', '');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = $conn->prepare("SELECT imagem_capa from site WHERE modulo = 'noticia-destaque' LIMIT 2");
			$sql->execute();

			$row = $sql->fetchAll(PDO::FETCH_ASSOC);
			foreach($row as $value){?>
				<figure class="img-album">
			  		<figcaption><b></b></figcaption>
			  		<p><img src="<?= $value["imagem_capa"]?>"
					alt="St. Tropez">
				</figure>
			

			<?php } ?>

			
		</div>
		
			
	</section>
	<!-- <style>
		figure {
		  text-align: center;
		  font-style: italic;
		  font-size: smaller;
		  text-indent: 0;
		  border: thin silver solid;
		  margin: 0.5em;
		  padding: 0.3em;
		  padding-bottom: 0.5em;
		  width: 473px;
		  height: 380px;
		  display: table-cell;
		}
	</style> -->
	
	<h1 class="h1-titulo-sessao" data-icon="fa fa-video-camera">Vídeos</h1>
	<section class="section-mideas" id="videos">
		<div class="col-fotos">
			
			<?php
			//consulta no db
			?>
				<img src="" alt="..." class="img-thumbnail">
			
		</div>
	</section>

	<section class="section-noticias-gerais" id="noticias">
		<h1 class="h1-titulo-sessao" data-icon="fa fa-newspaper-o">Notícias</h1>
		<ul>
			<?php
				//consulta no DB

				$conn = new PDO('mysql:host=localhost;dbname=site', 'root', '');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
				$sql = $conn->prepare("SELECT date_format(data_cadastro, '%d/%m/%y') data_br, titulo, hash FROM site WHERE modulo='noticia-destaque' LIMIT 4");
				$sql->execute();

				$row = $sql->fetchAll(PDO::FETCH_ASSOC);
				
				foreach($row as $value){?>
					<li data-hoje='' data-noticia=''>
						<a href='/noticias/<?= $value["hash"]?>'> <?= $value["data_br"]?> - <?= $value["titulo"]?></a>
					</li>
				<?php } ?>
					
		
		
			<span id="mostrar_todas_noticias" class="badge badge-info" style="background:#2e377b;cursor: pointer;">Mostrar todas</span>
			
		</ul>
		<script>
			$( "li" ).each(function(){
			  data1 = $(this).attr('data-hoje');
			  data2 = $(this).attr('data-noticia');
			  if(data2 <= data1){
				  $(this).hide();
			  }
			});
			$( "#mostrar_todas_noticias" ).click(function(){
				$( "li" ).each(function(){
				  data1 = $(this).attr('data-hoje');
				  data2 = $(this).attr('data-noticia');
				  if(data2 <= data1){
					  $(this).toggle();
					  // $('#mostrar_todas_noticias').html("Ocultar").addClass("teste");
				  }
				});
			});
			
			
			
		</script>
	</section>	

