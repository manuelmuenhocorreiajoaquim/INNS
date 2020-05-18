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
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Cadastro dos Produtos</h2>
                </div>
                <div class="card-body">
                    <form  action="createprodutos.php" method="POST">
                        <div class="form-row">
                         <div class="name">Nome do Produto</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nome" placeholder="Digite Nome do Produto" Required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Pais de Origem </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="pais" placeholder="Diigte a Origem do Produto" Required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Data de Esperição </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="dataexpiracao" placeholder="Digite a Data de Experição" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">  Ano de Cadastro do Produto </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ano" placeholder="Digite o Ano de Cadastro do Produto" Required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">  Preço do Produto</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="preco" placeholder="Digite o Preço do Produto" Required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Ficheiro </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Ficheiro" placeholder="Digite o nome e do ficheiro" Required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Quantidade </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="quantidade" placeholder="Digite a quantidade de produto" Required="">
                                </div>
                            </div>
                        </div>
                     
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" name="produto" >Adicionar Produto</button>
                            <button class="btn btn--radius-2 btn--red" name="botao" type="submit"> <a href="../index.php" style="color:white;text-decoration:none;">Voltar a Pagina Inicial</a></button>
                            <button class="btn btn--radius-2 btn--blue-2" name="botao" type="submit"> <a href="tabelaproduto.php" style="color:white;text-decoration:none;">Lista dos Produtos</a></button>
                            <button class="btn btn--radius-2 btn--green" name="botao" type="submit"> <a href="index.html" style="color:white;text-decoration:none;">ADD Pessoa</a></button>
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