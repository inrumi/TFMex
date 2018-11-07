<!doctype html>
<html lang="es">
<?php include 'templates/head.php'; ?>
<body>
<header>
    <?php include 'templates/nav.php'; ?>
</header>
<main>
    <div id="carousel" class="carousel">
        <div class="carousel__item carousel__item--show">
            <div class="carousel__background" style="background-image: url(images/slides/slide-01.jpg);"></div>
        </div>
        <div class="carousel__item">
            <div class="carousel__background" style="background-image: url(images/slides/slide-02.jpg);"></div>
        </div>
        <div class="carousel__item">
            <div class="carousel__background" style="background-image: url(images/slides/slide-03.jpg);"></div>
        </div>
        <div class="carousel__item">
            <div class="carousel__background" style="background-image: url(images/slides/slide-04.jpg);"></div>
        </div>
    </div>

    <div id="patrocinadores" class="content vertical-space">
        <div class="sliders">
            <h3 class="sliders__title">Conoce nuestros patrocinadores</h3>
            <div class="sliders__content">
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-01.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-02.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-03.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-04.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-05.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-06.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-07.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-08.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-09.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-10.png" alt="">
                </div>
                <div class="sliders__item">
                    <img src="images/patrocinadores/patrocinador-11.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="eventos" class="has-grey-background">
        <div class="content vertical-space">
            <div class="cards">
                <div class="cards__item">
                    <div class="cards__image">
                        <a href="convocatoria">
                            <img src="images/convocatorias/imagen-evento.jpg">
                        </a>
                    </div>
                    <div class="cards__content">
                        <div class="cards__info">
                            <h3>Triatlón Cancún Bulova 2018</h3>
                            <p>
                                15 de Julio, 2018
                                <br>
                                Cancún, Quintana Roo
                                <br>
                                Distancias: Sprint/Infantil/Super Sprint/Relevos/Paratriatletas
                            </p>
                        </div>
                        <div class="cards__action">
                            <a href="convocatoria" class="btn btn--green">INSCRIBIRME</a>
                        </div>
                    </div>
                </div>
                <div class="cards__item">
                    <div class="cards__image">
                        <img src="images/convocatorias/imagen-evento-02.jpg">
                    </div>
                    <div class="cards__content">
                        <div class="cards__info">
                            <h3>8a Ciclomarcha Deportiva de Gran Fondo Cancún – Chichén Itzá</h3>
                            <p>
                                9 de Junio del 2018
                                <br>
                                Cancún, Quintana Roo
                                <br>
                                Distancias: 212k/100k
                            </p>
                        </div>
                        <div class="cards__action">
                            <button class="btn btn--green">INSCRIBIRME</button>
                        </div>
                    </div>
                </div>
                <div class="cards__item">
                    <div class="cards__image">
                        <img src="images/convocatorias/imagen-evento-03.jpg">
                    </div>
                    <div class="cards__content">
                        <div class="cards__info">
                            <h3>Triatlón Hacienda Tres Ríos 2018</h3>
                            <p>
                                27 de Mayo del 2018
                                <br>
                                Riviera Maya
                                <br>
                                Distancias: Sprint/Infantil
                            </p>
                        </div>
                        <div class="cards__action">
                            <button class="btn btn--green">INSCRIBIRME</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-more">
                <h3>Ver más eventos</h3>
                <i class="fas fa-chevron-down fa-3x"></i>
            </div>
        </div>
    </div>

    <?php include 'templates/contact-form.php'; ?>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>