<?php
include_once('inc/classes.php');

if(isset($_POST['btnCadastrar'])){
    $usuario = new Usuario();
    $usuario->cadastrar($_POST);
    header('location:usuario-cadastrar.php');
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <!-- CSS/ JS -->
    <?php
    include_once('inc/css.php');
    include_once('inc/js.php');
    ?>
    <!-- /CSS/ JS -->


</head>

<body>
    <div class="container">
        <!-- MENU -->
        <?php include_once('inc/menu-adm.php'); ?>
        <!-- /MENU -->
        <!-- PRINCIPAL -->
        <div class="row">
            <h1>Cadastro</h1>
            <form action="?" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" 
                        placeholder="Nome Completo" required>
                    </div>
                     <div class="col-md-6">
                        <label for="email" class="form-label">E-mail*</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="@teste.com.br" required>
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="form-label">Senha*</label>
                        <input class="form-control" type="password" name="senha" id="senha" placeholder="senha123" required>
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="form-label">Verificar senha*</label>
                        <input class="form-control" type="password" name="confirmar_senha" id="confirmar_senha" placeholder="senha123" required>
                    </div>
                    <div class="col-md-2 mt-4">
                    <input class="btn btn-outline-success mt-3" type="submit" name="btnCadastrar" id="Cadastrar" value="Cadastrar">
                    </div>
                    
                              
                </div>
            </form>
            
        </div>
        <!-- /PRINCIPAL -->
        <!-- RODAPE -->
        <div class="row">
            rodapé
        </div>
        <!-- /RODAPE -->
    </div>

   

   
</body>

</html>