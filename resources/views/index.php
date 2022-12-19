<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME;?></title>

    <?php include './resources/modules/header.php'; ?>

    <style>
        .navbar a{
            color:white;
            font-size: 16px;
        }

        .nav-link.active{
            font-weight: bold;
            border-bottom: 2px solid white;
        }

        .nav-link:hover, .nav-link:focus, .dropdown-toggle.show{
            color: white;;
        }

        .dropdown-toggle.show:focudevs{
            border-bottom: 2px solid white;
        }

        .nav-link:focus{
            border-bottom: 2px solid white;
            animation-name: linea;
            animation-duration: .75s;
        }
    </style>

</head>

<body>

    <?php include './resources/modules/redes.php'; ?>

    <div class="background"></div>
    <div class="background-black"></div>
    
    <?php include './resources/modules/navbar.php'; ?>

    <?php include './resources/modules/intro.php'; ?>

    <?php include './resources/modules/sponsors.php'; ?>

    <?php include './resources/modules/footer.php'; ?>
    
</body>

</html>