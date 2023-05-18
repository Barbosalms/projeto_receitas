<?php
include_once('inc/classes.php');

    if(isset($_POST['btnCadastrar'])){
        $ban = new Banner();
        $ban->cadastrar($_FILES['banner'],$_POST['url']);
        header('location:?ok');
    }

?>

<?php
include_once('inc/classes.php');
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
        <?php include_once('inc/menu-adm.php');?>
        <!-- /MENU -->
        <!-- PRINCIPAL -->
       <!-- PRINCIPAL -->
       <div class="row">
            <h1>BANNERS
             
            </h1>
            <!-- FORMULARIO -->
            <form action="?" method="post" class="border border-secondary p2 m2" enctype="multipart/form-data">
                <div class="row">
                <div class="col md-4">
                        <label class="form-label" for="banner">Banner</label>
                        <input class="form-control" type="file" name="banner" id="banner" >
                    </div>
                    <div class="col md-4">
                        <label class="form-label" for="url">URL</label>
                        <input class="form-control" type="url" name="url" id="url"
                        value=""
                        >
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-outline-success mt-4" type="submit"
                        name="btnCadastrar" id="btnCadastrar"  value="Cadastrar">
                    </div>
                </div>
            </form>
            <!-- /FORMULARIO -->
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="col-md-2">Ações</th>
                        <th class="col-md-2">ID</th>                      
                        <th class="col-md-2">BANNER</th>
                        <th class="col-md-2">URL</th>                      
                    </tr>
                </thead>
                <tbody>
                <?php
                    $objBanner = new Banner();
                    $banners = $objBanner->listar();
                    foreach ($banners as $banner) {
                ?>
                        <tr>
                            <td>
                                <div class="flex-row">
                                    
                                    <!-- excluir -->
                                    <a class="btn btn-outline-danger " href="banner-excluir.php?id=<?php echo $banner->id_banner; ?>">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>                                   
                                </div>
                            </td>
                            <!-- id banner -->
                            <td><?php echo $banner->id_banner; ?></td>     
                            
                            <!-- banner -->
                            <td>
                                <?php                                  
                                      echo '<img src="../img/banner/'.$banner->banner,'" class="img-thumbnail">';                                   
                                ?>
                            </td>
                            <!-- url -->
                            <td><?php echo $banner->url; ?></td> 
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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