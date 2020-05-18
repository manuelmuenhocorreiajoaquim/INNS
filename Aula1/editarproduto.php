<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cadastro </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <?php

     include_once 'db_connect.php';
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
            $sql= "SELECT * FROM produto  WHERE id = '$id'";
                    $resultado = mysqli_query($connect, $sql);
                    $dados = mysqli_fetch_array($resultado);
                        endif;
    ?>
</head>

<body>

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Editar Produto</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="updateproduto.php">
                        <input type="hidden" name="id" value=" <?php echo $dados['id']; ?>">
                        <div class="form-row">
                         <div class="name">Nome do Produto</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nome" placeholder="Digite o seu Nome" value="<?php echo $dados['nome']; ?>" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Pais de Origem </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="pais" placeholder="Digite o seu email" value="<?php echo $dados['pais']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Data de Expiração </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="dataexpiracao" placeholder="Digite a Data de Expirção" value="<?php echo $dados['dataexpiracao']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ano de Cadastro do Produto</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ano" placeholder="Ano de Registro do Produto" value="<?php echo $dados['ano']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Preço Do Produto</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="preco" placeholder="Preço do Produto" value="<?php echo $dados['preco']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Editar Ficheiro</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Ficheiro" placeholder="Editar Ficheiro" value="<?php echo $dados['Ficheiro']; ?>">
                                </div>
                            </div>
                        </div>
                     
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" name="editarproduto" type="submit">Atualizar</button>
                            <button class="btn btn--radius-2 btn--green" name="botao" type="submit">Editar Pessoa</button>
                            <button class="btn btn--radius-2 btn--red" name="apagar" type="submit">   Apagar Pessoa</button>
                            <button class="btn btn--radius-2 btn--blue-2" name="botao" type="submit"> <a href="tabelaproduto.php">Lista de Produtos</a>  </button>
                        </div>
                    
                    </form>
                </div>
              
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->