<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Portafolio/Assets/Css/Experience/Index.css" />
    <!-- Styles  -->
    <?php
    require_once("./Helpers/scripts.php")
    ?>

    <title>Experience</title>


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
            <div class="card_style main-cont position-relative">

                <div>

                    <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                        <h1 class="fw-bolder title m-0"> Experiencia en desarrollo web </h1>
                    </div>
                    <hr class="hr-chingon w-50 border">

                    <div class="col-12">

                        <p class="sm-text-justify">
                            Cuento con más de 2 años de experiencia como Full Stack, participando en todas las etapas del desarrollo de software: desde el análisis de requerimientos y el diseño de la arquitectura y la interfaz, hasta el desarrollo tanto de frontend como de backend, la realización de pruebas, el despliegue en producción y el mantenimiento de las aplicaciones.
                            <br>
                            Esta experiencia me permite crear soluciones web dinámicas, funcionales y adaptadas a las necesidades de los usuarios.
                        </p>
                    </div>
                </div>


                <div class="row">
                    <!-- <div class=" p-0 m-0">
                        <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                            <h1 class="fw-bolder title m-0"> Proyectos </h1>
                        </div>
                        <hr class="hr-chingon w-50 border">
                    </div> -->

                    <div class=" pt-3">
                        <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                            <h1 class="fw-bolder title m-0"> Proyectos </h1>
                        </div>
                        <hr class="hr-chingon w-50 border">
                    </div>

                    <?php
                    include('./Carrousel/example.php')
                    ?>
                    <?php
                    include('./Carrousel/example.php')
                    ?>
                    <?php
                    include('./Carrousel/example.php')
                    ?>
                    <?php
                    include('./Carrousel/example.php')
                    ?>

                </div>

                <div class="position-absolute bottom-0 end-0 opacity-50 ">

                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                    </svg>
                </div>
            </div>
        </main>
    </div>

</body>

</html>