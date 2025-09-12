<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animación Web</title>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
</head>

<body>
    <style>
        .title-container {
            font-family: 'Muli';
            font-size: 36px;
            color: #141414ff;
            position: relative;
            /* Para los corchetes */
            display: inline-block;
            /* Solo ocupa el espacio del título */
            font-weight: 600;
        }

        .title-container:before {
            content: '[';
            color: #16a085;
            font-size: 42px;
            animation: 2s linear infinite opacity;
            margin-right: 5px;
        }

        .title-container:after {
            content: ']';
            color: #16a085;
            font-size: 42px;
            animation: 2s linear infinite opacity;
            margin-left: 5px;
        }

        .title-text {
            display: flex;
            align-items: center;
            /* Centra verticalmente el texto y el carrusel */
            overflow: hidden;
            height: 40px;
        }

        .title-text p {
            margin: 0;
            margin-right: 10px;
            /* Espacio entre el texto fijo y el carrusel */
        }

        .title-text ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: block;
            /* importante para la animación de margen */
            animation: 6s linear infinite change;
        }

        .title-text ul li {
            height: 40px;
            /* Igual que el contenedor */
            line-height: 40px;
        }

        /* Animaciones */
        @keyframes opacity {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes change {

            0%,
            15% {
                margin-top: 0;
            }

            25%,
            40% {
                margin-top: -40px;
            }

            50%,
            65% {
                margin-top: -80px;
            }

            75%,
            85% {
                margin-top: -40px;
            }

            100% {
                margin-top: 0;
            }
        }

        .elegant-title {
            text-align: center;
            margin: 50px 0;
            font-family: 'Muli', sans-serif;
        }

        .elegant-title h1 {
            font-size: 48px;
            font-weight: 700;
            color: #2c3e50;
            position: relative;
            display: inline-block;
            padding: 0 15px;
        }

        .elegant-title h1::before,
        .elegant-title h1::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 60px;
            height: 2px;
            background-color: #16a085;
        }

        .elegant-title h1::before {
            left: -70px;
        }

        .elegant-title h1::after {
            right: -70px;
        }

        .elegant-title h1 span {
            color: #16a085;
            position: relative;
            animation: fadeInUp 2s ease-in-out infinite alternate;
            display: inline-block;
        }

        /* Animación elegante */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <div class="elegant-title">
        <h1>Transforming Ideas <span>into Digital Solutions</span></h1>
    </div>


</body>

</html>