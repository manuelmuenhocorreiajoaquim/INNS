<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");

  $result = " SELECT * FROM usuarios WHERE  usuario =  '$usuariot' AND senha = '$senhat' LIMIT 1 " ;
   $resultado = $conn->prepare($result);
   $resultado->execute();
   $res = $resultado->fetch(PDO::FETCH_ASSOC) ;
//echo "Usuario: ".$resultado['nome'];
if(empty($res)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	header("Location:index.php");
	//Manda o usuario para a tela de login

}else{
		header("Location:formulario/index.php");
	}
?>