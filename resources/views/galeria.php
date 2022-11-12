<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME;?> | Galería</title>

    <?php include './resources/modules/header.php'; ?>

</head>

<body>

    <div class="fondo-gradient-background"></div>

  <?php include './resources/modules/navbar.php'; ?>

  <div class="container container-fluid">

    <h1>Galería de imágenes</h1>
    
    <div class="lightbox-gallery">
        <div><img src="./public/images/galeria/1.jpeg" data-image-hd="./public/images/galeria/1.jpeg"></div>
        <div><img src="./public/images/galeria/2.jpeg" data-image-hd="./public/images/galeria/2.jpeg"></div>
        <div><img src="./public/images/galeria/3.jpeg" data-image-hd="./public/images/galeria/3.jpeg"></div>
        <div><img src="./public/images/galeria/4.jpeg" data-image-hd="./public/images/galeria/4.jpeg"></div>
        <div><img src="./public/images/galeria/5.jpeg" data-image-hd="./public/images/galeria/5.jpeg"></div>
        <div><img src="./public/images/galeria/6.jpeg" data-image-hd="./public/images/galeria/6.jpeg"></div>
    </div>
  </div>

  </div>

  <?php include './resources/modules/footer.php'; ?>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script>
        // Create a lightbox
(function() {
  var $lightbox = $("<div class='lightbox'></div>");
  var $img = $("<img>");

  // Add image and caption to lightbox

  $lightbox
    .append($img)

  // Add lighbox to document

  $('body').append($lightbox);

  $('.lightbox-gallery img').click(function(e) {
    e.preventDefault();

    // Get image link and description
    var src = $(this).attr("data-image-hd");

    // Add data to lighbox

    $img.attr('src', src);

    // Show lightbox

    $lightbox.fadeIn('fast');

    $lightbox.click(function() {
      $lightbox.fadeOut('fast');
    });
  });

}());
    </script>
    
</body>

</html>