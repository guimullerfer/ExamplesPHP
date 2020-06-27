<?php
$texto = file_get_contents('hp.txt');

$texto=str_replace('-','',$texto);
$texto=str_replace('.','',$texto);
$texto=str_replace('!','',$texto);
$texto=str_replace(',','',$texto);
$texto=str_replace('?','',$texto);
$texto=str_replace("\n",' ',$texto);
$texto=str_replace("\r",' ',$texto);
$texto=str_replace("\t",' ',$texto);
$texto=str_replace('  ',' ',$texto);
$texto=str_replace('  ',' ',$texto);
$texto=str_replace('  ',' ',$texto);
$texto=str_replace('  ',' ',$texto);


$texto = mb_strtolower($texto);
$arr = explode(" ",$texto);
$count = array_count_values($arr);
arsort($count);
echo('
<table>
<tr>
<th>Palavra</th>
<th>Quantidade</th>
</tr>
');
foreach($count as $palavra => $qtd){
	if($qtd>1){
	echo('
	<tr>
	<td>'.$palavra.'</td>
	<td>'.$qtd.'</td>
	</tr>
	');
	}
}
echo('</table>');
?>