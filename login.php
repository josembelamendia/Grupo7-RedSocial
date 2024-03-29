<?php

session_start();
require 'functions.php';

if($_POST) {
  $validator = new Validator();
  $user = getUsuario($_POST['email']);
  
  if($validator->isLoginSuccess($_POST, $user)) {
    if(isset($_POST['remember'])) {
      setcookie("remember", $_POST['email'], time() + 3600 * 24);
    }
    successLogin($_POST['email']);
		redirect("index.php"); 
  } else {
    $error = '* Correo electrónico o contraseña inválidos.';
  }
}

include('header.php');
?>
    <div class="container-fluid container-login">
      <div class="bloque-inicio col-sm-12 col-md-10 col-lg-6 col-xl-4">
        <h2 class="inicia h2Login">Inicia  sesíon para continuar</h2>
        <h1 class="h1Login">DigitalMe</h1>
        <form action="login.php" method="post">
          <div class="form-group row">
            <div class="col-12">
              <input type="email" name="email" class="form-control" id="inputPasswor" placeholder="Dirección de correo electronico" value="<?=$_POST['email'] ?? ''?>">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12">
              <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
		  <p style="color: red;"><?=$error ?? ''?></p>
          <div class="form-group form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Mantener sesión iniciada</label>
            <a class="" href="index.php">¿Contraseña olvidada?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Iniciar sesión</button>
        </form>
        <h3 class="miembro">¿Todavía no eres miembro? </h3><a class="registrarse" href="register.php">Registrarse</a>
        <h3 class="empresa">¿Deseas utilizar la cuenta de tu empresa o de tu centro educativo?</h3>
        <a href="register.php">Iniciar sesión con un Enterprise ID</a>
        <h3 class="empresa">O inicia sesión con</h3>
        <a class="google" href="www.google.com"><img class="logos-login" src="images/busqueda.png" alt=""></a>
        <a class="facebook" href="www.facebook.com"><img class="logos-login" src="images/facebook.png" alt=""></a>
        </div>
      </div>
<?php include('footer.php');?>