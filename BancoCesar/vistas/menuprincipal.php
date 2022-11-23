<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $nipSesion=$_SESSION['nipUsuario'];
    $nombre=$_SESSION['nombreBienvenida'];
  }
  else{
    if ($usuarioSesion =="" && $nipSesion =="") {
        header("Location: ../index.php");
    }
  }

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="../css/body.css" rel="stylesheet">
<title>Menú Principal</title>
</head>
<body>
    
      <div class="container d-flex justify-content-center text-center" style="padding-top: 170px;">
      <h2 class="text-center mt-3 text-white">¡Hola!</h2> 
      </div>

      <div class="container mt-5">
      <div class="row pt-5">
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center">
                <a href="saldo.php" class="btn btn-dark" style="width: 120px;">Saldo</a>
                <a href="ingreso.php" class="btn btn-dark" style="width: 120px;">Depósito</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12 pt-5 text-center">
                <a href="egreso.php" class="btn btn-dark" style="width: 120px;">Retiros</a>
                <a href="Usuarios/login.php" class="btn btn-dark" style="width: 120px;">Transacciones</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12 pt-5 text-center">
                <a href="logout.php" class="btn btn-dark" style="width: 120px;">Salir</a>  
                </div>
                </div>
      </div>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>