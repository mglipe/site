<?php

$dir = 'img/vereadores/';

if(is_dir($dir)) {
	$file = scandir($dir);
	$nameFile = array_diff($file, array('.', '..'));
	$fileCount = count($file) - 2;	
}
?>
<h3 class="kaio" style="text-align:center">
	VEREADORES – 7º LEGISLATURA 2021-2024
</h3>

<div class="teste">
		<!--
<div class='lds-ring'><div></div><div></div><div></div><div></div></div>
-->

<?php

foreach($nameFile as $file){?>
	<div class="responsive">
		<div class="gallery">
			<div class="lds-ring" style="display: none;">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<img class="imagem myImg" name="myImg" src="img/vereadores/<?= $file ?>" alt="Bernardino Geraldo de Carvalho, atual presidente da Câmara Municipal, foi candidato a Vereador em Belém do Piauí nas Eleições 2020 pelo MDB — (Movimento Democrático Brasileiro). Natural de Padre Marcos — PI, Bernardino tem 52 anos, e está em seu sexto mandato como parlamentar, sendo cinco vezes presidente da casa. Resultado segundo o TRE Candidato pelo MDB — (Movimento Democrático Brasileiro) para Vereador, Bernardino Geraldo de Carvalho obteve 208 votos tendo sido eleito Vereador em Belém do Piauí nas&nbsp;Eleições&nbsp;2020." width="600" height="100" style="">
		<div class="desc">BERNARDIN0 GERALDO DE CARVALHO</div>
	</div>
	</div>
<?php } ?>

</div>





