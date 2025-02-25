<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/Portafolio/Assets/Css/Home.css" />
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
  <div class="container mt-2 p-0 ">

    <div class="row d-flex justify-content-start main p-0 ">
      <!-- Datos Personales  -->
      <aside class="card-style-1 col-xl-3 col-md-4 col-sm-12 shadow">
        <?php
        require_once("Layouts/Info_Perfil.php")
        ?>
      </aside>

      <?php
      require_once("./Layouts/Nav/ButtonMenu.php")
      ?>


      <!-- Contenido de las vistas -->
      <main class="card-styles col-xl-8 col-md-7 col-sm-12 shadow">

        <div class="row d-flex justify-content-start align-items-start">
          <div class="col-auto">
            <h1 class="m-0">Resumen</h1>
          </div>
          <div class="col text-start pt-2">
            <hr class="w-100" style="border: 0.15rem solid #096db9;">
          </div>
        </div>


        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <h1 class="Sub-1">Sobre mi</h1>
            <p class="texto">
              Graduada del Centro Universitario de los Altos de la carrera de <i>Ingeniería en Computación</i>.
              <br>
              Disfruto trabajando en equipo, donde puedo aprovechar la diversidad de ideas y conocimientos para alcanzar soluciones creativas y eficaces.
              <br>

              Cuento con más de 10 meses de experiencia en HTML, CSS, PHP, JavaScript y Laravel, lo que me permite crear soluciones web dinámicas y funcionales.
              Estoy emocionada por las oportunidades que el mundo de la tecnología me ofrece y estoy comprometida a seguir creciendo y desarrollándome como profesional en esta apasionante industria.
            </p>
          </div>
          <div class="col-xl-6 col-md-12 col-sm-12">
            <h1 class="Sub-1">Educación</h1>
            <!-- Lista -->
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="me-auto">
                  <div class="fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                      <path fill="#4f46e5" d="M7 12.27v3.72l5 2.73l5-2.73v-3.72L12 15zM5.18 9L12 12.72L18.82 9L12 5.28z" opacity=".3" />
                      <path fill="#4f46e5" d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9zm5 12.99l-5 2.73l-5-2.73v-3.72L12 15l5-2.73zm-5-3.27L5.18 9L12 5.28L18.82 9z" />
                    </svg>
                    Bachillerato
                  </div>
                  <p class="mb-0 pl-2"> Preparatoria Regional de Tepatitlan.
                  </p>
                </div>
                <span class="badge bg-primary rounded-pill">2016 - 2019 </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="me-auto">
                  <div class="fw-bold"> <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                      <path fill="#4f46e5" d="m16 3.875l-.438.219L5.563 9L5 9.281V11h22V9.281L26.437 9l-10-4.906zm0 2.25L21.875 9h-11.75zM7 12v10H6v2h20v-2h-1V12h-2v10h-2V12h-2v10h-2V12h-2v10h-2V12h-2v10H9V12zM4 25v2h24v-2z" />
                    </svg>
                    Licenciatura
                  </div>
                  Centro universitario de los Altos
                </div>
                <span class="badge bg-primary rounded-pill">2019 - 2023</span>
              </li>
            </ul>
          </div>

          <div class="col-xl-6 col-md-12 col-sm-12">
            <h1 class="Sub-1">Experiencia</h1>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="me-auto">
                  <div class="fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20">
                      <path fill="#4f46e5" fill-rule="evenodd" d="M6.28 5.22a.75.75 0 0 1 0 1.06L2.56 10l3.72 3.72a.75.75 0 0 1-1.06 1.06L.97 10.53a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0m7.44 0a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 0 1 0-1.06m-2.343-3.209a.75.75 0 0 1 .612.867l-2.5 14.5a.75.75 0 0 1-1.478-.255l2.5-14.5a.75.75 0 0 1 .866-.612" clip-rule="evenodd" />
                    </svg>
                    Centro Universitario de los Altos
                  </div>
                  <p class="mb-0 pl-2">
                    Desarrollador JR Full-stack
                  <div class="d-block justify-content-center w-100">
                    <div class="d-flex justify-content-center">
                      <a type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i id="icon-toggle">
                          <svg id="icon-down" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 14.702L6.692 9.394l.708-.707l4.6 4.6 4.6-4.6.708.707z" />
                          </svg>
                          <svg id="icon-up" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="display: none;">
                            <path fill="currentColor" d="M12 9.298l5.308 5.308-.708.707-4.6-4.6-4.6 4.6-.708-.707z" />
                          </svg>
                        </i>
                      </a>
                    </div>

                    <div class="collapse w-100" id="collapseExample">
                      <div class="card card-body">
                        <ul class="List-sec">
                          <li class="disc">Requerimientos</li>
                          <li class="disc">Diseño</li>
                          <li class="disc">Base de datos</li>
                          <li class="disc">Desarrollo</li>
                          <li class="disc">Mantenimiento</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </p>
                </div>
                <span class="badge bg-primary rounded-pill">2023 - Actual </span>
              </li>
            </ul>


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
        require_once("./Layouts/Nav/Navegacion.php")
        ?>
      </div>


    </div>


    <!-- Navegacion tipo Sidebard para pantallas pequeñas  -->
    <?php
    require_once("Layouts/Nav/Sidebard.php")
    ?>


    <!-- Scripts que se necesitan en todas las vistas -->
    <?php
    require_once("Layouts/Scripts/Scripts.php")
    ?>
    <script src="/Portafolio/Assets/Js/View-Home.js.js"></script>

  </div>

</body>

</html>