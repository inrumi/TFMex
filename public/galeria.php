<!doctype html>
<html lang="es">
<?php include 'templates/head.php'; ?>
<body class="has-grey-background">
<header>
    <?php include 'templates/nav.php'; ?>
</header>
<main>
    <h2 class="title centered has-white-background">GALERÍA</h2>
    <div class="content">
        <div class="row row--large-thirds row--small-full row--with-gutters">
            <?php for ($i = 0; $i <= 5; $i++) { ?>
            <div class="column">
                <div class="apollo">
                    <a href="galeria-seleccionada">
                        <img src="images/galeria/galeria-carpeta-imagen.jpg" alt="">
                        <div class="apollo__content">
                            <h2>TRIATLÓN BULOVA CANCÚN</h2>
                            <p>
                                12 de Diciembre 2017
                                <br>
                                Cancún
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>