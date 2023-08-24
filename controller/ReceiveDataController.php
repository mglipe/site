<?Php
    #die("aqui");
    include_once('DataBaseController.php');

    $_rd = new ReceiveDataController;

    

class ReceiveDataController{



    public function __construct(){
        $this->_db = new DataBaseController;
        
    }

    public function salvar(){
        $this->_db->sql = "INSERT INTO site (titulo, subtitulo, modulo) VALUES (?, ?, ?);";
        
        if($this->_db -> insert([$_POST["title"], $_POST["subtitle"], $_POST["module"]])){
            echo "<script>alert('salvo')</script>";
            echo "<script>window.location.href = '/lista' </script>";
            
        }else{
            echo "<strong>erro db</storng>";
        } 
    }


    public function deletar(){
        $this->_db->sql = "DELETE FROM site WHERE id = {$_POST['deletar']}";
        
        if($this->_db -> delete()){
            echo "<script>alert('deletado')</script>";
            echo "<script>window.location.href = '/lista' </script>";
        }else{
            echo "<strong>erro db</storng>";
        }
    }

    public function atualizar(){
        $this->_db->sql = "UPDATE site SET titulo = '{$_POST["title"]}', subtitulo = '{$_POST["subtitle"]}', modulo = '{$_POST["module"]}' WHERE id = {$_POST["editar"]}";
     
        if($this->_db -> update()){
            echo "<script>alert('atualizado')</script>";
            echo "<script>window.location.href = '/lista'</script>";
        }
        
       
    }

    public function selecionar($id) {
        $this->_db->sql = "SELECT * FROM site WHERE id = $id ";
        $list = $this->_db -> select();
        return $list;
    }



    public function buscar($termo){
        $this->_db->sql = "SELECT *, date_format(data_cadastro, '%d/%m/%y') data_br FROM site WHERE titulo LIKE '%$termo%' AND status ORDER BY id DESC";
        $list = $this->_db -> select();

        return $list;
    }

    


}

//execute just through of the method POST and GET, directly in URL is not permission
$post = array_keys($_POST);
$action = @$post[0];
    if($action == "salvar"){
        $_rd -> salvar();
    }if($action == "deletar"){
        $_rd -> deletar();
    }if($action == "editar"){
        $_rd -> atualizar();
    }if ($_GET){
        
    }
    else{
        die("acesso negado");
    }






?>