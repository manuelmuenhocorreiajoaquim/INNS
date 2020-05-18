<?php

   include_once 'connfactura.php';


 
//Iniciar o buffer
ob_start();
$html = ob_get_clean();
$html = utf8_encode();
$html.='<html>';
$html.='<body>';
$html.='<div style="width:100%; border-radius:8px;">';
$html.='<img style="width:130px;heigth:70px;" src="../images/logoOrginal.png" >';

$html.='<div style="margin-left:26em; margin-top:-11em;">';
$html.='<span>
<b>K S,COMERCIAL<br>
Prestação de Serviço <br>
Venda de Materias Diversos
<br>
<br>
<br>
Rua de Ndalatando 
<br>
Tel:926649864/926649878
<br>
Email:cliente.kwhanzasoft@gmail.com
<br>
Contribuente Nº 2501025008 
<br>
Ndalatando-Angola
</b>
</span>';
$html.='</div>';

$html.='</div>';

$html.='<hr style="color:green ;  height:5px;">';

$html.='<div style="margin:0 auto;width:700px; height:700px; margin-top:70px;">';
$html.='<table border="0.9" width="900"><thead><tr style="background-color:green;"><th style="color:white;">Nome Produto</th><th style="color:white;">Preço</th><th style="color:white;">Quantidade</th><th style="color:white;">Data</th></tr></thead>';
// ciclo de das facturas
$html.='<tbody>';
$elemento = conexao()->prepare("select * from factura");
$elemento->execute();
$total = 0 ; 
$nome_funcionario="";

while($produto = $elemento->fetch()):
    $html.='<tr>';
    $nome_funcionario =  $produto['funcionario'];
    $html.='<td style="padding-left:30px;">';
    $html.= $produto['nomeproduto'];
    $html.='</td>';
    $total +=($produto['preco']*$produto['quantidade']);
    $html.='<td style="padding-left:50px;">';
    $html.= ($produto['preco']*$produto['quantidade'])." Akz";
    $html.='</td>';

    $html.='<td style="padding-left:30px;">';
    $html.= $produto['quantidade'];
    $html.='</td>';

    $html.='<td style="padding-left:30px;">';
    $html.= $produto['data_factura'];
    $html.='</td>';
 endwhile;   



 $html.='</tbody>';
 $html.='</table>'; 

  

 $html.='<div style="margin-top:120px;font-weight:bold;width:100%; height:40px;">Atendido pelo(a):';
 $html.='<br>';
 $html.=$nome_funcionario; $html.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total: '.$total.' AKZ';
 $html.='</div>';

 $html.='</div>';

 
 $html.='</body>';
 $html.='</html>';

// reiniciando a factura
 $elemento = conexao()->prepare('delete from factura');
 $elemento->execute();

 // fim do reinicio da facura;

//iniciando a parte da
 include("Mpdf/mpdf.php");
 $mpdf= new mPDF();
 $mpdf->allow_charset_conversion = true;
 $mpdf->charset_in = 'UTF-8';
 $mpdf->WriteHTML($html);
 $mpdf->Output('meu-pdf','I');
 exit();


?>