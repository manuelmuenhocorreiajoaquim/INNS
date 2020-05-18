<?php
  
  function conexao(){
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DBNAME','conteudo');    
    try{
        $conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USER,PASS);
        return $conn;
    }catch(Exception $error){
         echo $error->getMessage();
    }           
   }



   function update($nome_documento,$data_remetida,$estado_documento,$data_entrada,$message,$nome_projecto,$id){
         
           // update  documentos
           $update = conexao()->prepare(
               "update documento set 
                nome_documento=:nome,
                data_remetida=:data,
                estado_documento=:estado,
                data_entrada=:dataentrada,
                message=:message,
                nome_projecto=:projecto
                where 
                id_documento=:id"
            );
           
            $update->execute(Array(
                 ":nome"=>$nome_documento,
                 ":data"=>$data_remetida ,
                 ":estado"=>$estado_documento,
                 ":dataentrada"=>$data_entrada,
                 ":message"=>$message,
                 ":projecto"=>$nome_projecto,
                 ":id"=>$id
            ));
    
            //update
     
   }




   if($_GET['funcao'] == "update"):

    // update from documents
    $nome_documento= $_POST['nome_documento'];
    $data_remetida = $_POST['data_remetida'];
    $estado_documento =$_POST['estado_documento'];

    $data_entrada = $_POST['data_entrada'];
    $message = $_POST['message'];
    $nome_projecto = $_POST['nome_projecto'];
    $id_update  = $_GET['id_documento'];
    // update from documents

    update($nome_documento, $data_remetida,$estado_documento,$data_entrada,$message,$nome_projecto,$id_update);
    header("location:editar.php?id_documento=".$id_update);
     
   endif;