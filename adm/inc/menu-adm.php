<?php
    Helper::taLogado();
?>
<div class="row">
    <nav class="navbar my-2 rounded" style="background-color: pink">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <?php echo $_SESSION['nome']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/receitas/adm/categorias.php">
                        <i class="bi bi-tag-fill"></i>
                        Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/receitas/adm/receitas.php">
                    <i class="bi bi-egg-fried"></i>
                        Receitas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/receitas/adm/banners.php">
                        <i class="bi bi-images"></i>
                        Banners
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/receitas/adm/usuarios.php">
                    <i class="fa-solid fa-user-group"></i>
                        Usuários
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/receitas/adm/logoff.php" class="nav-link">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</div>