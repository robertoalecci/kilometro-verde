<?php require_once($_SERVER['DOCUMENT_ROOT'].'/config.php'); ?>

<?php
    //Variabili per Header
    $title_tag = 'titolo della pagina';
    $body_class = 'classe custom per la pagina';
    $breadcrumb = "titolo della pagina per le briciole di pane";
    $slug = "/";
    $meta_description = "meta description per la pagina";
?>

<?php include_once('header.php'); ?>

    <!--Contenuto pagina-->
    <div class="container">
        <h1>Titolo</h1>
    </div>

<?php include_once('footer.php'); ?>