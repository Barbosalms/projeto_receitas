<?php
include_once('inc/classes.php');
 $r = new Receita();

 if (isset($_GET['id'])&& $_GET['id'] !='') {
    $receita = $r->mostrar($_GET['id']);
   
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
            <h1><?php echo $receita->titulo ?></h1>
        </div>
        <div class="row">
            <div class="col-md-4">
            <img src="../img/<?php echo $receita->foto ?>" class="img-fluid" alt="Imagem">
            </div>
            <div class="col-md-6">
                <h2>Descrição</h2>
                <?php echo $receita->descricao ?>
            </div>
            <div class="col-md-2" >
                <?php echo $receita->dt ?>
            </div>
            
            
        </div>
        <div class="row">
            <div  class="col-md-6" >
                <h2>Ingredientes</h2>
                <?php echo $receita->ingredientes ?>
            </div>
            <div  class="col-md-6" >
                <h2>Modo de fazer</h2>
                <?php echo $receita->modo_fazer ?>
            </div>
        </div>

        <div class="row">
            <div   class="col-md-6">
                <h2>Video</h2>
                <?php echo $receita->video ?>
            </div>
        </div>

        <!-- /PRINCIPAL -->
        <!-- RODAPE -->
        <div class="row">
            rodapé
        </div>
        <!-- /RODAPE -->
    </div>
    <input type="hidden" value="Luiza Silva">
   

   
</body>

</html>