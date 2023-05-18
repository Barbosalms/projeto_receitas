<?php
include_once('inc/classes.php');
$Usuario = new Usuario();

    if(isset($_POST['btnLogar'])){
        $u = $Usuario->logar(
            $_POST['email'],
            $_POST['senha']
        );
        
        if($u){
            header('location:receitas.php');
        }else{
           header('location:?e'); 
        }
       
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

        <!-- PRINCIPAL -->
        <div class="row">
            <h1 class="offset-md-4 col-md-4 mt-4 text-center">ÁREA RESTRITA</h1>
            <div class="offset-md-4 col-md-4 border border-dark rounded p-4">

                <form action="?" method="post">
                    <div class="col-12">
                        <label for="email" class="form-label fw-bold">
                            E-mail*
                        </label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="col-12 mt-2">
                        <label for="senha" class="form-label fw-bold">
                            Senha*
                        </label>
                        <input type="password" class="form-control" name="senha" id="senha" required>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <a href="#">
                                Esqueci minha senha.
                            </a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" name="btnLogar" id="btnLogar" value="Logar">
                        </div>
                    </div>
                    <?php 
                        if(isset($_GET['e']) ){
                    ?>
                    <div class="alert alert-outline-danger mt-2">
                        Usuário ou senha inválida
                    </div>
                    <?php
                        }
                    ?>

                </form>
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