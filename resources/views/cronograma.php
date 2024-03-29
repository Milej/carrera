<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URL; ?>favicon.ico" type="image/x-icon">
    <title><?php echo APP_NAME; ?> | Horario de largada</title>

    <?php include './resources/modules/header.php'; ?>

    <style>
        .footer {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .contenedor-horario {
            display: grid;
            width: 100%;
            height: 100vh;
        }
    </style>

</head>

<body>

    <?php include './resources/modules/redes.php'; ?>
    <?php include './resources/modules/navbar.php'; ?>

    <div class="container container-fluid contenedor-horario">

        <h3>Sábado 10</h3>

        <p>Acreditaciones y expo. Los Reartes, Predio Carlo Farriol. De 10hs a 20hs.</p>
        <hr>
        <h3>Domingo 11</h3>

        <p>Etapa 1: V.G.B. (Ruta 5KM 75)</p>
        <hr>

        <h3>Lunes 12</h3>

        <p>Etapa 2: Los Reartes (Predio Carlos Farriol)</p>
        <hr>

        <h3>Martes 13</h3>

        <p>Etapa 3: Los Reartes (Predio Carlos Farriol). Premiación y asado con cuero.</p>

    </div>

    <?php include './resources/modules/footer.php'; ?>

</body>

</html>