<?php   
    require_once "../login/controlar_acesso.php";
    require_once "../login/validar.php";
    require_once "../template/menu_restrito.php";
    require_once "../template/cabecalho.php";
?>

    <div class="container">
        <h1>Área Restrita</h1> <br>

    <?php if(isset($erro_login)):?>

        <div class="alert alert-dark" role="alert">
            <?php echo $erro_login;?>
  <strong></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    <?php endif;?>

    <form action="formulario.php"
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