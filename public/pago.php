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
            PAGO DE INSCRIPCIÓN
            <br>
            <span>Método de pago</span>
        </h2>
    </div>
    <div id="pago" class="content">
        <!--        <h3>Para continuar con tu inscripción es necesario crear una cuenta</h3>-->
        <form action="confirmacion" method="post" class="form">
            <div class="row row--small-full">
                <div class="column column--half">
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
                    <div class="row row--with-gutters">
                        <div class="column">
                            <div class="panel">
                                <div class="row row--with-gutters row--middle">
                                    <div class="column column--three-quarters">
                                        <h3 style="margin-top: 0">Pago en tiendad OXXO</h3>
                                        Realiza tu pago desde la tienda más cercana a tí
                                    </div>
                                    <div class="column">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.748 81.002"
                                             preserveAspectRatio="xMidYMid meet">
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#EEA52D"
                                                  d="M0 5.473C0 2.462 2.462 0 5.473 0h164.803c3.01 0 5.473 2.462 5.473 5.473V75.53c0 3.011-2.463 5.473-5.473 5.473H5.473C2.462 81.002 0 78.54 0 75.529V5.473z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF"
                                                  d="M0 7.953h175.748v65.095H0V7.953z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#ED1C24"
                                                  d="M148.941 24.858c-8.041 0-14.596 6.557-14.596 14.598 0 8.037 6.555 14.594 14.596 14.594 8.039 0 14.595-6.557 14.595-14.594 0-8.041-6.556-14.598-14.595-14.598zM28.64 24.858c-8.042 0-14.597 6.557-14.597 14.598 0 8.037 6.556 14.594 14.597 14.594 8.038 0 14.594-6.557 14.594-14.594 0-8.041-6.556-14.598-14.594-14.598z"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#ED1C24"
                                                  d="M147.796 12.014c-13.511-.311-19.863 8.354-29.082 19.04l-8.697 10.078 13.771 16.486c3.281 5.065-2.98 10.093-6.866 5.458L104.19 47.888 91.783 62.271c-3.951 4.578-10.143-.536-6.791-5.555l13.469-15.662-8.824-10.527 5.677-7.029 8.974 10.78 7.736-8.999c3.795-4.412 7.666-10.258 12.684-13.265H0v56.975h29.157c13.513 0 19.648-8.079 28.617-18.974l8.463-10.279-14.15-16.163c-3.394-4.989 2.749-10.157 6.74-5.614l13.078 14.893L83.98 18.184c3.843-4.67 10.148.303 6.915 5.397L77.791 39.552l9.064 10.32-5.711 6.764-9.023-10.177-7.525 9.172c-3.693 4.499-7.432 10.236-12.379 13.357h123.531V12.014h-27.952zM51.697 39.456c0 12.701-10.356 23.059-23.057 23.059-12.704 0-23.061-10.357-23.061-23.059 0-12.704 10.356-23.061 23.061-23.061 12.701.001 23.057 10.357 23.057 23.061zm97.244 23.059c-12.701 0-23.061-10.357-23.061-23.059 0-12.704 10.359-23.061 23.061-23.061 12.703 0 23.059 10.356 23.059 23.061 0 12.701-10.355 23.059-23.059 23.059z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="oxxo" class="row horizontal-space <!--hidden-->" style="margin-bottom: 2rem">
                        <div class="column column--full">
                            <h3 style="margin: .5rem 0">Número de referencia</h3>
                        </div>
                        <div class="column column--full has-white-background">
                            <h2 class="oswald centered">1234-5678-9123-45</h2>
                        </div>
                        <div class="column">
                            <dl>
                                <dt>INSTRUCCIONES:</dt>
                                <dd>1. Acude a la tienda OXXO más cercana</dd>
                                <dd>2. Indica en caja que quieres realizar un pago de OXXOPay</dd>
                                <dd>3. Dicta al cajero el número de referencia en esta ficha para que la tecleé directamente en la pantalla de venta.</dd>
                                <dd>4. Realiza el pago correspondiente con dinero efectivo</dd>
                                <dd>5 Al confirmar tu pago, el cajero te entregará un comprobante impreso. En él podrás verificar que se haya realizado correctamente. Conserva este comprobante de pago</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="row row--with-gutters">
                        <div class="column">
                            <div class="panel">
                                <div class="row row--with-gutters row--middle">
                                    <div class="column column--half">
                                        <h3 style="margin-top: 0">Pago con tarjeta</h3>
                                        Realiza el pago con tu tarjeta de crédito ó debito AMEX, VISA y Mastercard.
                                    </div>
                                    <div class="column">
                                        <div class="row row--with-gutters">
                                            <div class="column">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     viewBox="0 0 78.301 48.994">
                                                    <defs>
                                                        <path id="a" d="M0 0h78.301v48.994H0z"></path>
                                                    </defs>
                                                    <clipPath id="b">
                                                        <use xlink:href="#a" overflow="visible"></use>
                                                    </clipPath>
                                                    <g clip-path="url(#b)">
                                                        <radialGradient id="c" cx="-135.243" cy="645.407" r="73.445"
                                                                        gradientTransform="matrix(1 0 0 -1 149.052 644.049)"
                                                                        gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#9fd4f3"></stop>
                                                            <stop offset=".071" stop-color="#99d2f2"></stop>
                                                            <stop offset=".158" stop-color="#8bcdf1"></stop>
                                                            <stop offset=".252" stop-color="#71c6ef"></stop>
                                                            <stop offset=".351" stop-color="#51bcea"></stop>
                                                            <stop offset=".455" stop-color="#21ade4"></stop>
                                                            <stop offset=".5" stop-color="#1aa6df"></stop>
                                                            <stop offset="1" stop-color="#3078bc"></stop>
                                                        </radialGradient>
                                                        <path fill="url(#c)"
                                                              d="M78.266-15.082H0v78.549h78.266V37.544c.311-.449.465-1.024.465-1.727 0-.805-.154-1.303-.465-1.723"></path>
                                                        <path fill="#FFF"
                                                              d="M7.055 18.908L5.55 15.239l-1.498 3.669m36.173-1.461c-.302.183-.66.189-1.088.189h-2.672v-2.043h2.708c.383 0 .784.017 1.043.166.286.134.462.419.462.814 0 .402-.168.725-.453.874zm19.064 1.461l-1.522-3.669-1.514 3.669h3.036zm-35.538 3.971h-2.255l-.008-7.208-3.19 7.208h-1.932l-3.198-7.215v7.215H8.694l-.845-2.053h-4.58l-.854 2.053H.025l3.939-9.204h3.269l3.741 8.714v-8.714h3.59l2.879 6.244 2.644-6.244h3.663v9.204h.001zm8.989 0h-7.349v-9.204h7.349v1.917h-5.149v1.658h5.025v1.887h-5.025v1.838h5.149v1.904zm10.361-6.725c0 1.468-.979 2.226-1.55 2.453.481.184.893.507 1.088.775.311.458.364.867.364 1.689v1.808h-2.219l-.009-1.161c0-.553.054-1.35-.347-1.792-.321-.324-.811-.394-1.603-.394h-2.361v3.348h-2.2v-9.204h5.06c1.125 0 1.953.03 2.664.441.696.411 1.113 1.011 1.113 2.037zm3.521 6.725h-2.245v-9.204h2.245v9.204zm26.04 0h-3.117l-4.17-6.908v6.908h-4.48l-.856-2.053h-4.57l-.831 2.053h-2.574c-1.069 0-2.423-.237-3.19-1.018-.773-.782-1.175-1.84-1.175-3.514 0-1.365.24-2.612 1.186-3.599.711-.734 1.825-1.073 3.34-1.073h2.13v1.972H52.27c-.803 0-1.256.119-1.692.545-.375.388-.633 1.12-.633 2.084 0 .986.196 1.697.605 2.162.338.364.954.475 1.533.475h.988l3.101-7.238h3.296l3.724 8.705v-8.705h3.35l3.867 6.41v-6.41h2.253v9.204zM0 24.687h3.759l.847-2.044h1.897l.845 2.044h7.396v-1.563l.66 1.569h3.839l.661-1.592v1.585h18.378l-.008-3.355h.355c.249.008.322.032.322.443v2.912h9.506v-.781c.767.411 1.959.781 3.528.781h3.999l.856-2.044h1.897l.837 2.044h7.706v-1.941l1.167 1.941h6.175V11.851h-6.111v1.516l-.856-1.516h-6.271v1.516l-.786-1.516h-8.471c-1.418 0-2.664.198-3.671.75v-.75H42.61v.75c-.641-.568-1.514-.75-2.485-.75H18.771l-1.433 3.315-1.472-3.315H9.139v1.516L8.4 11.851H2.664L0 17.954v6.733zM78.266 31.476h-4.009c-.4 0-.666.015-.89.166-.232.149-.322.371-.322.662 0 .348.196.583.481.686.232.081.481.104.848.104l1.192.032c1.203.03 2.006.236 2.496.741.089.07.143.149.204.228m0 3.449c-.534.781-1.575 1.177-2.985 1.177h-4.249v-1.974h4.231c.419 0 .713-.055.891-.228a.809.809 0 0 0 .26-.6c0-.269-.107-.481-.269-.609-.16-.14-.392-.205-.775-.205-2.065-.07-4.642.064-4.642-2.849 0-1.335.847-2.741 3.156-2.741h4.382v-1.831h-4.071c-1.229 0-2.122.294-2.753.751v-.751H65.42c-.962 0-2.093.238-2.628.751v-.751H52.039v.751c-.856-.617-2.3-.751-2.966-.751H41.98v.751c-.677-.656-2.183-.751-3.101-.751H30.94l-1.816 1.966-1.701-1.966H15.564V40.53h11.635l1.872-1.997 1.763 1.997 7.172.006v-3.021h.705c.952.015 2.074-.024 3.064-.452v3.467h5.916v-3.348h.286c.364 0 .4.015.4.379v2.968h17.97c1.141 0 2.333-.292 2.994-.822v.822h5.701c1.186 0 2.345-.166 3.226-.592v-2.393h-.002zm-8.775-3.677c.428.443.658 1.002.658 1.95 0 1.98-1.237 2.904-3.456 2.904h-4.285v-1.974h4.268c.417 0 .712-.055.898-.228a.816.816 0 0 0 .26-.6.787.787 0 0 0-.269-.609c-.168-.14-.4-.205-.784-.205-2.057-.07-4.633.064-4.633-2.849 0-1.335.839-2.741 3.145-2.741h4.41v1.96h-4.035c-.4 0-.66.015-.882.166-.241.149-.33.37-.33.662 0 .348.204.584.481.686.231.081.481.104.856.104l1.184.032c1.196.031 2.016.237 2.514.742zm-19.85-.568c-.294.174-.658.189-1.086.189h-2.672V31.42h2.709c.392 0 .783.008 1.049.167.286.149.456.434.456.828-.001.394-.171.711-.456.884zm1.329 1.145c.489.18.89.504 1.078.772.311.45.355.869.364 1.681v1.824h-2.208V37.57c0-.553.053-1.374-.355-1.801-.322-.33-.812-.409-1.614-.409h-2.351v3.362h-2.21v-9.205h5.079c1.114 0 1.925.049 2.647.434.694.42 1.131.994 1.131 2.044-.002 1.469-.982 2.219-1.561 2.449zm2.779-4.927h7.342v1.904H55.94v1.674h5.026v1.878H55.94v1.832l5.151.008v1.91h-7.342v-9.206zm-14.843 4.248h-2.843V31.42h2.868c.795 0 1.346.324 1.346 1.128 0 .798-.525 1.217-1.371 1.217zm-5.033 4.12l-3.377-3.75 3.377-3.63v7.38zm-8.723-1.081h-5.409v-1.832h4.83v-1.878h-4.83V31.42h5.516l2.406 2.683-2.513 2.701zm17.489-4.255c0 2.558-1.908 3.085-3.831 3.085h-2.745v3.087h-4.276l-2.708-3.047-2.815 3.047H17.55v-9.205h8.847l2.707 3.017 2.798-3.017h7.029c1.747.001 3.708.484 3.708 3.033z"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="column">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.301 48.994">
                                                    <path fill="#007BB3"
                                                          d="M0 0v48.994h78.3V0H0zm77.383 48.077H.914V.914h76.469v47.163z"></path>
                                                    <path fill="#666766"
                                                          d="M0 0v48.994h78.3V0H0zm77.383 48.077H.914V.914h76.469v47.163z"></path>
                                                    <circle fill="#ED1C2E" cx="28.984" cy="24.497" r="15.144"></circle>
                                                    <path fill="#FCB131"
                                                          d="M49.316 9.353a15.091 15.091 0 0 0-11.695 5.523h3.059a15.53 15.53 0 0 1 1.155 1.604h-5.369c-.321.515-.613 1.05-.872 1.604h7.113c.243.519.458 1.054.642 1.603h-8.396a15.05 15.05 0 0 0-.44 1.604h9.276c.223 1.034.341 2.106.341 3.207 0 1.681-.274 3.3-.78 4.811h-8.396a15.1 15.1 0 0 0 .641 1.604h7.114a15.32 15.32 0 0 1-.873 1.604h-5.368c.351.559.736 1.094 1.155 1.603h3.059c-.47.571-.981 1.107-1.53 1.604a15.085 15.085 0 0 0 10.167 3.919c8.364 0 15.144-6.78 15.144-15.144-.003-8.365-6.783-15.146-15.147-15.146z"></path>
                                                    <path fill="#FCB131"
                                                          d="M62.442 32.938a.49.49 0 1 1 .979 0 .49.49 0 0 1-.979 0zm.49.373a.372.372 0 1 0-.001-.743.372.372 0 0 0 .001.743zm-.067-.158h-.1v-.429h.182c.038 0 .076 0 .11.021a.132.132 0 0 1 .054.107.116.116 0 0 1-.075.111l.08.189h-.111l-.066-.169h-.074v.17zm0-.243h.056c.021 0 .043.001.061-.008a.058.058 0 0 0 .026-.049.054.054 0 0 0-.025-.044c-.018-.01-.045-.008-.064-.008h-.054v.109z"></path>
                                                    <g>
                                                        <g fill="#003473">
                                                            <path d="M25.485 25.824a2.764 2.764 0 0 0-.367-.026c-.932 0-1.403.32-1.403.952 0 .389.23.636.589.636.669 0 1.152-.637 1.181-1.562zm1.196 2.783h-1.362l.031-.647c-.416.511-.97.755-1.724.755-.89 0-1.501-.695-1.501-1.706 0-1.521 1.063-2.409 2.886-2.409.187 0 .426.018.67.048.051-.206.064-.294.064-.405 0-.413-.286-.568-1.054-.568a5.465 5.465 0 0 0-1.74.282l.228-1.405c.819-.241 1.359-.331 1.968-.331 1.412 0 2.16.634 2.158 1.832.003.321-.051.717-.133 1.238-.143.904-.449 2.844-.491 3.316zM21.437 28.607h-1.645l.942-5.904-2.103 5.904h-1.12l-.138-5.871-.991 5.871h-1.538l1.285-7.681h2.364l.143 4.3 1.443-4.3h2.629zM51.385 25.824a2.75 2.75 0 0 0-.366-.026c-.932 0-1.403.32-1.403.952 0 .389.229.636.589.636.669 0 1.151-.637 1.18-1.562zm1.197 2.783H51.22l.031-.647c-.416.511-.97.755-1.723.755-.892 0-1.502-.695-1.502-1.706 0-1.521 1.063-2.409 2.886-2.409.187 0 .425.018.67.048.051-.206.064-.294.064-.405 0-.413-.286-.568-1.054-.568a5.473 5.473 0 0 0-1.741.282c.018-.104.229-1.405.229-1.405.818-.241 1.359-.331 1.966-.331 1.413 0 2.16.634 2.159 1.832.003.321-.05.717-.133 1.238-.142.904-.449 2.844-.49 3.316zM33.987 28.513c-.45.142-.801.203-1.181.203-.84 0-1.299-.482-1.299-1.373-.012-.276.121-1.002.225-1.665.095-.584.713-4.263.713-4.263h1.634l-.19.945h.987l-.223 1.501h-.991c-.19 1.188-.46 2.668-.464 2.865 0 .322.172.463.563.463.188 0 .332-.02.443-.06l-.217 1.384zM38.998 28.462a5.517 5.517 0 0 1-1.677.253c-1.83-.002-2.783-.957-2.783-2.787 0-2.135 1.213-3.708 2.86-3.708 1.347 0 2.208.88 2.208 2.26 0 .458-.059.905-.202 1.536H36.15c-.11.907.469 1.284 1.421 1.284.584 0 1.112-.121 1.699-.393l-.272 1.555zm-.918-3.703c.01-.13.173-1.115-.761-1.115-.521 0-.893.397-1.043 1.115h1.804zM27.667 24.336c0 .79.383 1.334 1.252 1.744.666.313.769.406.769.689 0 .389-.294.566-.944.566-.491 0-.947-.077-1.473-.248l-.226 1.443c.374.081.707.157 1.711.185 1.735 0 2.536-.66 2.536-2.088 0-.858-.335-1.362-1.159-1.741-.689-.316-.769-.387-.769-.678 0-.338.273-.51.805-.51.323 0 .764.035 1.182.094l.234-1.449a11.062 11.062 0 0 0-1.447-.122c-1.84 0-2.477.961-2.471 2.115zM46.994 22.386c.457 0 .883.119 1.469.415l.27-1.667c-.242-.095-1.089-.65-1.807-.65-1.1 0-2.031.546-2.685 1.446-.955-.315-1.347.323-1.828.959l-.427.1c.032-.209.062-.417.052-.628h-1.511c-.206 1.934-.571 3.893-.857 5.827l-.075.42h1.645c.274-1.784.424-2.925.516-3.699l.619-.343c.093-.344.382-.46.963-.446a6.982 6.982 0 0 0-.117 1.281c0 2.044 1.104 3.316 2.874 3.316.456 0 .847-.06 1.453-.224l.289-1.751c-.545.268-.992.394-1.396.394-.956 0-1.534-.706-1.534-1.872 0-1.693.86-2.878 2.087-2.878zM60.914 20.926l-.365 2.219c-.449-.591-.932-1.02-1.569-1.02-.83 0-1.585.629-2.079 1.555-.689-.143-1.4-.386-1.4-.386l-.001.007c.055-.518.079-.833.073-.941h-1.51c-.206 1.934-.571 3.893-.857 5.827l-.076.42h1.645c.223-1.441.392-2.64.517-3.589.563-.508.844-.95 1.411-.921a5.365 5.365 0 0 0-.398 2.027c0 1.562.789 2.592 1.984 2.592.603 0 1.065-.208 1.516-.689l-.078.581h1.556l1.252-7.681h-1.621zm-2.057 6.239c-.559 0-.842-.415-.842-1.232 0-1.228.53-2.098 1.275-2.098.565 0 .871.43.871 1.224.001 1.237-.538 2.106-1.304 2.106z"></path>
                                                        </g>
                                                        <path fill="#FFF"
                                                              d="M21.91 28.152h-1.644l.942-5.905-2.103 5.905h-1.121l-.139-5.871-.99 5.871h-1.538l1.285-7.681h2.365l.066 4.755 1.595-4.755h2.553zM25.958 25.369a2.738 2.738 0 0 0-.367-.025c-.932 0-1.403.319-1.403.95 0 .389.23.637.589.637.67 0 1.153-.638 1.181-1.562zm1.196 2.783h-1.362l.032-.647c-.416.511-.97.755-1.723.755-.892 0-1.502-.696-1.502-1.707 0-1.521 1.063-2.408 2.887-2.408.187 0 .425.017.67.049.051-.207.064-.294.064-.406 0-.414-.286-.567-1.054-.567a5.459 5.459 0 0 0-1.741.28c.018-.104.229-1.405.229-1.405.819-.24 1.359-.331 1.967-.331 1.412 0 2.16.634 2.159 1.832.002.321-.051.718-.133 1.238-.145.904-.451 2.845-.493 3.317zM49.206 20.678l-.269 1.667c-.587-.295-1.013-.415-1.468-.415-1.228 0-2.089 1.187-2.089 2.878 0 1.166.579 1.87 1.535 1.87.405 0 .852-.125 1.396-.394l-.289 1.751c-.605.165-.997.225-1.453.225-1.77 0-2.873-1.273-2.873-3.316 0-2.747 1.524-4.666 3.703-4.666.718.001 1.566.305 1.807.4zM51.858 25.369a2.715 2.715 0 0 0-.366-.025c-.932 0-1.403.319-1.403.95 0 .389.23.637.589.637.669 0 1.153-.638 1.18-1.562zm1.197 2.783h-1.362l.031-.647c-.416.511-.97.755-1.723.755-.892 0-1.502-.696-1.502-1.707 0-1.521 1.062-2.408 2.886-2.408.187 0 .425.017.669.049.051-.207.064-.294.064-.406 0-.414-.285-.567-1.054-.567a5.457 5.457 0 0 0-1.74.28l.228-1.405c.82-.24 1.359-.331 1.968-.331 1.412 0 2.16.634 2.158 1.832.003.321-.05.718-.133 1.238-.142.904-.448 2.845-.49 3.317zM34.46 28.057c-.45.141-.8.203-1.181.203-.84 0-1.299-.483-1.299-1.372-.012-.277.121-1.003.226-1.666.094-.584.713-4.263.713-4.263h1.634l-.19.945h.838l-.223 1.501h-.842c-.19 1.189-.461 2.668-.464 2.864 0 .323.172.463.563.463.187 0 .333-.019.443-.059l-.218 1.384zM39.472 28.008a5.614 5.614 0 0 1-1.677.252c-1.83-.001-2.783-.957-2.783-2.787 0-2.136 1.213-3.708 2.859-3.708 1.348 0 2.208.88 2.208 2.262 0 .458-.06.905-.201 1.536h-3.254c-.11.906.47 1.285 1.42 1.285.585 0 1.113-.121 1.7-.394l-.272 1.554zm-.919-3.705c.009-.13.173-1.115-.761-1.115-.521 0-.893.397-1.044 1.115h1.805zM28.14 23.88c0 .791.383 1.334 1.252 1.745.666.313.769.406.769.689 0 .389-.293.565-.944.565-.491 0-.947-.076-1.474-.246l-.226 1.442c.374.082.707.156 1.711.185 1.735 0 2.536-.661 2.536-2.088 0-.859-.335-1.362-1.159-1.74-.689-.317-.769-.388-.769-.679 0-.338.273-.512.805-.512.322 0 .764.036 1.182.095l.234-1.449a11.238 11.238 0 0 0-1.447-.122c-1.839 0-2.476.961-2.47 2.115zM61.756 28.152h-1.555l.077-.582c-.451.482-.913.69-1.516.69-1.195 0-1.985-1.03-1.985-2.592 0-2.078 1.226-3.829 2.675-3.829.638 0 1.121.26 1.57.852l.365-2.22h1.621l-1.252 7.681zm-2.425-1.444c.766 0 1.304-.868 1.304-2.105 0-.794-.306-1.225-.872-1.225-.746 0-1.275.871-1.275 2.099 0 .818.284 1.231.843 1.231zM54.536 21.905c-.206 1.934-.571 3.892-.857 5.826l-.075.42h1.644c.588-3.82.73-4.566 1.653-4.473.147-.782.42-1.466.624-1.812-.688-.143-1.073.246-1.577.985.04-.32.113-.63.099-.947h-1.511zM41.001 21.905c-.207 1.934-.572 3.892-.858 5.826l-.075.42h1.645c.588-3.82.729-4.566 1.651-4.473.148-.782.422-1.466.625-1.812-.688-.143-1.073.246-1.576.985.04-.32.112-.63.098-.947h-1.51zM62.479 27.663a.49.49 0 1 1 .98 0 .49.49 0 0 1-.98 0zm.488.371a.372.372 0 1 0 0-.743.372.372 0 0 0 0 .743zm-.066-.158h-.1v-.429h.182c.038 0 .077.001.109.022a.126.126 0 0 1 .055.107.116.116 0 0 1-.074.111l.079.189h-.111l-.066-.169h-.073v.169zm0-.243h.056c.02 0 .043.002.061-.008.017-.01.025-.031.025-.049a.055.055 0 0 0-.024-.044c-.017-.01-.045-.007-.063-.007h-.054v.108z"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="column">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.301 48.994">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#007BB3"
                                                          d="M59.833 32.579l-.122-2.408-5.463-.002-1.12 2.411h-4.75l8.615-16.145h5.83l1.461 16.145h-4.451v-.001zm-.502-9.542c-.048-1.196-.089-2.818-.008-3.8h-.064c-.265.803-1.409 3.216-1.915 4.4l-1.626 3.545h3.837l-.224-4.145z"></path>
                                                    <path fill="#007BB3"
                                                          d="M0 0v48.994h78.3V0H0zm77.382 48.078H.914V.915h76.468v47.163z"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#007BB3"
                                                          d="M74.95 13.417V3.188H3.191v10.229H74.95z"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#F1C14B"
                                                          d="M74.95 45.735V35.506H3.191v10.229H74.95z"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#007BB3"
                                                          d="M27.756 32.579l4.905-16.176h4.377l-4.905 16.176h-4.377zM25.798 16.407l-3.937 6.854c-1 1.799-1.587 2.704-1.868 3.839h-.061c.071-1.438-.131-3.202-.148-4.203l-.436-6.491h-7.367l-.075.435c1.892 0 3.015.953 3.325 2.897l1.434 12.84H21.2l9.169-16.172h-4.571v.001zM41.634 33.036c-3.092 0-5.143-.978-6.605-1.854l2.083-3.186c1.314.737 2.346 1.585 4.722 1.585.761 0 1.499-.198 1.916-.923.608-1.051-.14-1.617-1.85-2.583l-.845-.55c-2.534-1.73-3.632-3.377-2.438-6.247.764-1.835 2.776-3.229 6.099-3.229 2.292 0 4.438.994 5.69 1.96L48.01 20.82c-1.223-.987-2.234-1.487-3.394-1.487-.923 0-1.627.357-1.867.837-.456.902.148 1.519 1.478 2.347l1.005.637c3.077 1.94 3.811 3.976 3.038 5.876-1.323 3.274-3.921 4.006-6.636 4.006z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tarjeta" class="<!--hidden-->">
                        <div class="row row--with-gutters">
                            <div class="column">
                                <div class="form__item">
                                    <input type="text" name="titular" title="Nombre del titular" required>
                                    <div class="form__label">Nombre del titular</div>
                                    <div class="form__border"></div>
                                    <div class="form__border--focus"></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form__item">
                                    <input type="text" name="tarjeta" title="Número de tarjeta" required>
                                    <div class="form__label">Número de tarjeta</div>
                                    <div class="form__border"></div>
                                    <div class="form__border--focus"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row--with-gutters">
                            <div class="column">
                                <div class="row row--with-gutters">
                                    <div class="column column--half">
                                        <div class="form__item">
                                            <select name="mes" id="mes" title="Mes" class="form__select" required>
                                                <option value="">Mes</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            <i class="fas fa-chevron-down"></i>
                                            <div class="form__border"></div>
                                            <div class="form__border--focus"></div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form__item">
                                            <select name="ano" id="ano" title="Año" class="form__select" required>
                                                <option value="">Año</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select>
                                            <i class="fas fa-chevron-down"></i>
                                            <div class="form__border"></div>
                                            <div class="form__border--focus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form__item">
                                    <input type="text" name="cvc" title="cvc" required>
                                    <div class="form__label">CVC</div>
                                    <div class="form__border"></div>
                                    <div class="form__border--focus"></div>
                                </div>
                            </div>
                        </div>
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

            <div class="row vertical-space">
                <div class="column lefted">
                    <a href="inscripcion" class="btn btn--large" style="float: left">REGRESAR</a>
                </div>
                <div class="column righted">
                    <input type="submit" value="CONFIRMAR" class="btn btn--green btn--large" style="float: right">
                </div>
            </div>
        </form>
    </div>
</main>
<?php include 'templates/footer.php' ?>
<script src="dist/app.bundle.js" type="text/javascript"></script>
</body>
</html>