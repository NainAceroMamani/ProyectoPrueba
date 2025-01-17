<?php
    require 'usuario/usuarioModel.php';
    $usuarios = new Model();
    $data = $usuarios->all();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <base href="">
  <meta charset="UTF-8">

  <title>ESIS - 2020</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <style>
    .btn {
      border-radius: 2px;
    }

    .bg-gradient {
      background: rgba(38, 38, 38, 1);
      background: -moz-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: -webkit-gradient(left top, right top, color-stop(0%, rgba(38, 38, 38, 1)), color-stop(100%, rgba(28, 33, 28, 1)));
      background: -webkit-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: -o-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: -ms-linear-gradient(left, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      background: linear-gradient(to right, rgba(38, 38, 38, 1) 0%, rgba(28, 33, 28, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#262626', endColorstr='#1c211c', GradientType=1);
    }
  </style>
</head>

<body class="bg-gradient" style="padding: 200px 0px;">

<div class="container">
  <div class="row">
    <div class="col-12 text-center offset-md-12">
      <h2 class="text-white mt-5 mb-3"><span class="text-warning">GRUPO 1 </span> Pagina ESIS 2020</h2>
        <?php 
            foreach($data as $usuario){
                echo "<h1 class='text-white'>".$usuario->name."</h1>";
            }
        ?>
    </div>
  </div>
</div>

  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>