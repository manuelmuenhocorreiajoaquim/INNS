



<!DOCTYPE html>
<html lang="en">
<head>
  <title>INSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
  <script src="js2/bootstrap.min.js"></script>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
  

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<body>
<?php
include_once 'db_connect.php';
?>
<div class="container" style="width:20em;margin-top:30px;margin-right:2px;">
<button class="btn btn--radius-2 btn--red" name="botao" type="submit"> <a href="../formulario/index.php" style="color:white;text-decoration:none;">Voltar a Pagina Inicial</a></button><br><br>
<button class="btn btn--radius-2 btn--green" name="botao" type="submit"> <a href="pesquisar.html" style="color:white;text-decoration:none;">Pesquisar</a></button><br><br>
</div>
<div class="container">
  <h2> Lista do Pessoal</h2> <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome do Documento</th>
       <th>Data Entrega</th> 
        <th>Estado do Documernto</th>
       <th>Data de Documento não Aceite</th> 
        <th>Justicaçao de nao aceite o processo</th>
         <th>Nome do Projecto</th> 
      </tr>
    </thead>
    <tbody>
  
    <?php
              include_once 'db_connect.php';
              $selection = "SELECT*FROM documento  ORDER BY 	id_documento ASC" ;
              $prepareting = $conn->prepare($selection);
              $prepareting->execute();
              while($result = $prepareting->fetch(PDO::FETCH_ASSOC) ):
      ?>
             <tr>
        <td> <?php  echo   $result['id_documento'] ;   ?></td>
        <td> <?php  echo   $result['nome_documento'] ;   ?></td>
        <td> <?php  echo   $result['data_remetida'] ;   ?></td>
        <td> <?php  echo   $result['estado_documento'] ;   ?></td>
        <td> <?php  echo   $result['data_entrada'] ;   ?></td>
        <td> <?php  echo   $result['message'] ;   ?></td>
         <td> <?php  echo   $result['nome_projecto'] ;   ?></td>
     <td><td> <button class="btn btn--radius-2 btn--green" name="editar" type="submit"> <a href="editar.php?id_documento=<?php echo $result['id_documento']; ?>" style="color:white;"> Editar </a></button></td></td>
      <!--  <td><td> <button class="btn btn--radius-2 btn--green" name="botao" type="submit"> <a href="index.html"  style="color:white;"> Cadastar Pessoa</a></button></td></td> -->
       <td><td> <button class="btn btn--radius-2 btn--red" name="apagar" type="submit"> <a href="delete.php?id_documento=<?php echo $result['id_documento']; ?>" style="color:white;"> Apagar </a></button></td></td>
       
       </td>
      </tr>
    
      <?php endwhile ; ?>
     
     
    
     
    </tbody>
 
  </table>

</div>



 

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_contextual&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2016 11:15:37 GMT -->
</html>


