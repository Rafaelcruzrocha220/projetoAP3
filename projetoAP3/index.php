<?php 
    require_once("header.php");
    require_once("View/menuView.php");
    $viewMenu = new menuView;
?>

    <section class="indexBackground">
        <div class="containerMenu">
            <h1 class="titleIndex">Gerenciar notas</h1>

            <?= require_once("View/templatesMenu/" .  $viewMenu->menu(false) ) ?>

        </div>
    </section>
    
<?php require_once("footer.php");?>