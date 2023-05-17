<?php 
//local temporario onde foi realizad o upload da imagem
$origem =$_FILES['foto'] ['tmp_name'];

$nome_foto = time().$_FILES['foto']['name'];
//local para onde o arquivo de upload vai ser movido
$destino ="../uploads/".time().$_FILES['foto']['name'];

move_uploaded_file($origem,$destino);


