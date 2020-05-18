<?php
   
     function conexao(){
             try{
                  $conexao = new PDO("mysql:host=localhost;dbname=sofkwanza","root","");
             }catch(PDOException $ex){
                  echo $ex->getMessage();
             }
             return $conexao;
     }

    



?>