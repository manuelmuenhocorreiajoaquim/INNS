<?php

require_once 'db_connect.php';
  
if(isset($_POST['produto'])):
    $quant= mysqli_escape_string($connect,$_POST['quant']);
    $descricao= mysqli_escape_string($connect,$_POST['descricao']);
    $unitario= mysqli_escape_string($connect,$_POST['unitario']);
    $valor= mysqli_escape_string($connect,$_POST['valor']);
   
$sql= " INSERT INTO  gerafatura(quant,descricao,unitario,valor) values('$quant','$descricao','$unitario','$valor')" ;
     if(mysqli_query($connect, $sql)):
      echo  " Cadastrado Com Sucesso! ";
     header('Location:gerarfatura.php');
    else :
     echo "Erro ao Cadastrar";
   header('Location:gerarfatura.php');
    endif;
    endif;

?>