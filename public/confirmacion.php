<!doctype html>
<html lang="es">
<?php include 'templates/head.php'; ?>
<body class="has-grey-background">
<header>
    <?php include 'templates/nav.php'; ?>
</header>
<main>
    <!--
    FIXME checar si es necesario en realidad
    <div class="hero hidden">
        <img src="images/convocatorias/slide-convocatoria.jpg" alt="Nombre de la convocatoria">
    </div>
    -->
    <div id="convocatoria" class="convocatoria has-charcoal-background">
        <div class="content">
            <div class="row row--with-gutters row--center">
                <div class="column column--small-full convocatoria__img">
                    <img src="images/convocatorias/imagen-evento.jpg" alt="" style="display:block; margin: 0 auto;">
                </div>
                <div class="column column--half convocatoria__info">
                    <h3>Triatlón Cancún Bulova 2018</h3>
                    <p>15 de julio del 2018</p>
                    <p>Cancún, Quintana Roo</p>
                    <p>Distancias: Sprint/Infantil/Super Sprint/Relevos/Paratriatletas</p>
                </div>
            </div>
        </div>
    </div>
    <div class="convocatoria__menu has-green-background vertical-space centered">
        <h2 class="is-white">
            CONFIRMACIÓN
            <br>
            <span>Proceso completo</span>
        </h2>
    </div>
    <div id="confirmacion" class="content">
        <div class="row row--center">
            <div class="column column--half centered">
                <i class="fas fa-check-circle fa-4x"></i>

                <h2>¡HAS COMPLETADO TU INSCRIPCIÓN EXITOSAMENTE!</h2>
                <p>
                    Muchas gracias por tu participación. En breve, se te enviará un correo electrónico con la
                    confirmación de tu inscripción.
                </p>
                <a href="index" class="btn btn--green btn--large">FINALIZAR</a>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>