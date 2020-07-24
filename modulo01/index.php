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
           class Carro{
               public $modelo;
               public $placa;

               public function Resultado() {
               echo"Meu Carro é do modelo ".$this->modelo.", minha placa é".$this->placa;
                }

           }

           $veiculo=new Carro();
           $veiculo->modelo=" uno";
           $veiculo->placa=" UFC-3030";
           $veiculo->Resultado();
            ?>
        </body>
    </html>
