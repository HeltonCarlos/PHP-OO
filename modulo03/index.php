<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>self-chamando constante</title>
</head>
<body>
          
               <?php

               class Pessoa{
               const nome="Rodrigo";
                      
                      public function ColocarNome() {
                          echo self::nome;
                      }
               }
          
              $pessoa= new Pessoa();
              $pessoa->ColocarNome();
        
       
            ?>
</body>
</html>