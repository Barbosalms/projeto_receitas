<?php
include_once('inc/classes.php');

$ban = new Banner();

    if(isset($_POST['btnExcluir'])){        
        $ban->excluir($_POST['id_banner']);
        header('location:banners.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - Excluir Banner</title>
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
            <h1>Excluir Banner:<?php echo $_GET['id']; ?></h1>
            <!-- FORMULARIO -->
            <form action="?" method="post" class="border">
                <input type="hidden" name="id_banner" 
                value="<?php echo $_GET['id']; ?>">

                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="banner">
                            Deseja relamente excluir o banner?
                        </label>
                        <input class="btn btn-outline-danger ml-1 mt-4" type="submit"
                        name="btnExcluir" id="btnExcluir"  value="Sim">
                        <a class="btn btn-outline-primary ml-1 mt-4" href="banners.php">
                            Não
                        </a>                        
                    </div>
                    
                </div>
            </form>
            <!-- /FORMULARIO -->
            
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