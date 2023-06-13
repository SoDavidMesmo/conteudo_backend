<?php
    include_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["codigo"])) {
    $codigo = $_GET["codigo"];
    
    // Recupere os dados do usuário com base no código
    $sql = "SELECT * FROM minha_tabela WHERE codigo = $codigo";
    $result = mysqli_query($config, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Aqui você pode exibir o formulário de edição preenchido com os dados existentes
        // Utilize os valores de $row para popular os campos do formulário
?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Editar Usuário</title>
            <!-- Inclua aqui o link para o Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1>Editar Usuário</h1>
                <form action="atualizar.php" method="POST">
                    <input type="hidden" name="codigo" value="<?php echo $row['codigo']; ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $row['sexo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="polo">Polo</label>
                        <input type="text" class="form-control" id="polo" name="polo" value="<?php echo $row['polo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="area_formacao">Área de Formação</label>
                        <input type="text" class="form-control" id="area_formacao" name="area_formacao" value="<?php echo $row['area_formacao']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo (Presencial ou a Distancia?)</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $row['tipo']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
            <!-- Inclua aqui o link para o Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        </body>
        </html>
<?php
    } else {
        echo "Usuário não encontrado.";
    }
} else {
    echo "Requisição inválida.";
}



?>
