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
            <div class="row text-center mb-5">
                <h1>Receita de Doce</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img src="img/doce-001.jpg" alt="Receita de doce" class="img-fluid foto_receita">
                </div>

                <div class="col-md-8">
                <h2>Ingredientes</h2>
                    <ul>
                        <li>12 Unidade de gema</li>
                        <li>500 gr de açúcar</li>
                        <li>2 colheres (sopa) de margarina</li>
                        <li>200 ml de leite de côco</li>
                        <li>200 gr de coco ralado</li>
                    </ul>
                  </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                <h2>Modo de Preparo</h2>
                    <ol>
                        <li>Numa tigela, coloque o açúcar e a margarina;</li>
                        <li>Misture bem e em seguida adicione as gemas;</li>
                        <li>Continue misturando com a ajuda de um batedor de arame (fouet);</li>
                        <li>Acrescente o leite de coco e o coco ralado;</li>
                        <li>Misture tudo até que fique bem homogêneo;</li>
                        <li>Despeje essa mistura em forminhas untadas com margarina e salpicadas com açúcar;</li>
                        <li>DICA: unte bem para que os quindins fiquem mais brilhosos;</li>
                        <li>Leve para assar em forno baixo, pré aquecido, em banho maria por cerca de 30 minutos;</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h2>Vídeo da Receita</h2>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/HLVLQbzsH28" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        

        <!-- /CONTEUDO -->

        <!-- RODAPE -->
        <?php include_once('inc/rodape.php');?>
        <!-- /RODAPE -->
    </div>
</body>

</html>