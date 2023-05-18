<?php
include_once('inc/classes.php');

// Verificar se um ID RECEITA foi enviado por GET
if (isset($_GET['id']) && $_GET['id'] != '') {
    $objR = new Receita();
    $receita = $objR->mostrar($_GET['id']);
} else {
    header('location:receitas.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Thomas Melo">
    <title>Área Administrativa | <?php echo $receita->titulo; ?></title>
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
            <div class="row text-center mb-5">
                <h1>Receita:<?php echo $receita->titulo; ?></h1>
            </div>

            <div class="row">
                <?php
                if ($receita->foto != '') {
                ?>
                    <div class="col-md-4">
                        <img src="../img/<?php echo $receita->foto; ?>" alt="<?php echo $receita->titulo; ?>" class="img-fluid">
                    </div>
                <?php
                }
                ?>
                <div class="col-md-8">
                    <?php
                    if ($receita->descricao != '') {
                        echo '<h2>Descrição</h2>';
                        echo '<p>'.nl2br($receita->descricao).'</p>';
                    }
                    ?>                    
                    <?php
                    if ($receita->ingredientes != '') {
                        echo '<h2>Ingredientes</h2>';
                        echo '<p>'.nl2br($receita->ingredientes).'</p>';
                    }
                    ?>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">                   
                    <?php
                    if ($receita->modo_fazer != '') {
                        echo '<h2>Modo de Preparo</h2>';
                        echo '<p>'.nl2br($receita->modo_fazer).'</p>';
                    }
                    ?>
                </div>
                <?php
                    $video = $receita->video;
                    if( $video =!''){
                ?>
                <div class="col-md-6">
                    <h2>Vídeo da Receita</h2>                   
                    <iframe width="100%" height="315" src="<?php echo $receita->video;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <?php 
                    }
                ?>
            </div>
            

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