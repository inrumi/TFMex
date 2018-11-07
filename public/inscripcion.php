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
    <div class="convocatoria__menu has-green-background small-vertical-space centered">
        <h2 class="is-white">
            INSCRIPCIÓN
            <br>
            <span>Información general</span>
        </h2>
    </div>
    <div id="inscripcion" class="content">
        <h3>Selecciona una categoría</h3>
        <form action="pago" method="post" class="form">
            <div class="row row--small-full">
                <div class="column column--half">
                    <div class="form__item">
                        <select name="categoria" id="categoria" title="select" class="form__select" required>
                            <option value="">Categorías</option>
                            <option value="2">Categoría 1</option>
                            <option value="3">Categoría 2</option>
                        </select>
                        <i class="fas fa-chevron-down"></i>
                        <div class="form__border"></div>
                        <div class="form__border--focus"></div>
                    </div>
                </div>
                <div class="column">
                    <table class="table table--righted table--prices">
                        <tr>
                            <th>SUBTOTAL</th>
                            <td>$00.00 MXN</td>
                        </tr>
                        <tr>
                            <th>I.V.A.</th>
                            <td>$00.00 MXN</td>
                        </tr>
                        <tr class="total">
                            <th>TOTAL</th>
                            <td>$00.00 MXN</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="righted vertical-space">
                <input type="submit" value="CONTINUAR" class="btn btn--green btn--large">
            </div>
        </form>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>