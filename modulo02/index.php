<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
            <?php
              class Aluno{
                public $nome;
                public $livro;
                public $serie;

                public function Estudar(){
                echo $this->nome.",está estudando...<br>";
                }

                public function Lendo(){
                echo " Está lendo livro de ".$this->livro.'<br>';
                }
            }

            class Joao extends Aluno{

            }
       
            class Maria extends Aluno{

            }
       
            $joao = new Joao();
            $joao->nome=' João Almeida ';
            $joao->livro='Ciência';
            $joao->serie='3º Ano';
            $joao-> Estudar();
            $joao-> Lendo();
       
            
            $maria = new Maria();
            $maria->nome=' Maria Almeida ';
            $maria->livro='Geografia';
            $maria->serie='2º Ano';
            $maria-> Estudar();
            $maria-> Lendo();
       
       
            ?>
</body>
</html>