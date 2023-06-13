<?php
include_once "config.php";

include_once "../style/cabecalho.php";

$sql = "SELECT * FROM minha_tabela";
$result = mysqli_query($config, $sql);



?>

<!-- CSS do Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- JavaScript do Bootstrap (opcional, se você precisar usar recursos avançados do Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Sexo</th>
      <th>Polo</th>
      <th>Área de Formação</th>
      <th>Tipo</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['codigo']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['sexo']; ?></td>
        <td><?php echo $row['polo']; ?></td>
        <td><?php echo $row['area_formacao']; ?></td>
        <td><?php echo $row['tipo']; ?></td>
        <td>
          <a href='editar.php?codigo=<?php echo $row['codigo']; ?>' class="btn btn-primary"><i class="bi bi-pencil"></i> Editar</a>
          <a href='excluir.php?codigo=<?php echo $row['codigo']; ?>' class="btn btn-danger"><i class="bi bi-trash"></i> Excluir</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
