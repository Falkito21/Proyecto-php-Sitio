<?php 
session_start();
if ($_POST) {
    if(($_POST['usuario'] == "develoteca")&&($_POST['contrasenia']=="sistema")){

      $_SESSION['usuario']="ok";
      $_SESSION['nombreUsuario']="Develoteca";
      header("Location:inicio.php");
      
    } else{
      $mensaje = "Error: El usuario o la contraña son incorrectos";
    }



}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
    
    <div class="container">
        <div class="row">
          <div class="col-md-4">

          </div>
            <div class="col-md-4">
                <br><br><br><br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                    <?php if(isset($mensaje)){ ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo $mensaje; ?>
                        </div>
                    <?php }?>
                        <form action="" method="POST">
                        <div class = "form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="usuario"  aria-describedby="emailHelp" placeholder="Escribe tu suario">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your usuario with anyone else.</small>
                        </div>
                        <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="contrasenia" class="form-control"  placeholder="Escribe tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                        
                        
                    </div>
                    
                </div>

            </div>
            
        </div>
    </div>  


  </body>
</html>