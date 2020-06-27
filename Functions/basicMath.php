<?php
	function soma($a, $b){
		return $a+$b;
	}
	function subtracao($a, $b){
		return soma($a, -$b);
	}
	function multiplicacao($a, $b){
		return $a * $b;
	}
	function divisao($a,$b){
		return multiplicacao($a,1/$b);
	}
	echo(subtracao(soma(1,2),divisao(multiplicacao(3,4),5)));
?>