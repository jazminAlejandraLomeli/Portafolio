<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles  -->

    <?php
    require_once("Views/Helpers/scripts.php")
    ?>

    <title>Document</title>




</head>

<body>

    <div class="layout">
        <!-- Contenedor de datos personales  -->
        <aside class="sidebar">
            <?php
            require_once("Views/Layouts/Personal-data.php")
            ?>

        </aside>

        <main class="contenido">
            <!-- Navegacion de la pagina  -->
            <?php
            require_once("Views/Layouts/Navigation.php")
            ?>


            <!-- Contenido de la vista -->
            <div class="card_style p-3 main-cont ">

                <div class=" p-0 m-0">

                    <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                        <h1 class="fw-bolder title m-0"> Resume</h1>
                    </div>

                    <hr class="hr-chingon w-50 border">

                </div>
                <div class="col-12">

                    <p class="sm-text-justify">
                        Hola!! Me encanta crear páginas web y aprender cosas nuevas por mi cuenta. Soy una persona activa, disfruto del pensamiento crítico para resolver problemas y me divierto mientras lo hago. Me apasiona transformar ideas en soluciones digitales que funcionen y sorprendan.
                        <br>
                        Graduada del Centro Universitario de los Altos en Ingeniería en Computación, disfruto trabajando en equipo, aprovechando la diversidad de ideas y conocimientos para alcanzar soluciones creativas y eficaces. Cuento con más de 10 meses de experiencia en HTML, CSS, PHP, JavaScript y Laravel, lo que me permite desarrollar soluciones web dinámicas y funcionales. Estoy emocionada por las oportunidades que el mundo de la tecnología me ofrece y comprometida a seguir creciendo y desarrollándome como profesional en esta apasionante industria.
                    </p>
                </div>

               
            </div>

        </main>
    </div>

</body>

</html>