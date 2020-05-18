<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/bootstrap.css">
    <script src="js2/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet" media="all">
    <title>Document</title>
</head>
<body>

    <?php
    include_once 'db_connect.php';
    ?>

<style>
    .principal{
        width: 100%;
        height: 800px; 
        border: solid 10px green; 
    }
.logo img{
 width: 250px;
 height: 100px;
 margin-top: 2em;
 margin-left: 3em;


 
 
}
.borda{
 width: 60em;
 height: 200px;
 border:solid 8px black ;
 margin-left:45em ;
 border-radius:30px;
 z-index: -999999999999999999999999999999999999999;
 margin-top: -7em;
 border: solid 10px black; 
}
.borda .texto1{
  margin-left: 40em;
  margin-top: -6em;
  padding: -2px;

}
.borda .texto1{
  margin-left: 40em;
 

 

}
.borda .texto h3{
  margin-left:1em;
  margin-top: 1em;
}
.borda .texto p{
  margin-left:1em;
}
.cliente p {
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 16px;
  margin-left: 2em;  
}
.pag{
  width: 150px;
  height: 40px;
  border: solid 4px black;
  border-radius: 6px;
  margin-left: 60em;
  margin-top: 18px;
}
.pag h4{
  margin-left: 1.5em;
  margin-top: 8px;
}

    
    
</style>
<div class="principal">

        <div class="logo">
                <img src="../images/logoOrginal.PNG" alt="" srcset="">
            </div>
            <div class="borda">
               <div class="texto">
                  <h3>KWANZA SOFTWARE COMERCIAL</h3>
                    <p><b> Prestação de Serviço <br> Venda de Materias Diversos</b></p>
               </div>
               <div class="texto1">
                    <p><b>Rua de Ndalatando
                        <br> Telefone:997550271
                        <br> Endereço:soft@gmail.com
                        <br> Contribuente Nº:2501025008
                        <br> NDALATANDO-ANGOLA
                 </b></p>
                
               </div>
            </div><br><br>  
            <div class="cliente">
            <?php
             $sql= "SELECT*FROM fatura";
             $resultado= mysqli_query($connect, $sql);
             $dado= mysqli_fetch_array($resultado);
          ?>

            
             <p><b>Cliente: <?php    echo $dado["nome"];   ?></b></p>
             <p><b>Endreço</b>:  <?php  echo $dado["endereco"];    ?></p>
             <p> <b>Telefone</b> : <?php  echo $dado["telefone"];    ?></p>
             <p> <b> Nif:</b>  <?php  echo $dado["nif"];   ?></p> 
    
   
                    
            </div>  <br>    <br>  
            <hr style="background-color: rgb(131, 178, 255); height: 10px;" >
            <br>  
            <hr style="background-color: rgb(80, 80, 80); height: 8px;" >
            <div class="pag">
             <h4>Pag: &nbsp;&nbsp;&nbsp; 1 of 1</h4>
            </div>
            
<div class="container">
  <h2> Fatura de Produtos</h2> <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Quantidade</th>
        <th>Descrição</th>
        <th>P.Unitario</th>
        <th>Valor</th>
        
      </tr>
    </thead>
    <tbody>
 
    <?php
             $sql= "SELECT*FROM gerafatura";
             $resultado= mysqli_query($connect, $sql);
             while($dado= mysqli_fetch_array($resultado)):
             ?> <tr>
            <td> <?php  echo   $dado['quant'] ;   ?></td>
            <td> <?php  echo   $dado['descricao'] ;   ?></td>
            <td> <?php  echo   $dado['unitario'] ;   ?></td>
            <td> <?php  echo   $dado['valor'] ;   ?> <br>
           </td>
           </tr>
    
      <?php endwhile ; ?>   
       </td>
       </tbody>
 
  </table>

</div>
</div>
 
</body>
</html>