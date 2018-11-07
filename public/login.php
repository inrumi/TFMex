<!doctype html>
<html lang="es">
<?php include 'templates/head.php'; ?>
<body class="has-grey-background">
<header>
    <?php include 'templates/nav.php'; ?>
</header>
<main>
    <div class="content">
        <div class="row row--middle row--center" style="height: 60rem">
            <div class="column column--third">
                <form class="form" method="post">
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
                        <input type="submit" value="ACCEDER" class="btn btn--green">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>