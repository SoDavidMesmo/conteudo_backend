<?php
include_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["codigo"])) {
    $codigo = $_GET["codigo"];
    
    // Verifique se o usuário existe no banco de dados
    $sql = "SELECT * FROM minha_tabela WHERE codigo = $codigo";
    $result = mysqli_query($config, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        // Excluir o usuário do banco de dados
        $sql = "DELETE FROM minha_tabela WHERE codigo = $codigo";
        if (mysqli_query($config, $sql)) {
            echo "Usuário excluído com sucesso.";
        } else {
            echo "Erro ao excluir o usuário: " . mysqli_error($config);
        }
    } else {
        echo "Usuário não encontrado.";
    }
} else {
    echo "Requisição inválida.";
}

// Redirecione para a página de lista após a exclusão
header("Location: lista_usuario.php");
exit();
?>
