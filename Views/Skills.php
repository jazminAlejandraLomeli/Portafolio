<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles  -->
    <?php
    require("./Helpers/scripts.php")
    ?>
    <link rel="stylesheet" href="/Portafolio/Assets/Css//skills/skills.css">
    <title>Skills</title>
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
                        <h1 class="fw-bolder title m-0"> Habilidades </h1>
                    </div>
                    <hr class="hr-chingon w-50 border">
                </div>

                <div class="row d-flex g-2">
                    <div class="col-12 col-md-6 col-xl-4 mt-3 ">
                        <p class="text-center sub-title">
                            FRONT-END
                        </p>
                        <div class="px-1 card-skills px-3 py-3">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet dignissimos ab at quo error aliquam eveniet laudantium? Asperiores exercitationem sit, nostrum fuga eum autem, ipsa consequuntur, dolorem perspiciatis enim ducimus.
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3 border">
                        <p class="text-center sub-title">
                            BACK-END
                        </p>
                        <div class="px-1 card-skills2">
                            lorem
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3 border">
                        <div class="px-1 card-skills">
                            lorem
                        </div>
                    </div>


                </div>

            </div>

            <!-- Fin de contenido de la vista -->



        </main>
    </div>
</body>

</html>