<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/Portafolio/Assets/Css/skills.css" />
  <!-- Bootstrap -->
  <?php
  require_once("Layouts/Scripts/Main.php")
  ?>

  <title>Habiliades</title>
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

    <div class="row d-flex justify-content-start main p-0">
      <!-- Datos Personales  -->
      <aside class="card-style-1 col-xl-3 col-md-4 col-sm-12">
        <?php
        require_once("Layouts/Info_Perfil.php")
        ?>
      </aside>
      <!-- Contenido de las vistas -->
      <main class="card-styles col-xl-8 col-md-7 col-sm-12 shadow">

        <div class="row d-flex justify-content-start align-items-start">
          <div class="col-auto">
            <h1 class="m-0">Habilidades</h1>
          </div>
          <div class="col text-start pt-2">
            <hr class="w-100" style="border: 0.15rem solid #096db9;">
          </div>
        </div>


        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <h1 class="Sub-1">Habilidades blandas</h1>
            <div class="row">

              <div class="col-md-6 col-sm-12 mt-2">
                <div class="card">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">

                      Trabajo en equipo
                      <span class="list-blue"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                          <path fill="#1e8de2" d="M12 11a5 5 0 0 1 5 5v6h-2v-6a3 3 0 0 0-2.824-2.995L12 13a3 3 0 0 0-2.995 2.824L9 16v6H7v-6a5 5 0 0 1 5-5m-6.5 3c.279 0 .55.033.81.094a5.948 5.948 0 0 0-.301 1.575L6 16v.086a1.493 1.493 0 0 0-.356-.08L5.5 16a1.5 1.5 0 0 0-1.493 1.355L4 17.5V22H2v-4.5A3.5 3.5 0 0 1 5.5 14m13 0a3.5 3.5 0 0 1 3.5 3.5V22h-2v-4.5a1.5 1.5 0 0 0-1.355-1.493L18.5 16c-.175 0-.343.03-.5.085V16c0-.666-.108-1.306-.308-1.904c.258-.063.53-.096.808-.096m-13-6a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m13 0a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m-13 2a.5.5 0 1 0 0 1a.5.5 0 0 0 0-1m13 0a.5.5 0 1 0 0 1a.5.5 0 0 0 0-1M12 2a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 2a2 2 0 1 0 0 4a2 2 0 0 0 0-4" />
                        </svg></span>
                    </li>
                    <li class="list-group-item">Adaptabilidad</li>
                    <li class="list-group-item d-flex justify-content-between">Comunicación efectiva
                      <span class="list-pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                          <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#999999">
                            <path d="M11.5 3.004q-.845.012-1.67.067c-4.184.278-7.516 3.658-7.79 7.9a20 20 0 0 0 0 2.52c.1 1.545.783 2.976 1.588 4.184c.467.845.159 1.901-.328 2.823c-.35.665-.526.997-.385 1.237c.14.24.455.248 1.084.263c1.245.03 2.084-.322 2.75-.813c.377-.279.566-.418.696-.434s.387.09.899.3c.46.19.995.307 1.485.34c1.425.094 2.914.095 4.342 0c4.183-.278 7.515-3.658 7.789-7.9c.053-.83.053-1.69 0-2.52a8.6 8.6 0 0 0-.532-2.47" />
                            <path d="M14 6s1 0 2 2c0 0 3.177-5 6-6M8.5 15h7m-7-5H12" />
                          </g>
                        </svg></span>
                    </li>
                    <li class="list-group-item">Creatividad</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 mt-2">
                <div class="card">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Empatía</li>
                    <li class="list-group-item">Dedicación</li>
                    <li class="list-group-item">Creatividad</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>



          <div class="col-12">
            <h1 class="Sub-1">Constancias o certificados</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat harum odio culpa doloribus nemo, architecto <br> <br> pariatur voluptas maiores quam dicta. Officiis nam obcaecati consequatur eligendi sint voluptatibus aut non vel.
          </div>


        </div>
      </main>





      <!-- Navegación en la pagina web  -->
      <div class="card-style-nav shadow d-sm-none d-none d-md-block">
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