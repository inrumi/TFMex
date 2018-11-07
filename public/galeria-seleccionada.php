<!doctype html>
<html lang="es">
<?php include 'templates/head.php'; ?>
<body class="has-grey-background">
<header>
    <?php include 'templates/nav.php'; ?>
</header>
<main>
    <h2 class="title centered has-white-background">GALERÍA SELECCIONADA</h2>
    <div class="content">
        <div id="gallery" class="row row--with-gutters row--large-quarters row--small-halfs vertical-space">
            <?php for ($i = 0; $i <= 7; $i++) { ?>
                <a href="images/galeria/galeria-carpeta-imagen.jpg" class="column" style="margin-top: 1rem">
                    <img src="images/galeria/galeria-carpeta-imagen.jpg" alt="">
                </a>
            <?php } ?>
        </div>
        <a href="galeria" class="btn btn--large">REGRESAR</a>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>