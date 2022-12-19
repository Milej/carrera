<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME;?> | Costos</title>

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
            width: 100%;
            height: 70vh;
            place-content: center;
        }

        p{
            font-size: 36px;
            font-weight:bold;
            line-height: 20px;
        }
        p  span{
            font-size: 12px;
        }
    </style>

</head>

<body>

    <!-- <div class="fondo-gradient-background"></div> -->
    <?php include './resources/modules/redes.php'; ?>
  <?php include './resources/modules/navbar.php'; ?>

  <div class="container container-fluid contenedor-horario">

    <p>
    Costos de inscripción<br>
    <span>Primeros 200 inscriptos van con chaleco de regalo</span>
    </p>
    
    <hr>

    <h4 class="fw-bold">1er periodo</h4>
    <h5>Individual: $22.000</h5>
    <h5>Parejas: $35.000</h5>

    <hr>

    <h4 class="fw-bold">2do periodo 05/12 al 04/01</h4>
    <h5>Individual: $24.000</h5>
    <h5>Parejas: $38.000</h5>

    <hr>

    <h4 class="fw-bold">3er periodo 05/01 al cierre de inscripción</h4>
    <h5>Individual: $26.000</h5>
    <h5>Parejas: $40.000</h5>

    <hr>

  </div>

  <?php include './resources/modules/footer.php'; ?>
    
</body>

</html>