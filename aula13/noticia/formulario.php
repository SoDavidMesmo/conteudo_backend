<?php

    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito";
?>

    <div class="container">
    <h1>Cadastro de noticias</h1>
    <hr>

    <form action="<?php echo isset ($noticia) ?   "atualizar.php" : "inserir.php";?>"
    method="post" enctype="multipart/form-data">

        <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? "";?>"><br>

        <label class="form-label">Titulo</label><br>
        <input class="form-control" type="text" name="titulo" value="<?php echo $noticia->Titulo ?? "";?>"><br>

        <label class="form-label">Materia</label><br>
        <textarea class="form-control" name="materia" ><?php echo $noticia->Materia ??"";?> </textarea>  <br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="categoria" value="<?php echo $noticia->Categoria ??"";?>"> <br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>

        <button type="submit"class ="btn btn-dark"  >Inserir</button>
        
    </form>
</div>

    
<?php 

    require_once "../template/rodape.php"

?>