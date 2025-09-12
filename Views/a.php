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
        .modern-title {
            text-align: center;
            margin: 60px 0;
            font-family: 'Muli', sans-serif;
        }

        .modern-title h1 {
            font-size: 50px;
            font-weight: 800;
            color: #2c3e50;
            position: relative;
            display: inline-block;
        }

        .modern-title h1 span {
            color: #16a085;
            position: relative;
        }

        .modern-title h1 span::after {
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

        .modern-title h1 span:hover::after {
            transform: scaleX(1);
        }

        /* Efecto de entrada */
        .modern-title h1 {
            animation: fadeInDown 1.5s ease forwards;
            opacity: 0;
        }

        @keyframes fadeInDown {
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
    <div class="modern-title">
        <h1>Innovate <span>and Create</span></h1>
    </div>



</body>

</html>