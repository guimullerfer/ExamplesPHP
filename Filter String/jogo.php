<?php require_once 'configuracaoJogo.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/php/TCC-bootstrap/vendor/jquery/jquery.js"></script>
<style>
.letra{
	width: 15px;
}
</style>
<?php for($i = 0; $i < $tamanho1; $i++){ ?>
	<input type="text" class="letra" max=1 id="palavra1_<?= $i?>" value="#">
<?php } ?>
<br><br>
<?php for($i = 0; $i < $tamanho2; $i++){ ?>
	<input type="text" class="letra" max=1 id="palavra2_<?= $i?>" value="#">
<?php } ?>
<br><br>
<?php for($i = 0; $i < $tamanho3; $i++){ ?>
	<input type="text" class="letra" max=1 id="palavra3_<?= $i?>" value="#">
<?php } ?>
<br><br>
<button id="verificar">Verificar</button>
<script>
$(document).ready(function (){
	$('#verificar').click(function(){
		var json = '';
		for(var i = 0; i < <?= $tamanho1?>; i++){
			json += $('#palavra1_'+i).val();
		}
		for(var i = 0; i < <?= $tamanho2?>; i++){
			json += $('#palavra2_'+i).val();
		}
		for(var i = 0; i < <?= $tamanho3?>; i++){
			json += $('#palavra3_'+i).val();
		}
		$.ajax({
			url: 'salvandoAlteracoes.php',
			method: 'POST',
			data: {
				letras : $('#letras').val(),
				jsonFinal : json
			}
		}).done(function(res){
			$('#verificando').html(res);
		});

	});
});
</script>
<br>
Letras que já foram:<br>
<input type="text" id="letras">
<div id="verificando">

</div>

