<html lang="en">
    <head>
        <title>GSLS</title>
        <base href="<?=URL_BASE?>"><!--Esta instrução é super importante e não deve ser mudada!-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
        <!--<link rel="stylesheet" href="./publico/css/app.css">  -->
        <link rel="stylesheet" href="./publico/css/bootstrap.css">
        <link rel="stylesheet" href="./publico/css/estilo.css">
        <link rel="stylesheet" href="./publico/css/all-animation.css">
        <link rel="stylesheet" href="./publico/css/carousel.css">
        <link rel="stylesheet" href="netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    </head>
    <body>
    <?php require'cabecalho.php';?>
        <main class="">
            <?php require $viewFilePath; ?>
        </main>

    <?php require 'rodape.php';?>    


<script src="./publico/js/jquery.min.js"></script>
<script src="./publico/js/bootstrap.bundle.min.js"></script>
<script src="./publico/js/scroll.js"> </script>

    </body>
</html>