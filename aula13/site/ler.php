<?php 

include "../noticia/consultar_por_id.php";
include_once "../template/cabecalho.php";

?>



<div class="container">
     <h1><?php echo $noticia->titulo; ?></h1>
     <hr>
     <img src="../uploads/<?php echo $noticia->foto; ?>" class="" />
     <p><?php echo $noticia->materia; ?></p>
</div>

<?php include_once "../template/rodape.php"   ?>
