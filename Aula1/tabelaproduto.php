



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
<div class="container" style="width:20em;margin-top:30px;margin-right:2px;">
<button class="btn btn--radius-2 btn--red" name="botao" type="submit"> <a href="../index.php" style="color:white;text-decoration:none;">Voltar a Pagina Inicial</a></button> <br> <br>
<button class="btn btn--radius-2 btn--green" name="botao" type="submit"> <a href="../pesquisar/pesquisarproduto.php" style="color:white;text-decoration:none;">Pesquisar</a></button>
</div>


<div class="container">
  <h2>Tabela de Todos os Produtos</h2> <br> <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome do Produto</th>
        <th>Pais de Origem</th>
        <th>Data de Expiração</th>
        <th>Ano de Cadastro do Produto</th>
        <th>Preço do Produto</th>
        <th> Ficheiro</th>
        <th>Quantidade</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
      include_once 'db_connect.php';
    ?>
    <?php
             $sql= "SELECT*FROM produto";
             $resultado= mysqli_query($connect, $sql);
             while($dado= mysqli_fetch_array($resultado)):
             ?> <tr>
        <td> <?php  echo   $dado['nome'];   ?></td>
        <td> <?php  echo   $dado['pais'];   ?></td>
        <td> <?php  echo   $dado['dataexpiracao'] ;   ?></td>
        <td> <?php  echo   $dado['ano'];   ?></td>
        <td> <?php  echo   $dado['preco'];   ?></td>
        <td> <?php  echo   $dado['Ficheiro'];   ?></td>
        <td> <?php  echo   $dado['quantidade'];   ?></td>

        <td><td> <button class="btn btn--radius-2 btn--red" name="editarproduto" type="submit"> <a href="editarproduto.php?id=<?php echo $dado['id']; ?>" style="color:white;"> Editar </a></button></td></td>
        <td><td> <button class="btn btn--radius-2 btn--green" name="botao" type="submit"> <a href="produto.php"  style="color:white;"> Cadastar Produto</a></button></td></td>
        <td><td> <button class="btn btn--radius-2 btn--red" type="submit"> <a href="deleteproduto.php?id=<?php echo $dado['id']; ?>" style="color:white;"> Apagar </a></button></td></td>
    
       </td>
      </tr>
    
      <?php endwhile ; ?>
     
     
    
     
    </tbody>
 
  </table>

</div>



 

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_contextual&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2016 11:15:37 GMT -->
</html>


