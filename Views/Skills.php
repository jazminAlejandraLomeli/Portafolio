<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap -->
  <?php
  require_once("Layouts/Scripts/Main.php")
  ?>

  <title>Home</title>
</head>

<body>

  <?php
  require_once("Layouts/Nav/Button.php")
  ?>

  <?php
  require_once("Layouts/Nav/ButtonMenu.php")
  ?>

  <!-- Contenedor Principal -->
  <div class="container mt-2">

    <div class="row d-flex justify-content-start main">
      <!-- Datos Personales  -->
      <aside class="card-style-1 col-xl-3 col-md-3 col-sm-12">
        <?php
        require_once("Layouts/Info_Perfil.php")
        ?>
      </aside>
      <!-- Contenido de las vistas -->
      <main class="card-styles col-xl-6 col-md-6 col-sm-12">

        <div class="row d-flex justify-content-start align-items-start pb-2">
          <div class="col-auto">
            <h1 class="m-0">Habilidades</h1>
          </div>
          <div class="col text-start pt-2">
            <hr class="w-100" style="border: 0.15rem solid #096db9;">
          </div>
        </div>



        <div class="row d-flex justify-content-center">
          <div class="col-12">

            <h2 class="Sub-1">Habilidades Blandas</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eum cum nam veritatis incidunt sequi repudiandae at, ab dolorum <br><br>
            impedit mollitia animi velit aspernatur praesentium. Dignissimos nesciunt delectus sit minima.
          </div>
          <div class=" col-12">
              <h2 class="Sub-1">Habilidades Duras</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat harum odio culpa doloribus nemo, architecto <br> <br> pariatur voluptas maiores quam dicta. Officiis nam obcaecati consequatur eligendi sint voluptatibus aut non vel.
          </div>



        </div>
      </main>

      <!-- Navegación en la pagina web  -->
      <div class="card-style-nav col-xl-2 col-md-2 col-sm-12 d-none d-md-block">
        <?php
        require_once("Layouts/Nav/Navegacion.php")
        ?>
      </div>



      <!-- Navegacion tipo Sidebard para pantallas pequeñas  -->
      <?php
      require_once("Layouts/Nav/Sidebard.php")
      ?>
    </div>


    <!-- Scripts que se necesitan en todas las vistas -->
    <?php
    require_once("Layouts/Scripts/Scripts.php")
    ?>
  </div>

</body>

</html>