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
        <!--Custom CSS-->
        <link href="<?php echo MIO_URL; ?>/css/style.css" rel="stylesheet">
    </head>
    <body class="<?php echo (!empty($body_class) ? $body_class : ''); ?>">

    <!--Navbar-->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="<?php echo MIO_URL; ?>/img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Bootstrap
        </a>
      </div>
    </nav>