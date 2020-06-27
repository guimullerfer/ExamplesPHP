<?php
function explodir($delimitador, $str){
	$arr = array();
	$arrAux = array();
	for($i = 0; $i < strlen($str); $i++){
		if($str[$i] != $delimitador){
			array_push($arrAux, $str[$i]);
		}
		if($str[$i] == $delimitador || $i == strlen($str)-1){
			array_push($arr,implode($arrAux));
			$arrAux = array();
		}
	}
	return $arr;
}

print_r(explodir(" ","dia lindo"));
?>