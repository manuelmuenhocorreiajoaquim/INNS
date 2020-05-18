<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../formulario/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../formulario/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../formulario/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../formulario/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../formulario/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../formulario/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../formulario/css/util.css">
	<link rel="stylesheet" type="text/css" href="../formulario/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="../formulario/images/img-01.png" alt="IMG">
			</div>

			<?php

			include_once 'db_connect.php';
			if (isset($_GET['id_documento'])) :

				$id = filter_input(INPUT_GET, 'id_documento', FILTER_SANITIZE_STRING);
				$sql = "SELECT * FROM documento  WHERE id_documento = '$id'";
				$prepareting = $conn->prepare($sql);
				$prepareting->execute();
				$result = $prepareting->fetch(PDO::FETCH_ASSOC);

			endif;

			?>

			<form action="modelupdate.php?funcao=update&&id_documento=<?php echo $id; ?>" method="POST" class="contact1-form validate-form">
				<input type="hidden" name="id_documento" value=" <?php echo $result['id_documento']; ?>">
				<span class="contact1-form-title">
					<?php
					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>

					Editar Registro
				</span>

				<div class="wrap-input1 validate-input" data-validate="Name is required">
					<input class="input1" type="text" name="nome_documento" placeholder=" Nome do Documento" value="<?php echo $result['nome_documento']; ?>" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="data_remetida" placeholder="Data Remetida " value="<?php echo $result['data_remetida']; ?>" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Subject is required">
					<input class="input1" type="text" name="estado_documento" placeholder="Estado do Documernto " value="<?php echo $result['estado_documento']; ?>" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Subject is required">
					<input class="input1" type="text" name="data_entrada" placeholder="Data de entrada do documento " value="<?php echo $result['data_entrada']; ?>" required>
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate="Subject is required">
					<input class="input1" type="text" name="nome_projecto" placeholder="Data de entrada do documento " value="<?php echo $result['nome_projecto']; ?>" required>
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate="Message is required">

					<input class="input1" type="text" name="message" placeholder=" documento " value="<?php echo $result['message']; ?>" required>

					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<input type="submit" name="verificaClick" class="contact1-form-btn" class="fa fa-long-arrow-right" aria-hidden="true" value="Atualizar">
				</div> <br>
				<div class="container-contact1-form-btn">
					<button type="button" class="contact1-form-btn" class="fa fa-long-arrow-right" aria-hidden="true"> <a href="../Aula1/tabela.php" style="color: aliceblue;" aria-hidden="true">Listar Documento</a> </button>
				</div>
			</form>

		</div>

	</div>

	<!--===============================================================================================-->
	<script src="../formulario/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../formulario/vendor/bootstrap/js/popper.js"></script>
	<script src="../formulario/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../formulario/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../formulario/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

	<!--===============================================================================================-->
	<script src="../formulario/js/main.js"></script>

</body>

</html>