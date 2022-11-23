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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../css/body.css" rel="stylesheet">
    <title>Ingresar saldo</title>
</head>
<body>
<div class="container d-flex justify-content-center text-center mt-5">
<h2>Ingrese su saldo</h2>
</div>

<div class="container d-flex justify-content-center text-center" style="padding-top: 170px;">
<form class="mt-3" action="../ingresarSaldo.php" method="post">    
<label for="title"></label>
<input class="input-4" type="text" field="" value="<?php echo $nipSesion ?>" name="nip" id="title" placeholder="id">
<br>
<br>

<input type="text" class="form-control" name="saldo" id="floatingInput" placeholder="Ingresar" style="width: 200px;">                      
<br>

<button type="submit" class="btn btn-dark" style="width: 100px;">Ingresar</button>
<a href="saldo.php" class="btn btn-dark" style="width: 100px;">Volver</a>
</form> 
</div>  
</body>
</html> 