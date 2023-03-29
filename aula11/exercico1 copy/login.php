<?php 

    $Usuario = $_GET['Usuario'];
    $Senha = $_GET['Senha'];
    
    if($Usuario == "David" && $Senha =="12345"){
        echo "ta certo";
    }else{
        echo "Erro";
    }

?>


