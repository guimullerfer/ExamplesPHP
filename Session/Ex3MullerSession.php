<!DOCTYPE html>
<html>
<head>
<title>Formulario</title>
</head>
<body>
<form method="POST" action="Ex4MullerSession.php">
Nome: <input type="text" name="nome"><br>
Senha: <input type="password" name="senha">
<br><br><input type="submit">
</form>

</body>
</html>
<?php
if(@$_REQUEST['sair']){
	session_start();
	session_destroy();
	header('Location: Ex3MullerSession.php');

}

?>