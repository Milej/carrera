<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME;?> | Recorrido</title>

    <?php include './resources/modules/header.php'; ?>

</head>

<body>

  <?php include './resources/modules/redes.php'; ?>
  <?php include './resources/modules/navbar.php'; ?>

  <div class="container container-fluid">

    <h1>ETAPAS</h1>
    <hr>
    
    <div class="row">

      <div class="col-12">
        <h4>1° ETAPA: Villa Gral. Belgrano - San Agustín - Villa Gral. Belgrano</h4>
      </div>

      <div class="col-lg-6 col-12">
      <img src="<?php echo IMG; ?>altimetria/1-etapa-larga.jpeg" alt="" width="100%" height="100%">
      </div>
      <div class="col-lg-6 col-12">
      <img src="<?php echo IMG; ?>altimetria/1-etapa-promocional.jpeg" alt="" width="100%" height="100%">
      </div>

      <hr class="my-5">

      <div class="col-12">
        <h4>2° ETAPA: Los Reartes - Villa Berna - Los Reartes</h4>
      </div>

      <div class="col-lg-6 col-12">
      <img src="<?php echo IMG; ?>altimetria/2-etapa-larga.jpeg" alt="" width="100%" height="100%">
      </div>
      <div class="col-lg-6 col-12">
      <img src="<?php echo IMG; ?>altimetria/2-etapa-corta.jpeg" alt="" width="100%" height="100%">
      </div>

    </div>

    

    <div class="row">

      

    </div>

    <hr>

    <!-- <h4>3° ETAPA: Los Reartes - Loma del Tigre - Los Reartes</h4>

    <p>
      <span class="fw-bold">Lugar de concentración:</span> 
      Predio de los Gauchos - Ruta N° 5 Km 75
    </p>
    <p>
      <span class="fw-bold">Recorrido:</span> <br>
      Competitivas y Short race: 25 km 400 mtrs desnivel
    </p> -->
  </div>

  <?php include './resources/modules/footer.php'; ?>
    
</body>

</html>