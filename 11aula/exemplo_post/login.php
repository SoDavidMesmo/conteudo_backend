<?php 
//se existe, ou foi enviada, a variável usuário
   if (isset($_POST['Usuario'])){
      //verifica se o usuario é igual a david e a senha igual a 12345
      if($_POST['Usuario'] == "David" && $_POST['Senha'] == 12345){
         echo "Logado";
      }else{
         echo "Erro";
      }
   }else{
      //manda abrir outro arquivo, o formulário de login
      //caso o usuario tente abrir esse arquivo pela URL
      //sem acessar o formulário de login "redirecionamento
      header("Location:form_login.html");
   }


?>


