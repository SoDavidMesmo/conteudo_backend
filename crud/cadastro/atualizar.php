<?php
include_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores enviados pelo formulário
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $polo = $_POST["polo"];
    $area_formacao = $_POST["area_formacao"];
    $tipo = $_POST["tipo"];

    // Atualize os dados no banco de dados
    $sql = "UPDATE minha_tabela SET nome = '$nome', sexo = '$sexo', polo = '$polo', area_formacao = '$area_formacao', tipo = '$tipo' WHERE codigo = $codigo";

    if (mysqli_query($config, $sql)) {
        echo "Dados atualizados com sucesso.";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($config);
    }

    // Redirecione para a página lista_usuarios.php após a atualização
    header("Location: lista_usuario.php");
    exit();
} else {
    echo "Requisição inválida.";
}
?>
