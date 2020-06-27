<?php
	session_start();
	if(!isset($_SESSION['nome'])){
		header('Location: Ex3MullerSession.php');
	}else{
		echo '<a href="Ex3MullerSession.php?sair=true">Sair</a><br>';
	}
    if(!isset($_SESSION['cont']) || @$_REQUEST['zerar']){
		echo('0');
		$_SESSION['cont'] = 1;
		if(@$_REQUEST['zerar']){
			header('Location:Ex2MullerSession.php');
			$_SESSION['cont'] = 0;
		}
	}else{
		echo($_SESSION['cont']);
		$_SESSION['cont']++;
		
	}
	
	echo('<br><a href=Ex2MullerSession.php?zerar=true>zerar</a>');
?>