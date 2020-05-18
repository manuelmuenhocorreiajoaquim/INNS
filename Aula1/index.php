<?php	

	include_once("db_connect.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Pais</th>';
	$html .= '<th>Data de Experação</th>';
	$html .= '<th>Ano Atual</th>';
	$html .= '<th>Preco do Produto</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_transacoes = "SELECT * FROM produto";
	$resultado_trasacoes = mysqli_query($connect, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td>'.$row_transacoes['id'] . "</td>";
		$html .= '<td>'.$row_transacoes['nome'] . "</td>";
		$html .= '<td>'.$row_transacoes['pais'] . "</td>";
		$html .= '<td>'.$row_transacoes['dataexpiracao'] . "</td>";
		$html .= '<td>'.$row_transacoes['ano'] . "</td></tr>";
		$html .= '<td>'.$row_transacoes['preco'] . "</td></tr>";
		$html .= '<td>'.$row_transacoes['Ficheiro'] . "</td></tr>";				
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;"> Abrantes - KwazaSoft</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>