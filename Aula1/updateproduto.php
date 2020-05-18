<?php
require_once 'db_connect.php';
if(isset($_POST['editarproduto'])):
    $nome= mysqli_escape_string($connect,$_POST['nome']);
    $pais= mysqli_escape_string($connect,$_POST['pais']);
    $dataexpiracao= mysqli_escape_string($connect,$_POST['dataexpiracao']);
    $ano= mysqli_escape_string($connect,$_POST['ano']);
    $preco= mysqli_escape_string($connect,$_POST['preco']);
    $Ficheiro= mysqli_escape_string($connect,$_POST['Ficheiro']);
    $id=mysqli_escape_string($connect,$_POST['id']);
    $sql= " UPDATE produto SET nome = '$nome' , pais='$pais' , dataexpiracao='$dataexpiracao', ano='$ano', preco='$preco' , Ficheiro='$Ficheiro'  WHERE id='$id' " ;
    if(mysqli_query($connect, $sql)):
     echo  " Atualizado  Com Sucesso! ";
      header('Location:tabelaproduto.php');
     else :
       echo "Erro ao Atualizar";
       header('Location:tabelaproduto.php');
    
    endif;
    endif;

?>