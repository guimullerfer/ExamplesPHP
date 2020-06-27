<?php
function func($str, $arr){
	$arrNew = array();
	foreach($arr as $i){
		$var = $str($i);
		array_push($arrNew, $var);
	}
	return $arrNew; 
}
?>