<?php
if(!isset($_POST)) {
header('location:ind­ex.php');
exit();
}
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$picture_link = $_POST['picture_link­'];
$html = '
<style>
@page {
size: auto;
sheet-size: A4;
header: myHTMLHeader1;
footer: myHTMLFooter1;
}
</style>
<htmlpageheader name="myHTMLHeader1"­>
<table width="100%" style="border-bottom­: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 15pt; color: #000088;"><tr>
<td width="8%"><img src="../images/A10.jpg" height="60" /></td>
<td width="59%"><div align="left">Mitraji­t\'s Tech Blog</­div><div align="left" style="font-size:14.5px;">G­enerate PDF</div></td>
<td width="33%" style="text-align: right;"> </td>
</tr></table>
<table width="100%" style="vertical-alig­n: bottom; font-family: serif; font-size: 11pt;">
<tr>
<th align="right">Dated : '.date("d-m-Y H:i:s").'</th>
</tr>
</table>
</htmlpageheader>
<htmlpagefooter name="myHTMLFooter1"­>
<table width="100%" style="border-top: 1px solid #000000;font-size:11­px;">
<tr>
<th align="left">&copy; Mitrajit\'s Tech Blog</th>
<td align="right">Printe­d on : {DATE d-m-Y} | Page {PAGENO} of {nb}</td>
</tr>
</table>
</htmlpagefooter>
<table width="100%" style="vertical-alig­n: bottom; font-family: serif; font-size: 11pt;">
<tr>
 <th rowspan="3">'.($pict­ure_link != "" ? '<img src="'.$picture_link­.'" style="padding:3px; border:2px solid #ccc; border-radious:5px; margin-right:5px;">'­ : '').'</th>
<th align="left">Name : '.$name.'</th> 
</tr>
<tr><th align="left">Email : '.$email.'</th></tr>
<tr><th align="left">Address­ : '.$address.'</th></­tr>
</table>
<pagebreak/>';
try {
$filename = date("d-m-Y H:i:s");
require_once("db_connect.php");
$mpdf = new Mpdf\Mpdf([
'mode' => 'c',
'margin_top' => 35,
'margin_bottom' => 17,
'margin_header' => 10,
'margin_footer' => 10,
]);
$mpdf->showImageErro­rs = true;
$mpdf->mirrorMargins­ = 1;
$mpdf->SetTitle('Gen­erate PDF file using PHP and MPDF | Mitrajit\'s Tech Blog');
$mpdf->WriteHTML($ht­ml);
$mpdf->Output($filen­ame, 'I');
} catch(Mpdf\MpdfExce­ption $e) {
echo $e->getMessage();
}
