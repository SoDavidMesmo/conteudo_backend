<?php
// Inclua o arquivo de conexão com o banco de dados
include "novo_cadastro.php";
include "config.php";

// Resto do seu código...


// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores enviados pelo formulário
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $polo = $_POST["polo"];
    $area_formacao = $_POST["area_formacao"];
    $tipo = $_POST["tipo"];

    // Insira os dados no banco de dados
    $sql = "INSERT INTO minha_tabela (nome, sexo, polo, area_formacao, tipo) VALUES ('$nome', '$sexo', '$polo', '$area_formacao', '$tipo')";

    if (mysqli_query($config, $sql)) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($config);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($config);
}
?>
