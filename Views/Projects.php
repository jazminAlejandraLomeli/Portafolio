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
  </aside>
  <!-- Contenedor Principal -->
  <div class="container mt-2">

    <div class="row d-flex justify-content-between main">
      <!-- Datos Personales  -->
      <aside class="card-styles col-xl-3 col-md-3 col-sm-12">

        <?php
        require_once("Layouts/Info_Perfil.php")
        ?>
      </aside>
      <!-- Contenido de las vistas -->
      <main class="card-styles col-xl-6 col-md-6 col-sm-12">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae ea enim temporibus minima eaque sit quibusdam quia deleniti quas unde explicabo possimus non molestiae, veniam, debitis at commodi suscipit.


        <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi aliquam vel quaerat incidunt suscipit rerum culpa molestias quae autem itaque dolor deleniti, optio, harum ratione, atque neque ipsum nostrum tempora?

      </main>

      <!-- Navegación en la pagina web  -->
      <div class="card-styles col-xl-2 col-md-2 col-sm-12 d-none d-md-block">
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


</body>

</html>