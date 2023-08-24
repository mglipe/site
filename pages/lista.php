<?php

$_db->sql = "SELECT id,titulo, subtitulo, modulo FROM site";
$list = $_db -> select();
?>

<table class="table">
    <thead>
        <tr>
            <td>Titulo</td>
            <td>Subtitulo</td>
            <td>Modulo</td>
            <td>Ação</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($list as $data){?>
            <tr>
                <td><?=$data["titulo"]?></td>
                <td><?=$data["subtitulo"]?></td>
                <td><?=$data["modulo"]?></td>
                <td>
                    <div class="d-flex felx-row">
                        <a class="fa fa-info-circle ml-2" href="/detalhes/<?=$data["id"]?>"></a>
                        <a class="fa fa-pencil ml-2" href="/contato/<?=$data["id"]?>"></a>
                        <a class="fa fa-trash ml-2" href="/deletar/<?=$data["id"]?>"></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
        
    </tbody>


</table>
