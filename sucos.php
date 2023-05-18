<?php
include_once('inc/classes.php');
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
        <?php include_once('inc/menu.php');?>     
        <!--/ MENU -->
       
        <!-- BANNER -->
        <?php include_once('inc/banner.php');?>     
        <!-- /BANNER -->
        
        <!-- CONTEUDO -->
        <div class="row text-center">            
            <h1>
                <i class="fa-solid fa-glass-water"></i>
                Sucos
            </h1>
        </div>

        <div class="row mt-2 border-top border-1 p-2">
            <div class="col-sm-2 col-3"> <img src="img/suco-001.jpg" alt="Foto da receita" class="foto_mini"></div>
            <div class="col-sm-8 col-6 p-3">Suco de Limão</div>
            <div class="col-sm-2 col-3 p-3"><a href="descricao-da-receita.php" target="_self">Ver</a></div>
        </div>

        <div class="row mt-2 border-top border-1 p-2">
            <div class="col-sm-2 col-3"> <img src="img/suco-002.jpg" alt="Foto da receita" class="foto_mini"></div>
            <div class="col-sm-8 col-6 p-3">Pink Lemonade</div>
            <div class="col-sm-2 col-3 p-3"><a href="descricao-da-receita.php" target="_self">Ver</a></div>
        </div>

        <div class="row mt-2 border-top border-1 p-2">
            <div class="col-sm-2 col-3"> <img src="img/suco-003.jpg" alt="Foto da receita" class="foto_mini"></div>
            <div class="col-sm-8 col-6 p-3">Suco de Laranja</div>
            <div class="col-sm-2 col-3 p-3"><a href="descricao-da-receita.php" target="_self">Ver</a></div>
        </div>
        <!-- /CONTEUDO -->
        <!-- RODAPE -->
        <?php include_once('inc/rodape.php');?>
        <!-- /RODAPE -->
    </div>
</body>

</html>