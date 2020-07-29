<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Newsletter{
            public function cadastrarEmail($mail) {
                if(!filter_var($mail,FILTER_VALIDATE_EMAIL) ){
                    throw  new Exception("Não pega");
                }else{
                    echo 'Email cadastrado';
                }
            }
        }
        
        $newl = new Newsletter();
       
        try{
            $newl->cadastrarEmail("contato@gmail.com");
        } catch (Exception $e){
            echo $e->getMessage();
        }
        ?>
    </body>
</html>
