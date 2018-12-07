<?php 
require_once("header.php");
require_once("View/classView.php");
$classView = new classView; 
?>

<section class="indexBackground">
    <?= $classView->escolherClasses(); ?>
</section>

<?php require_once("footer.php");?>