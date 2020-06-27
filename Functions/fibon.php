<?php
function fibo(){
	for($i = 0;$i < 10;$i++){
		if($i == 0 || $i == 1){
			yield 1;
			$anterior = 1;
			$anteriordoanterior = 1;
		}else{
			yield $anteriordoanterior + $anterior;
			$aux = $anteriordoanterior;
			$anteriordoanterior = $anterior;
			$anterior = $anterior + $aux;
			
		}
		
	}
	
	
}
$generator = fibo();
foreach ($generator as $value){
	echo($value." ");
}

?>
