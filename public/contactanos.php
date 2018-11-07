<!doctype html>
<html lang="es">
<?php include 'templates/head.php'; ?>
<body class="has-grey-background">
<header>
    <?php include 'templates/nav.php'; ?>
</header>
<main>
    <div class="hero">
        <img src="images/pages/slide-nosotros.jpg" alt="Nosotros">
    </div>
    <div id="networks" class="vertical-space has-white-background">
        <div class="content centered">
            <h3>Contáctanos en nuestras redes sociales</h3>
            <div class="row row--center">
                <div class="column column--half column--small-three-quarters">
                    <div class="row row--bottom">
                        <div class="column column--fourth">
                            <div class="row">
                                <div class="column">
                                    <a href="#" style="color: #3B5798"><i class="fab fa-facebook-square fa-2x"></i></a>
                                </div>
                                <div class="column">
                                    <a href="#" style="color: #2FA8DA"><i class="fab fa-twitter-square fa-2x"></i></a>
                                </div>
                                <div class="column">
                                    <a href="#" style="color: #B4408E"><i class="fab fa-instagram fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="column column--three-quarters righted">
                            <a href="#" class="oswald fa-2x is-grey"><i class="fas fa-phone" style="color: #7BC145"></i> 01 800 000 0000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="panel">
            <?php include 'templates/contact-form.php'; ?>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>