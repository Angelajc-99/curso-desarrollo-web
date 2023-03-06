<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Higuest Quality</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/base.css">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="index.js"></script>


  <style>
    

    .parallax {
      /* The image used */
      /* background-image: url('https://static.wixstatic.com/media/11062b_4f14b356c1df4854968cf1cc94ca98c5f000.jpg/v1/fill/w_1516,h_937,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_4f14b356c1df4854968cf1cc94ca98c5f000.jpg'); */
    
  /* The image used */
  background-image: url('https://static.wixstatic.com/media/11062b_4f14b356c1df4854968cf1cc94ca98c5f000.jpg/v1/fill/w_1516,h_937,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_4f14b356c1df4854968cf1cc94ca98c5f000.jpg');

  /* Full height */
  height: 100%; 

  /* Efecto del desplazamiento */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

    }
    </style>
  
</head>
<!-- Header -->

<!-- Nabvar / Menú de navegación  -->

<!-- Una columna lateral -->

<!-- El contenido principal -->

<!-- Contenido secundario -->

<!-- Footer -->

<!-- require "modules/inicio.php"; -->

<body>
<div class="parallax">
  <!-- Inicio -->
  <?php
  require "modulos/menu.php";
  ?>

  <!-- Menú -->
  <?php
  require "modulos/inicio.php";
  ?>

  <!-- Sobre -->
  <?php
  require "modulos/servicios.php";
  ?>

  <!-- Sobre nosotros -->
  <?php
  require "modulos/sobre-nosotros.php";
  ?>

  <!-- Proyectos -->
  <?php
  require "modulos/proyectos.php";
  ?>

  <!-- Contactos -->
  <?php
  require "modulos/contacto.php";
  ?>
</div>

  <!-- Footer -->
  <?php
  require "modulos/footer.php";
  ?>
    

</body>

<link rel="stylesheet" href="css/responsive.css">


</html>