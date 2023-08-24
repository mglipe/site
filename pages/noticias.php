
<section class="section-noticias-gerais" id="noticias">
	<h1 class="h1-titulo-sessao" data-icon="fa fa-newspaper-o">Notícias</h1>
	<ul>
        <?php

            // $conn = new PDO('mysql:host=localhost;dbname=site', 'root', '');
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // $sql = $_db->conn->prepare("SELECT titulo, modulo, date_format(data_cadastro, '%d/%m/%y') data_br, hash FROM site WHERE modulo='noticia-destaque' and status = 1");
            // $sql->execute();

            // $row = $sql->fetchAll(PDO::FETCH_ASSOC);

            //arrow together atribute
            $_db->sql = "SELECT titulo, modulo, date_format(data_cadastro, '%d/%m/%y') data_br, hash FROM site WHERE modulo='noticia-destaque' and status = 1";
            //arrow separate method
            $_notice = $_db -> select();
            
            foreach($_notice as $value){?>
            <li data-hoje='' data-noticia=''>
                <a href='/noticias/<?= $value["hash"]?>'> <?= @$data_br?> - <?= @$value["titulo"]?> </a>
            </li>

            <?php } ?>

    </ul>
