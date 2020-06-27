<?php
require_once 'configuracaoJogo.php';
$letras = str_split($_POST['letras']);
$alfabeto = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$contLetras = [];
$tam = 0;
for($i = 0; $i < 26; $i++){
	$contLetras[$i] = 0;
}
if($letras[0] != null){
	$filtro = '[^';
	for($i = 0;$i < count($letras); $i++){
		$filtro .= $letras[$i];
	}
	$filtro .= ']';
}else{
	$filtro = '\w';
}
$arr = $_POST['jsonFinal'];
str_split($arr);
$er = '/\b';
for($i = 0; $i < $tamanho1; $i++){
	if($_POST['jsonFinal'][$i] == '#'){
		$er .= $filtro;
	}else{
		$er .= $_POST['jsonFinal'][$i];
	}	
}
$er .= '\b/';
$pregGrep = preg_grep($er, $dic);
sort($pregGrep);
for($i = 0; $i < count($pregGrep); $i++){
	echo $pregGrep[$i] . '<br>';
	for($j = 0;$j < count($alfabeto);$j++){
		if(ereg($alfabeto[$j], $pregGrep[$i])){
			$contLetras[$j]++;
		}
	} 
	$tam++;
}
echo '___________________<br>';
$er2 = '/\b';
for($i = $tamanho1; $i < ($tamanho2+$tamanho1); $i++){
	if($_POST['jsonFinal'][$i] == '#'){
		$er2 .= $filtro;
	}else{
		$er2 .= $_POST['jsonFinal'][$i];
	}
}
$er2 .= '\b/';
$pregGrep2 = preg_grep($er2, $dic);
sort($pregGrep2);
for($i = 0; $i < count($pregGrep2); $i++){
	echo $pregGrep2[$i] . '<br>';
	for($j = 0;$j < count($alfabeto);$j++){
		if(ereg($alfabeto[$j], $pregGrep2[$i])){
			$contLetras[$j]++;
		}
	} 
	$tam++;
}
echo '___________________<br>';
$er3 = '/\b';
for($i = ($tamanho2+$tamanho1); $i < ($tamanho3+$tamanho2+$tamanho1); $i++){
	if($_POST['jsonFinal'][$i] == '#'){
		$er3 .= $filtro;
	}else{
		$er3 .= $_POST['jsonFinal'][$i];
	}
}
$er3 .= '\b/';
$pregGrep3 = preg_grep($er3, $dic);
sort($pregGrep3);
for($i = 0; $i < count($pregGrep3); $i++){
	echo $pregGrep3[$i] . '<br>';
	for($j = 0;$j < count($alfabeto);$j++){
		if(ereg($alfabeto[$j], $pregGrep3[$i])){
			$contLetras[$j]++;
		}
	} 
	$tam++;
}
for($i = 0; $i < 26; $i++){
	$flag = true;
	for($j = 0;$j < count($letras);$j++){
		if($letras[$j] == $alfabeto[$i]){
			$flag = false;
		}
	}
	if($flag){
		echo $alfabeto[$i] . ': ' . ($contLetras[$i]/$tam) * 100 . '%<br>';
	}
}
?>