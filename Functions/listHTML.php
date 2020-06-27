<?php
function lista($arr){
	echo("<ul>");
	foreach($arr as $var){
		echo("<li>".$var."</li>");
	}
	echo("</ul>");
}
?>