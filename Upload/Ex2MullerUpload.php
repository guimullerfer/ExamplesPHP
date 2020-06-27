<?php
$caminho = 'c:\\xampp\\htdocs\\upload\\';
print_r($_FILES);
if ($_FILES['arquivo']['size'] < 30000 
&& move_uploaded_file($_FILES['arquivo']['tmp_name'],$caminho.$_FILES['arquivo']['name'])) {
   //Se o arquivo for uma imagem, cria tag HTML 'img'
   if ($_FILES['arquivo']['type'] == 'image/gif'
   || $_FILES['arquivo']['type'] == 'image/jpeg'
   || $_FILES['arquivo']['type'] == 'image/jpg'
   || $_FILES['arquivo']['type'] == 'image/png'){
	   
      echo '<img src="../upload/'.$_FILES['arquivo']['name'].'">';
   }
   else { //Senão, cria um link para baixar o arquivo enviado
     // header("Location: Ex1MullerUpload.html");
   }
}
else {
//header("Location: Ex1MullerUpload.html");
}
?>