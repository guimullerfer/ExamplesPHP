<?php
$nome = $_POST['Nome'];
$email = $_POST['E-mail'];
$sexo = $_POST['Sexo'];
$data = $_POST['DataDeNascimento'];
$endereco = $_POST['Endereco'];
$bairro = $_POST['Bairro'];
$estado = $_POST['Estados'];
$cidade = $_POST['cidade'];
$cep = $_POST['CEP'];
$deseja = $_POST['ReceberEmail'];
if(!strpos($email, '@') || !strpos($email, '.')){
	echo('Email invalido');
}else{
	echo('Nome:'.$nome.'<br>');
	echo('Email:'.$email.'<br>');
	echo('Sexo:'.$sexo.'<br>');
	echo('Data de nascimento:'.$data.'<br>');
	echo('Endereço:'.$endereco.'<br>');
	echo('Bairro:'.$bairro.'<br>');
	echo('Estado:'.$estado.'<br>');
	echo('Cidade:'.$cidade.'<br>');
	echo('CEP:'.$cep.'<br>');
	if($deseja){
		echo('Deseja receber emails');
	}
	else{
		echo('Não deseja receber emails');
	}
	header("refresh:5;url=/php/Ex1MullerFormularios.html");
}
?>