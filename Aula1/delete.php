<?php
require_once 'db_connect.php';
if(isset($_GET['id_documento'])):
  $id = filter_input(INPUT_GET,'id_documento', FILTER_SANITIZE_STRING);
    $sql= " DELETE FROM  documento  WHERE id_documento='$id' " ;
    $prepareting = $conn->prepare($sql);
    if( $prepareting->execute()):
     echo  " Apagado Com Sucesso ";
      header('Location:tabela.php');
     else :
       echo "Erro ao Apagar";
       header('Location:tabela.php');
    
    endif;
  else:
    echo "Error" ;
    endif;

?>