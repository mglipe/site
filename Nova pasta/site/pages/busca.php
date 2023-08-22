<div class="home-noticias">
<?php
	if($_POST[termo] != ""){
		
	
	$_noticia = new DBController;
	
		
		
	?>
	<h1 class="h1-titulo-sessao">Resultado da pesquisa</h1>
	<ul>
		<?php
			$_noticia->sql = "select *, date_format(data_cadastro, '%d/%m/%Y') data_br from site where texto LIKE '%{$_POST[termo]}%' and status = 1 order by id desc";
	
			// $_noticia->sql .= "";
			$_array = $_noticia->select();
			
			if(count($_array) == 0){
				?>
				
				<h6>
					<small> Sem resultado da pesquisa "<?= $_POST[termo] ?>"</small>
				</h6>
					
			<?	
			}else{
				
			
			foreach($_array as $key => $value){
			// var_dump($value);
		?>
		<li>
			<a href="noticias/<?= $value["id"] ?>">
				<h6>
					<small><?= $value["data_br"] ?></small>
					<?= $value["titulo"] ?>
				</h6>
			</a>
		</li>
		<?php
			}
		}
		?>
	</ul>
	<?
	}
	else{
		echo"
			<h1 class='h1-titulo-sessao'>Sem resposta.</h1>
		";
	}
	?>
</div>

<style>
	
		.home-noticias{
			width: 100%;
            height: 200%;
			padding-bottom	: 13px;
            display: flex;
            flex-direction: column;
		}
		
		.home-noticias img{
			max-width : 90%;
		}
		
		.home-noticias ul{
			margin : 0;
			padding : 0;
		}
		.home-noticias ul li{
			list-style : none;
		}
		.home-noticias ul li a{
			font-size		: 13px;
			display 		: block;
			padding 		: 5px 0;
			border-bottom 	: 1px solid #eee;
			color 		: var(--cor-primaria);
			
		}
		.home-noticias ul li a h6{
		}
		
		.foto-diretorio{
			max-width : 30% !important;
			margin : 13px;
		}
		
		.foto-boletim{
			width: 80%;
			margin-left : 10%;
		}
		
		.foto-noticia{
			margin : 13px;
			border : 3px solid #ccc;
			padding : 13px;
			margin-left : 10%;
			width: 80%;
		}
	</style>