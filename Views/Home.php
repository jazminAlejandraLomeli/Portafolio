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
    <!-- Opción 1: Usando Bootstrap Grid System -->
    <div class="container-fluid">
        <div class="row g-3">
            <!-- Personal data container -->
            <?php
            require_once("Views/Layouts/Personal-data.php")
            ?>

            <div class="col-12 col-md-8 col-xl-8">
                <!-- Navigation container -->
                <?php
                require_once("Views/Layouts/Navigation.php")
                ?>


                <div class="card_style border p-3 mt-2">
                    Lorewm ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, quod.
                    Lorewm ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, quod.
                    Lorewm ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, quod.
                    Lorewm ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, quod.
                    Lorewm ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, quod.
                    Lorewm ipsum, dolo'r sit amet consectetur adipisicing elit. Quisquam, quod.
                    Lorewm ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, quod.
                </div>


            </div>
        </div>
    </div>
</body>

</html>