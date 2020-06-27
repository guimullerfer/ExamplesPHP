<?php
    if(!isset($_COOKIE['cont']) || @$_REQUEST['zerar']){
		echo('0');
		setcookie('cont',1);
		if(@$_REQUEST['zerar']){
			header('Location:Ex1MullerSession.php');
			setcookie('cont',0);
		}
	}else{
		echo($_COOKIE['cont']);
		setcookie('cont',++$_COOKIE['cont']);
		
	}
	
	echo('<br><a href=Ex1MullerSession.php?zerar=true>zerar</a>');
?>