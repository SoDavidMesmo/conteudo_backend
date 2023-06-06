<?php 
//iniciar a sessão - deve ser colocada sempre
//antes de manipular a variável $_SESSION
session_start();

//verificar se existe uma variável chamada
//$_SESSION com a key usuário, essa variável
//é criada no arquivo validar.php quando o 
//usuário digita o login e a senha corretamente
if(!isset($_SESSION['usuario'])){
 header("location: ../login/formulario.php");
}