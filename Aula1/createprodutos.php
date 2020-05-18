<?php

require_once 'db_connect.php';
  
if(isset($_POST['produto'])):
  
    $nome= mysqli_escape_string($connect,$_POST['nome']);
    $pais= mysqli_escape_string($connect,$_POST['pais']);
    $dataexpiracao= mysqli_escape_string($connect,$_POST['dataexpiracao']);
    $ano= mysqli_escape_string($connect,$_POST['ano']);
    $preco= mysqli_escape_string($connect,$_POST['preco']);
    $Ficheiro= mysqli_escape_string($connect,$_POST['Ficheiro']);
    $quantidade = mysqli_escape_string($connect,$_POST['quantidade']);
    $sql= " INSERT INTO  produto(nome,pais,dataexpiracao,ano,preco,Ficheiro ,quantidade) values('$nome','$pais','$dataexpiracao','$ano','$preco','$Ficheiro' ,'$quantidade')" ;

    if(mysqli_query($connect, $sql)):
      echo  " Cadastrado Com Sucesso! ";
     header('Location:produto.php');
    else :
     echo "Erro ao Cadastrar";
   header('Location:produto.php');
    endif;
    endif;

?>