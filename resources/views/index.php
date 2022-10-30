<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME;?></title>

    <?php include './resources/modules/header.php'; ?>

    <style>
        .logo{
            width: 280px;
        }

        .building{
            display: grid;
            height: 100vh;
            place-content: center;
            background: linear-gradient(#82f689, #3853A2);
        }
            .building img{
                place-self: center;
            }

        .building-text{
            margin-top: 48px;
            font-weight: bold;
            text-align: center;
        }
        
    </style>

</head>
    
<?php //include './resources/modules/navbar.php'; ?>

    <div class="building">

        <img src="./public/images/logo.png" alt="" class="logo">

        <h1 class="building-text">SITIO EN CONSTRUCCIÓN</h1>

    </div>

</html>