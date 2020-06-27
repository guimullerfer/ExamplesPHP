<?php
	if($_REQUEST['cont']==1){
		file_put_contents("contador.txt",-2);
		header('location: Ex1MullerArquivos.php');
	}
	$cont = file_get_contents("contador.txt");
	$cont = ((int)$cont)+1;
	file_put_contents("contador.txt",$cont);
	echo("<a href='Ex1MullerArquivos.php?cont=1'>".$cont."</a>");
?>
