<?php
session_start();
try {
    $pdo =new PDO("mysql:dbname=formulario;host=localhost","root","");
    
} catch (PDOException $e) {
    echo "Erro no banco de dados".$e->getMessage();
} catch (Exception $e){
    echo "Erro no banco de dados".$e->getMessage();
}

$scc= filter_input(INPUT_POST, 'SendCadCount',FILTER_SANITIZE_STRING);
if($scc){
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST,'assunto', FILTER_SANITIZE_STRING);
    $mensagem= filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);
    
    $result="INSERT INTO dados ('nome','email','assunto','mensagem') VALUES (:nome,:email,:assunto,:mensagem)";
        $inser=$pdo->prepare($result);
        $inser->bindParam(':nome',$nome);
        $inser->bindParam(':email',$email);
        $inser->bindParam(':assunto',$assunto);
        $inser->bindParam(':mensagem',$mensagem);
        
        
        if($inser->execute()){
            echo 'Seus dados estão salvos';
        }else{
            echo 'Erro nos dados';
        }
    
}else{
    $_SESSION['msg']='Mensagem não enviada';
    header("location: index.php");
}
