<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $nipSesion=$_SESSION['nipUsuario'];
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
    <title>Saldo</title>
</head>
<body>
<div class="container d-flex justify-content-center text-center" style="padding-top: 170px;">
<?php
                     require_once '../usuario.php';
                     $publicacion=new Usuario();
                     $resultado=$publicacion->ObtenerSaldo($nipSesion);
                     if(count($resultado)>0){
                       foreach ($resultado as $registro ) {
                         ?>
      <h2 class="text-center mt-3 text-white">Su saldo es: $<?php echo $registro['saldo']; ?> </h2> 
      </div>
      <?php
                       }
                      }
                    ?>
      <div class="container mt-5">
      <div class="row pt-5">
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center">
                <a href="menuprincipal.php" class="btn btn-dark" style="width: 120px;">Volver</a>
                <a href="formSaldo.php?id=<?php echo $registro['nip']; ?>" class="btn btn-dark" style="width: 120px;">Ingresar</a>
                </div>
                </div>
      </div>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>