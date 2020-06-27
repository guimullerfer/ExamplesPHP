<?php
function lista(){
	$arr = func_get_args();
	echo("<ul>");
	foreach($arr as $var){
		echo("<li>".$var."</li>");
	}
	echo("</ul>");
}
?>