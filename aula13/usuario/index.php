<?php require "consultar_todos.php";
      require_once "../template/cabecalho.php";
      require_once "../template/menu_restrito.php";
?>
    <div class="container">


    <h1>Usuario</h1>
    <hr>
    <div>
  <a href="formulario.php" class ="btn btn-success">Inserir Novo</a>
</div class="text-end">
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($usuarios as $usuario): ?>
    <tr>
      <td><?php echo $usuario->nome ?></td>
      <td><?php echo $usuario->login ?></td>
      <td><img src="../uploads/<?php echo $usuario->foto ?>" height="50px";</td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $usuario->idusuario ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>

        <a href="formulario.php?id=<?= $usuario->idusuario ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>

      </td>
      <?php endforeach;?>
    </tr>
  </tbody>
</table>
</div>

<?php
      require_once "../template/rodape.php";
?>