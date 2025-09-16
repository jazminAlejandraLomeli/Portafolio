<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles  -->

    <?php
    require_once("./Helpers/scripts.php")
    ?>

    <title>About me</title>


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
            <div class="card_style border p-3 main-cont">
                <div class=" p-0 m-0">
                    <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                        <h1 class="fw-bolder title m-0"> Educación</h1>
                    </div>
                    <hr class="hr-chingon w-50 border">
                </div>



                <p class="sm-text-justify">
                    Graduada del <b>Centro Universitario de los Altos</b> en Ingeniería en Computación, disfruto trabajando en equipo, aprovechando la diversidad de ideas y conocimientos para alcanzar soluciones creativas y eficaces.
                    
                 </p>


                <div class="p-0 m-0 pt-3">
                    <div class="modern-title mb-0 mt-2 px-0 ps-1 text-start">
                        <h1 class="fw-bolder title m-0"> Estudios </h1>
                    </div>
                    <hr class="hr-chingon w-50 border">
                </div>

                <!-- Lista -->
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                            <path fill="#4f46e5" d="M7 12.27v3.72l5 2.73l5-2.73v-3.72L12 15zM5.18 9L12 12.72L18.82 9L12 5.28z" opacity=".3" />
                                            <path fill="#4f46e5" d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9zm5 12.99l-5 2.73l-5-2.73v-3.72L12 15l5-2.73zm-5-3.27L5.18 9L12 5.28L18.82 9z" />
                                        </svg> Bachillerato
                                    </div>
                                    <p class=" ps-2">Preparatoria Regional de Tepatitlan.</p>
                                </div>
                                <span class="badge bg-primary rounded-pill">2016 - 2019</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
                                            <path fill="#4f46e5" d="m16 3.875l-.438.219L5.563 9L5 9.281V11h22V9.281L26.437 9l-10-4.906zm0 2.25L21.875 9h-11.75zM7 12v10H6v2h20v-2h-1V12h-2v10h-2V12h-2v10h-2V12h-2v10H9V12zM4 25v2h24v-2z" />
                                        </svg> Licenciatura
                                    </div>

                                    <div class="row ps-2">
                                        <i> Ingeniería en computación</i>
                                        <span> Centro universitario de los Altos </span>
                                    </div>
                                </div>
                                <span class="badge bg-primary rounded-pill">2019 - 2023</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>


    </div>

    </main>
    </div>

</body>

</html>