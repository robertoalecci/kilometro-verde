<?php require_once($_SERVER['DOCUMENT_ROOT'].'/config.php'); ?>

<?php
    //Variabili per Header
    $title_tag = 'Kilometro Verde - We are vertical farm';
    $body_class = 'classe custom per la pagina';
    $breadcrumb = "titolo della pagina per le briciole di pane";
    $slug = "/";
    $meta_description = "meta description per la pagina";
?>

<?php include_once('header.php'); ?>

    <!--Hero-->
    <div class="container-fluid section-hero"></div>

    <div class="container-fluid section-about">
        <div class="rotate_text">
            <h1><span class="blue">We are</span> <span class="lgreen">vertical</span> farms</h1>
        </div>
        <p>Kilometro Verde trae le sue radici in una delle più importanti realtà Made in Italy, specializzate nella produzione di insalate pronte al consumo, con più di 30 anni di attività a livello internazionale nel settore ortofrutta. Obiettivo di Kilometro Verde è rispondere alla sensibilità del consumatore moderno, che ha a cuore l’ecologia, la sostenibilità e gli aspetti salutistici dei prodotti che consuma. Per questo abbiamo scelto l’agricoltura idroponica, approcciando l’economia circolare, per coltivare le nostre insalate.</p>
        <img class="home-plant-sx-top" src="<?php echo MIO_URL; ?>/img/home-plant-sx-top.png" alt="pianta">
        <img class="home-plant-sx-bottom" src="<?php echo MIO_URL; ?>/img/home-plant-sx-bottom.png" alt="pianta">
        <img class="home-plant-dx-top" src="<?php echo MIO_URL; ?>/img/home-plant-dx-top.png" alt="pianta">
        <img class="home-plant-dx-bottom" src="<?php echo MIO_URL; ?>/img/home-plant-dx-bottom.png" alt="pianta">
    </div>

    <div class="container-fluid section-packs">
        <h2><span class="blue">Scopri</span> petali</h2>
        <h3>L’insalata che non c’era</h3>
        <button class="cta">Scopri di più <i class="fa-solid fa-angle-right"></i></button>
        <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="pack_container">
                        <img src="<?php echo MIO_URL;?>/img/home-carousel-pack.png" class="pack" alt="pack">
                        <img src="<?php echo MIO_URL;?>/img/home-carousel-bg.svg" class="background" alt="background">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="pack_container">
                        <img src="<?php echo MIO_URL;?>/img/home-carousel-pack.png" class="pack" alt="pack">
                        <img src="<?php echo MIO_URL;?>/img/home-carousel-bg.svg" class="background" alt="background">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                <i class="custom-control fa-solid fa-chevron-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                <i class="custom-control fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <div class="container-fluid section-agricoltura">
        <h2>Insalate sane per natura, amiche del nostro ambiente e del <span class="blue">benessere dei nostri clienti</span></h2>
        <p>L’agricoltura idroponica è una tecnica di coltivazione, denominata fuori-suolo, che consente la crescita di ortaggi e vegetali senza terreno, prevedendo l’utilizzo di acqua, soluzioni minerali e substrato. Una tecnica innovativa ed ecologica, che consente di sottrarre meno spazio alla natura, organizzando e ottimizzando la coltivazione su più piani, all’interno di una costruzione verticale, meglio nota come “Vertical Farm”.</p>
        <img src="<?php echo MIO_URL; ?>/img/home-drop-location.png" alt="location">
    </div>

    <div class="container-fluid section-focus">
        <h2>I vantaggi <span class="blue">dell’idroponica</span></h2>
        <div class="row">
            <div class="col-4">
                <img src="<?php echo MIO_URL; ?>/img/home-focus-heart.svg" alt="focus">
                <h3>Basse emissioni di C02</h3>
            </div>
            <div class="col-4">
                <img src="<?php echo MIO_URL; ?>/img/home-focus-drop.svg" alt="focus">
                <h3>Si produce tutto l’anno</h3>
            </div>
            <div class="col-4">
                <img src="<?php echo MIO_URL; ?>/img/home-focus-heart.svg" alt="focus">
                <h3>Riqualifica aree industriali</h3>
            </div>
        </div>
        <div class="col-12">
            <button>Scopri di più <i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>

<?php include_once('footer.php'); ?>