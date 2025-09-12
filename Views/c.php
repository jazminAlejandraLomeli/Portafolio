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
        .pro-title {
            text-align: center;
            margin: 80px 0;
            font-family: 'Muli', sans-serif;
        }

        .pro-title h1 {
            font-size: 56px;
            font-weight: 800;
            color: #2c3e50;
            position: relative;
            display: inline-block;
            padding: 0 20px;
        }

        .pro-title h1 span {
            color: #16a085;
            position: relative;
        }

        .pro-title h1::before,
        .pro-title h1::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 80px;
            height: 3px;
            background-color: #16a085;
        }

        .pro-title h1::before {
            left: -100px;
        }

        .pro-title h1::after {
            right: -100px;
        }

        .pro-title h1 span::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #16a085, #1abc9c);
            bottom: -10px;
            left: 0;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease-in-out;
        }

        .pro-title h1 span:hover::after {
            transform: scaleX(1);
        }

        /* Animación de entrada suave */
        .pro-title h1 {
            opacity: 0;
            animation: fadeDown 1.5s ease forwards;
        }

        @keyframes fadeDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <div class="pro-title">
        <h1>Crafting <span>Digital jazmin</span></h1>
    </div>




</body>

</html>