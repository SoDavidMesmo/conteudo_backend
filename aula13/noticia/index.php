<?php require "consultar_todos.php";
      require_once "../template/cabecalho.php";
?>


    <div class="container">


    <h1>=Noticia</h1>
    <hr>
    <div>
  <a href="formulario.php" class ="btn btn-success">Inserir Novo</a>
</div class="text-end">
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Categoria</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($noticias as $noticia): ?>
    <tr>
      <td><?php echo $noticia->titulo ?></td>
      <td><?php echo $noticia->categoria ?></td>
      <td><img src="../uploads/<?php echo $noticia->foto ?>" height="50px";</td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $noticia->idnoticia ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>

        <a href="formulario.php?id=<?= $noticia->idnoticia ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>

      </td>
      <?php endforeach;?>
    </tr>
  </tbody>
</table>
</div>

<?php 
  require_once "../template/rodape.php"


?>