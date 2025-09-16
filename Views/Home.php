<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles  -->
    <?php
    require("./Helpers/scripts.php")
    ?>
    <title>Home</title>
</head>

<body>



    <div class="layout">
        <!-- Contenedor de datos personales  -->
        <aside class="sidebar">
            <?php
            require_once("./Layouts/Personal-data.php")
            ?>
        </aside>

        <main class="contenido">
            <!-- Navegacion de la pagina  -->
            <?php
            require_once("./Layouts/Navigation.php")
            ?>


            <!-- Contenido de la vista -->
            <div class="card_style  main-cont  position-relative">

                <div class=" p-0 m-0">
                    <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                        <h1 class="fw-bolder title m-0"> Resume</h1>
                    </div>
                    <hr class="hr-chingon w-50 border">
                </div>

                <div class="col-12 mx-2">

                    <p class="sm-text-justify">
                        <b class="fs-2">Hola!!</b> 👋
                        <br>
                        <br>
                        Me encanta crear páginas web y aprender cosas nuevas.
                        Soy una persona activa, disfruto del pensamiento crítico para resolver problemas y me divierto mientras lo hago.
                        Me apasiona transformar ideas en soluciones digitales que funcionen y sorprendan.

                        <br>

                        Estoy emocionada por las oportunidades que el mundo de la tecnología me ofrece y comprometida a seguir creciendo y desarrollándome como profesional en esta apasionante industria.
                    </p>





                    <br>

                </div>
                <div class="position-absolute bottom-0 start-0 opacity-50 ">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="50" height="38.888888888888886" viewBox="0 0 18 14">
                        <path fill="currentColor" d="m5.243 6.657l-4.95-4.95A1 1 0 1 1 1.707.293L7.364 5.95a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 1 1-1.414-1.414zM9 11h8a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2" />
                    </svg>
                </div>
            </div>

            <!-- Fin de contenido de la vista -->



        </main>
    </div>
</body>

</html>