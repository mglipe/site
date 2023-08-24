<?php
    include_once("controller/ReceiveDataController.php");

    if($_GET["id"]){
        $_rd = new ReceiveDataController;
        $data = $_rd -> selecionar($_GET["id"]);
        
    }
    

?>


<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Detalhes
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <strong>Titulo</strong>:<?=$data[0]["titulo"]?><br/>
      <strong>subtitulo</strong>:<?=$data[0]["subtitulo"]?><br/>
      <strong>modulo</strong>:<?=$data[0]["modulo"]?><br/>
      <strong>Texto</strong>:<?=$data[0]["texto"]?><br/>
      <strong>Status</strong>:<?=$data[0]["status"]?><br/>
      </div>
    </div>
  </div>

