<?php 
   if (isset($_POST['Usuario'])){
   if($_POST['Usuario'] == "David" && $_POST['Senha'] == 12345){
      echo "Logado";
   } else{
      echo "Erro";
   }else{
      //manda abrir outro arquivo, o formulário de login
      //caso o usuario
      header("Location:form_login.html");
   }
}

?>


