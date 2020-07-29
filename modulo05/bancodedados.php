<?php


try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
} 
catch (PDOException $e) {
    echo 'banco de dados erro' .$e->getMessage();
}
catch (Exception $e){
    echo 'Erro generico'.$e->getMessage();
}