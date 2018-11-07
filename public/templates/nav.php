<nav class="nav">
    <a href="index" class="nav__link--logo">
        <img src="images/logo-inicio.png" alt="Tri4MEX Logo">
    </a>

    <button class="nav__toggler">
        <i class="fas fa-bars"></i>
    </button>

    <div class="nav__collapsable">
        <ul class="nav__section">
            <li class="nav__item">
                <a href="index" class="nav__link">INICIO</a>
            </li>
            <li class="nav__item">
                <a href="quienes-somos" class="nav__link">¿QUIÉNES SOMOS?</a>
            </li>
            <li class="nav__item">
                <a href="galeria" class="nav__link">GALERÍA</a>
            </li>
            <li class="nav__item">
                <a href="convocatoria" class="nav__link">EVENTOS</a>
            </li>
            <li class="nav__item">
                <a href="contactanos" class="nav__link">CONTÁCTANOS</a>
            </li>
        </ul>

        <ul class="nav__section">
            <li class="nav__item">
                <?php $rand = rand(0, 1); ?>
                <?php if ($rand) { ?>
                <a href="registro" class="nav__link nav__link--white-border">REGISTRARSE</a>
                <?php } else { ?>
                <a href="login" class="nav__link nav__link--white-border">INICIAR SESIÓN</a>
                <?php } ?>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link nav__link--white-border">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link nav__link--white-border">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>