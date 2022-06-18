<!DOCTYPE html>
<html lang="it">
    <head>
        <!--Meta tag-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Titolo della pagina-->
        <title><?php echo (!empty($title_tag) ? $title_tag : NOME_SITO); ?></title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo (!empty($meta_description) ? $meta_description : ''); ?>"/>
        <!-- Bootstrap CSS -->
        <link href="<?php echo MIO_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
        <!--Custom CSS-->
        <link href="<?php echo MIO_URL; ?>/style.css" rel="stylesheet">
    </head>
    <body class="<?php echo (!empty($body_class) ? $body_class : ''); ?>">

    <!--Navbar-->
    <nav class="navbar d-block fixed-top container-fluid animate">
      <div class="row">
        <div class="col-4">
          <img class="animate logotipo" src="<?php echo MIO_URL; ?>/img/kilometro-verde-logotipo.svg" alt="logotipo">
        </div>
        <div class="col-4">
          <img class="animate marchio" src="<?php echo MIO_URL; ?>/img/kilometro-verde-marchio.svg" alt="marchio">
        </div>
        <div class="col-4">
          <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><?php echo file_get_contents(MIO_URL.'/img/icon/menu.svg'); ?></button>
          <!--<img class="animate menu" src="<?php //echo MIO_URL; ?>/img/icon/menu.svg" alt="menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">-->
        </div>
      </div>
    </nav>

    <!--Off Canvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul>
          <li>Home</li>
          <li>Chi Siamo</li>
          <li>Petali</li>
          <li>Contatti</li>
        </ul>
      </div>
    </div>
