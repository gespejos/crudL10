<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SECCIÓN TICS Y GOBIERNO ELECTRÓNICO</title>
    <link rel="stylesheet" media="all" href="style.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
        }

        p {
            position: relative;
            font-family: sans-serif;
            text-transform: uppercase;
            font-size: 2em;
            letter-spacing: 4px;
            overflow: hidden;
            background: linear-gradient(90deg, #000, #fff, #000);
            background-repeat: no-repeat;
            background-size: 80%;
            animation: animate 3s linear infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: rgba(255, 255, 255, 0);
        }

        @keyframes animate {
            0% {
                background-position: -500%;
            }
            100% {
                background-position: 500%;
            }
        }
        a {
            text-decoration: none;
            color: black; /* Puedes elegir el color que desees */
        }
    </style>
</head>
<body>
<a href="{{ route('login') }}">
    <p>SECCIÓN TICS Y GOBIERNO ELECTRÓNICO</p>
</a>

</body>
</html>