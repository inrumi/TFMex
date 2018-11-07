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
    <div class="content">
        <h3 class="centered">CREA TU CUENTA Y AGILIZA TUS INSCRIPCIONES A LOS EVENTOS</h3>
        <form class="form" method="post">
            <div class="row row--center">
                <div class="column column--half column--small-three-quarters">
                    <div class="row">
                        <div class="column">
                            <div class="form__item">
                                <input type="text" name="nombre" title="nombre" required>
                                <div class="form__label">Nombre(s)</div>
                                <div class="form__border"></div>
                                <div class="form__border--focus"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row--with-gutters">
                        <div class="column">
                            <div class="form__item">
                                <input type="text" name="apellido_materno" title="Apellido Materno" required>
                                <div class="form__label">Apellido Materno</div>
                                <div class="form__border"></div>
                                <div class="form__border--focus"></div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form__item">
                                <input type="text" name="apellido_paterno" title="Apellido Paterno" required>
                                <div class="form__label">Apellido Paterno</div>
                                <div class="form__border"></div>
                                <div class="form__border--focus"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="form__item">
                                <input type="email" name="email" title="Email" required>
                                <div class="form__label">Correo Electronico</div>
                                <div class="form__border"></div>
                                <div class="form__border--focus"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="form__item">
                                <input type="password" name="password" title="Password" required>
                                <div class="form__label">Password</div>
                                <div class="form__border"></div>
                                <div class="form__border--focus"></div>
                            </div>
                        </div>
                    </div>
                    <div class="centered">
                        <input type="submit" value="CREAR CUENTA" class="btn btn--green">
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>