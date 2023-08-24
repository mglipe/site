
<form action="../controller/ReceiveDataController.php" method="POST">
    <p>Confirmar exclusão do item</p>
    <input type="hidden" name="deletar" value="<?= $_GET["id"];?>">
    <button class="btn btn-info" type="submit">Deletar</button>
</form>