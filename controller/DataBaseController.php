<?php 

class DataBaseController{
    public function __construct(){
        $this->connection();
    }

    private function connection(){
        $this->conn = new PDO("mysql:host=localhost;dbname=site", 'root', '');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->conn;
    }


    public function insert($bind_params){
        try{
            $data = $this->conn->prepare($this->sql);
            $data->execute($bind_params);

            return true;
        }catch(PDOException $e){
            echo $e;

            return false;
        }
    }

    public function select(){
        $list = $this->conn->prepare($this->sql);
        $list->execute();

        $row = $list->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function delete(){
        try{
            $data = $this->conn->prepare($this->sql);
            $data->execute();  
            
            return true;
        }catch(PDOException $e){
            echo $e;

            return false;
        }
    }

    public function update(){
        try{
            $data = $this->conn->prepare($this->sql);
            $data->execute();
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }





}


?>