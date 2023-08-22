<?php

$dsn = 'mysql:host=localhost;dbname=php_with_pdo';
$user = "root";
$password = '';

try {

    $conection = new PDO($dsn, $user, $password);

    $query = '
            create table if not exists tb_users(
                id int not null primary key auto_increment,
                name varchar(50) not null,
                email varchar(100) not null,
                password varchar (50) not null
            )
        ';

    $retorno = $conection->exec($query);
    echo $retorno;

    $query = '
                insert into tb_users(
                    name, email, password
                ) values 
                    ("Leo Porto", "leo@hotmail.com", "123456"),
                    ("Leozinho", "leo@hotmail.com", "123456"),
                    ("Leo Fihlo", "leo@hotmail.com", "123456"),
                    ("Isabela", "leo@hotmail.com", "123456");
        ';

    // $query = '
    //     delete from tb_users
    // ';

    $retorno = $conection->exec($query);
    echo $retorno;

} catch (PDOException $e) {
    echo 'Error' . $e->getCode() . 'Message: ' . $e->getMessage();
}
