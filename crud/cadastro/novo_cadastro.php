<?php include "../style/cabecalho.php"; 
?>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<form action="inserir.php" method="POST">

<input type="hidden" name="idmensagens" value="<?php echo $mensagens->idmensagem ?? ""; ?>" class="form-control m-2"><br>

<h1>Novo Cadastro</h1>


<label class="form-label">Nome</label><br>
<input class="form-control m-2" type="text" name="nome" value="<?php echo $mensagens->titulo ?? ""; ?>"><br>

<label class="form-label">Sexo</label><br>
<input class="form-control m-2" type="text" name="sexo" value="<?php echo $mensagens->titulo ?? ""; ?>"><br>

<label class="form-label">Polo</label><br>
<input class="form-control m-2" type="text" name="polo" value="<?php echo $mensagens->titulo ?? ""; ?>"><br>

<label class="form-label">Área de Formação</label><br>
<input class="form-control m-2" type="text" name="area_formacao" value="<?php echo $mensagens->titulo ?? ""; ?>"><br>

<label class="form-label">Tipo (Presencial ou a Distancia?)</label><br>
<input class="form-control m-2" type="text" name="tipo" value="<?php echo $mensagens->titulo ?? ""; ?>"><br>


<button type="submit" class="btn btn-dark">Inserir</button>
</form>

