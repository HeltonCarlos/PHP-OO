<?php
//connect- conexão com banco de dados

try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
} 
catch (PDOException $e) {
    echo 'banco de dados erro' .$e->getMessage();
}
catch (Exception $e){
    echo 'Erro generico'.$e->getMessage();
}

//insert- inserir no banco de dados


                //1° forma

                $res = $pdo->prepare("INSERT INTO pessoa(nome,telefone,email)VALUES(:n,:t,:e)");

                $res->bindValue(":n", "Helton");
                $res->bindValue(":t", "(75)9.99999-8887");
                $res->bindValue(":e", "helton@gmail.com");
                $res->execute();    

                //2° forma

                $pdo->query("INSERT INTO pessoa(nome,telefone,email) VALUES('Valdice','(75)988888555','val@gmail.com')");



//deletar- deletar no banco de dados
       
                //1° forma
                $del=$pdo->prepare("DELETE FROM pessoa WHERE id = :id");
                $id=10;
                $del->bindValue(":id",$id);
                $del->execute();
                
                //2° forma
                $del=$pdo->query("DELETE FROM pessoa WHERE id ='6'");

//update- mudar no banco de dados

   //1° forma
$mud = $pdo->prepare("UPDATE pessoa SET nome= :n WHERE id=:id");
$mud->bindValue(':n', 'brito');
$mud->bindValue(':id', '7');
$mud->execute();
 //2° forma
$mud= $pdo->query("UPDATE pessoa SET telefone='8888888' WHERE id='7'");

