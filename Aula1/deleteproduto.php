<?php
require_once 'db_connect.php';
if(isset($_GET['id'])):
    $id=mysqli_escape_string($connect,$_GET['id']);
    $sql= " DELETE FROM  produto  WHERE id='$id' " ;
    if(mysqli_query($connect, $sql)):
     echo  " Apagado Com Sucesso ";
      header('Location:tabelaproduto.php');
     else :
       echo "Erro ao Apagar";
       header('Location:tabelaproduto.php');
    
    endif;
  else:
    echo "Error" ;
    endif;

?>