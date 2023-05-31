<?php

require_once "../template/menu_restrito.php";
    require_once "../template/cabecalho.php";
?>

    <div class="container">
        <h1>Área Restrita</h1> <br>

    <form action="validar.php"
    method="post" enctype="multipart/form-data">

        <label class="form-label">Login</label><br>
        <input class="form-control" type="text" name="login"> <br>

        <label class="form-label">Senha</label><br>
        <input  class="form-control" type="password" name="senha"><br>

        <button type="submit">Entrar</button>
        
    </form>


    
</div>

    
<?php 

    require_once "../template/rodape.php"?>