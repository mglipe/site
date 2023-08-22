	<div class="home-noticias">
		<div class="noticia-destaque">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				
				<?
					//consulta no DB 
					?>
					<div class="carousel-item text-center">
						<img  src="" alt="First slide">
						<div class="carousel-caption d-md-block bg-dark">
							<a href="/noticias/">
								<h6 class="text-white"></h6>
							</a>
						</div> 
					</div>
				
				</div>
				
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			<script>
				$(".carousel-item:first-child").addClass("active");
			</script>
				
		</div>
			
		<div class="menu-lateral">
			<ul>
				<? 
					//consulta no DB
						?>
						<li>
							<a href="<?= $_item[url] ?>" target="_blank">
								<i class="<?= $_item[icon] ?>"></i> <?= $_item[titulo] ?>
							</a>
						</li>
					
				
			</ul>
		</div>
			
	</div>

	<section class="section-destaques" id="destaques">
		<h1 class="h1-titulo-sessao" data-icon="fa fa-newspaper-o">Notícias em destaque</h1>

		<div class="card-deck">
			<? 
				//consulta no DB
					?>
					<div class="card">
						<img src="">
						<div class="card-body">
							<a href="/noticias/">
								<h6></h6>
							</a>
						</div>
					</div>
				
		
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
			<? 
			//consulta no db
			?>
			<figure class="img-album">
			  <figcaption><b></b></figcaption>
			  <p><img src=""
				alt="St. Tropez">
			</figure>
			
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
			
			<? 
			//consulta no db
			?>
				<img src="" alt="..." class="img-thumbnail">
			
		</div>
	</section>

	<section class="section-noticias-gerais" id="noticias">
		<h1 class="h1-titulo-sessao" data-icon="fa fa-newspaper-o">Notícias</h1>
		<ul>
			<?
				//consulta no DB
			?>
					<li data-hoje='' data-noticia=''>
						<a href='/noticias/'>$data_br - {$_noticia[titulo]} </a>
					</li>
		
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

