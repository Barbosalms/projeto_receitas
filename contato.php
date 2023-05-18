<?php
include_once('inc/classes.php');

    if (isset($_POST['btnEnviar'])) {
        // echo '<pre>';
        //  print_r($_POST);
        //  print_r($_FILES);
        // echo '</pre>';
        header('location:?ok');
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JS / CSS -->
    <?php include_once('inc/css.php'); ?>
    <?php include_once('inc/js.php'); ?>
    <!-- / JS / CSS -->

    <title>Receitas</title>
</head>

<body>
    <div class="container">

    <!-- TOPO -->
    <div class="row">
        <?php include_once('inc/topo.php'); ?>
    </div>
    <!-- / TOPO -->

        <!-- MENU -->
        <?php include_once('inc/menu.php'); ?>
        <!--/ MENU -->
       
        <!-- BANNER -->
            <?php include_once('inc/banner.php');?>     
        <!-- /BANNER -->
        
        <!-- CONTEUDO -->
        <div class="row text-center">
            <h1>
                <i class="fa-solid fa-address-card"></i>
                Contato
            </h1>
            <?php
             if(isset($_GET['ok'])){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>OK!</strong> Mensagem enviada com sucesso.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
</div>
            <?php
             }//fecha o if da mensagem de alerta
            ?>
            <form action="?" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome*</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone*</label>
                        <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Ex.: 11 12345-6789" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="anexo" class="form-label">Anexo</label>
                        <input class="form-control" type="file" name="anexo" id="anexo">
                    </div>
                    <div class="col-12">
                        <label for="conteudo" class="form-label">Conteúdo</label>
                        <textarea class="form-control" name="conteudo" id="conteudo"></textarea>
                    </div>
                    <div class="col-md-2 mt-3">
                        <input type="submit" class="btn btn-danger" name="btnEnviar" id="btnEnviar" value=" Enviar ">
                    </div>

                </div>
            </form>

        </div>
        <!-- /CONTEUDO -->
        <!-- RODAPE -->
        <?php include_once('inc/rodape.php'); ?>
        <!-- /RODAPE -->
    </div>
</body>

</html>