<?php
  session_start();
include_once 'db_connect.php';
/*  Se clicar no botao acessa um IF e tenta cadastrar, caso contrario entra no else */
   $verificaClick = filter_input(INPUT_POST,'verificaClick', FILTER_SANITIZE_STRING);
      if($verificaClick){
        $nome_documento = filter_input(INPUT_POST,'nome_documento', FILTER_SANITIZE_STRING);
        $data_remetida = filter_input(INPUT_POST,'data_remetida', FILTER_SANITIZE_STRING);
        $estado_documento = filter_input(INPUT_POST,'estado_documento', FILTER_SANITIZE_STRING);  
        $data_entrada = filter_input(INPUT_POST,'data_entrada', FILTER_SANITIZE_STRING);
         $message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING); 
          $nome_projecto = filter_input(INPUT_POST,'nome_projecto', FILTER_SANITIZE_STRING); 
        $resultado_sql = " INSERT INTO documento (nome_documento,data_remetida,estado_documento,data_entrada,message,nome_projecto) VALUES (:nome_documento,:data_remetida,:estado_documento, :data_entrada,:message,:nome_projecto)";
        $sql_value_prepareted = $conn->prepare($resultado_sql);
        $sql_value_prepareted->bindParam(':nome_documento',$nome_documento);
        $sql_value_prepareted->bindParam(':data_remetida',$data_remetida);
        $sql_value_prepareted->bindParam(':estado_documento',$estado_documento);
        $sql_value_prepareted->bindParam(':data_entrada',$data_entrada);
        $sql_value_prepareted->bindParam(':message',$message);
         $sql_value_prepareted->bindParam(':nome_projecto',$nome_projecto);
        if($sql_value_prepareted->execute()){
            $_SESSION['msg'] = " <p style='color:green;''> Mensagem Enviada Com Sucesso</p> " ;
            header("location: ../formulario/index.php");  
        }else {
            $_SESSION['msg'] = " <p style='color:red;''> Mensagem Não Enviada</p> " ;
            header("location: ../formulario/index.php");  
        }
      }else {
          $_SESSION['msg'] = " <p style='color:red;''> Error</p> " ;
          header("location: ../formulario/index.php");  
      }

?>