<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My-works</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="bloque-inicio col-sm-12 col-md-10 col-lg-6 col-xl-4">
        <h2 class="inicia">Inicia  sesíon para continuar</h2>
        <h1>My-Works</h1>
        <form>
          <div class="form-group row">
            <div class="col-12">
              <input type="email" class="form-control" id="inputPasswor" placeholder="Dirección de correo electronico">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Mantener sesión iniciada</label>
            <a class="" href="index.php">¿Contraseña olvidada?</a>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
        <h3 class="miembro">¿Todavía no eres miembro? </h3><a class="registrarse" href="register.php">Registrarse</a>
        <h3 class="empresa">¿Deseas utilizar la cuenta de tu empresa o de tu centro educativo?</h3>
        <a href="register.php">Iniciar sesión con un Enterprise ID</a>
        <h3 class="empresa">O inicia sesión con</h3>
        <a class="google" href="www.google.com"><img class="logos" src="images/busqueda.png" alt=""></a>
        <a class="facebook" href="www.facebook.com"><img class="logos" src="images/facebook.png" alt=""></a>
        </div>
      </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>