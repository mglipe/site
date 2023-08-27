<?php
  

  if($_GET["id"]){

    include_once('controller/ReceiveDataController.php');
    $_rd = new ReceiveDataController;
    $data = $_rd -> selecionar($_GET["id"]);
   
  }


?>

<h1>Contato</h1>
<section class="d-flex flex-row">
  <div class="col-10">
    <form action="../controller/ReceiveDataController.php" method="POST">
      <input type="hidden" name="<?=$_GET["id"] != null ? "editar" : "salvar"?>" value="<?=$_GET["id"]?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input type="text" name="title" value="<?=@$data[0]["titulo"]?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="exampleInputName">Subtitulo</label>
        <input type="text" name="subtitle" value="<?=@$data[0]["subtitulo"]?>" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter subtitle">
      </div>

      <div class="form-group">
        <label for="exampleInputPhone">Modulo</label>
        <input type="text" name="module" value="<?=@$data[0]["modulo"]?>" class="form-control" id="exampleInputPhone" placeholder="modulo">
      </div>

      

      <div class="d-flex flex-row">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info ml-3 btn-list" href="/lista">List</a>  
      </div>
    </form>
  </div>
</section>


