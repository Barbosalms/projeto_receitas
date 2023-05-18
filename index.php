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
        
        <div class="row m-5"></div>


        <!-- ############ O QUE FAZEMOS ############ -->
        <div class="row text-center mt-5 mb-5">
            <h2>O QUE FAZEMOS</h2>
            <h3>Venha provar nossas delícias</h3>
        </div>

        <div class="row text-center oquefazemos">
            <div class="col-sm-3 col-xs-6">
                <img src="img/icone-doces.png" alt="Doces" class="img-fluid">
                <h4>DOCES</h4>
                <p>Doces tradicionais e receitas secretas</p>
            </div>

            <div class="col-sm-3 col-xs-6">
                <img src="img/icone-bolos.png" alt="Bolos" class="img-fluid">
                <h4>BOLOS</h4>
                <p>Caseiros ou profissionais, sempre uma delícia</p>
            </div>

            <div class="col-sm-3">
                <img src="img/icone-sucos.png" alt="Sucos" class="img-fluid">
                <h4>SUCOS</h4>
                <p>As frutas mais incríveis. Sucos deliciosos</p>
            </div>

            <div class="col-sm-3">
                <img src="img/icone-pratos-quentes.png" alt="Pratos Quentes" class="img-fluid">    
                <h4>PRATOS QUENTES</h4>
                <p>Nossas receitas vão te surpreender</p>
            </div>
        </div>
        <!-- ############ /O QUE FAZEMOS ############ -->

        <div class="row m-5"></div>


    <!-- ############ DICAS ############ -->
    <div class="row dicas mt-5">

        <div class="row text-center mt-3 mb-3">
            <h2>DICAS DE RECEITAS</h2>
        </div>
    
        <div class="col-sm-4" style="padding=3%" >
        <img src="img/prato-001.png" alt="Dica de Prato" class="card-img-top mt-3 card">
            <h5>Prato 1</h5>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem cabeça.</p>
        </div>
    
        <div class="col-sm-4" style="padding=3%" >
        <img src="img/prato-002.png" alt="Dica de Prato" class="card-img-top mt-3 card">
            <h5>Prato 2</h5>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem cabeça.</p>
        </div>

        <div class="col-sm-4" style="padding=3%" >
            <img src="img/prato-003.png" alt="Dica de Prato" class="card-img-top mt-3 card">
            <h5>Prato 3</h5>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem cabeça.</p>
        </div>
    
        <div class="col-sm-4 d-none d-sm-block" style="padding=3%" >
            <img src="img/prato-004.png" alt="Dica de Prato" class="card-img-top mt-3 card">
            <h5>Prato 4</h5>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem cabeça.</p>
        </div>

        <div class="col-sm-4 d-none d-sm-block" style="padding=3%" >
            <img src="img/prato-005.png" alt="Dica de Prato" class="card-img-top mt-3 card">
            <h5>Prato 5</h5>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem cabeça.</p>
        </div>

        <div class="col-sm-4 d-none d-sm-block" style="padding=3%" >
            <img src="img/prato-006.png" alt="Dica de Prato" class="card-img-top mt-3 card">
            <h5>Prato 6</h5>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem cabeça.</p>
        </div>



    </div>
    <!-- ########### / DICAS ########### -->





        <!-- /CONTEUDO -->
        <!-- RODAPE -->
        <?php include_once('inc/rodape.php');?>
        <!-- /RODAPE -->
    </div>
</body>

</html>