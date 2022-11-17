<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME;?> | Acreditaciones</title>

    <?php include './resources/modules/header.php'; ?>

    <style>
        .footer{
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
        .contenedor-horario{
            display: grid;
            place-content: center;
            width: 100%;
            height: 80vh;
        }
    </style>

</head>

<body>

    <!-- <div class="fondo-gradient-background"></div> -->

    <?php include './resources/modules/redes.php'; ?>

  <?php include './resources/modules/navbar.php'; ?>

  <div class="contenedor-horario">

    <h1>Horario de acreditaciones</h1>

    <p>Sábado</p>

  </div>
    
</body>

</html>