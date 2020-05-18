<?php
 session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/3.jpg" alt="IMG" height="500px;">
			</div>
			
			<form action="../Aula1/conexao.php" method="POST" class="contact1-form validate-form">
				<span class="contact1-form-title">
				 <h2 style="margin-left: -30em; font-size:30px;color:green;">Sistema de Gestao Inscrito  no INSS</h2>
				</span>
				
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="nome_documento" placeholder="Nome do Documento" required>
					<span class="shadow-input1"></span>
				</div>

				 <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="date" name="data_remetida" placeholder="Data Remetida "   required>
					<span class="shadow-input1"></span>
				</div> 

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="estado_documento" placeholder="Estado do Documernto "   required>
					<span class="shadow-input1"></span>
				</div>

				 <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="date" name="data_entrada" placeholder="Data de entrada do documento "   required>
					<span class="shadow-input1"></span>
				</div> 
					<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="nome_projecto" placeholder="Nome do Projecto "   required>
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Justicaçao de nao aceite o processo"   required></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<input type="submit" name="verificaClick"  class="contact1-form-btn"  class="fa fa-long-arrow-right" aria-hidden="true" value="Cadastrar">
				</div> <br>
				<div class="container-contact1-form-btn">
					<button type="button"  class="contact1-form-btn"  class="fa fa-long-arrow-right" aria-hidden="true"> <a href="../Aula1/tabela.php" style="color: aliceblue;" aria-hidden="true" >Listar Documento</a> </button>
				</div>
			</form>
			
		</div>
		
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
