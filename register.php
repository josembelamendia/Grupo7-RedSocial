<?php
if(!filesize('users.json')) {
      $users = [
          'usuarios' => []
      ];
      @file_put_contents('users.json', json_encode($users));
  }
  if($_POST) {
      $json = json_decode(file_get_contents('users.json'), true);
      $id = (count($json['usuarios']) + 1);
      $usuario = [
          'id' => $id,
          'name' => $_POST['name'],
          'surname' => $_POST['surname'],
          'email' => $_POST['email'],
          'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
      ];


      $json['usuarios'][] = $usuario;
      file_put_contents('users.json', json_encode($json));
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate | My-Work</title>

    <script src="https://kit.fontawesome.com/2260a42856.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <main>
            <div class="header-container">
                <div>
                    <img class="logo" src="images/dh.jpg" alt="Logo del proyecto">
                    <h2 class="header-desktop">
                        My-Works
                    </h2>
                </div>
            </div>
            <form action="register.php" method="post">
                <div class="header-info">
                    <h2 class="register">Crear una cuenta</h2>
                    <h1 class="header">
                        <strong>DigitalMe</strong>
                    </h1>
                    <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
                    <p>¿Registrando una empresa? <a href="enterprise.php">Haz click aquí</a></p>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label class="labels" for="email">Dirección de correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email">
                     </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label class="labels" for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="name" id="nombre">
                     </div>
                    <div class="col">
                        <label class="labels" for="apellido">Apellidos</label>
                        <input type="text" class="form-control" name="surname" id="apellido">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label class="labels" for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password">
                     </div>
                </div>
                <p class="subtitle">Fecha de nacimiento</p>
                <div class="form-row">
                    <div class="col">
                        <label class="labels mr-sm-2" for="inlineFormCustomSelect">Mes</label>
                        <select class="custom-select" id="inlineFormCustomSelect">
                            <option selected>Elige..</option>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                     </div>
                     <div class="col">
                        <label class="labels" for="dia">Día</label>
                        <input type="text" class="form-control" name="dia" id="dia">
                     </div>
                     <div class="col">
                        <label class="labels" for="año">Año</label>
                        <input type="text" class="form-control" name="año" id="año">
                     </div>
                </div>
                <div class="form-row">
                      <div class="col">
                        <label class="labels mr-sm-2" for="inlineFormCustomSelect">País</label>
                        <select class="custom-select" id="inlineFormCustomSelect">
                            <option value="ARG" selected>Argentina</option>
                            <option value="BR">Brasil</option>
                            <option value="CHL">Chile</option>
                            <option value="PY">Paraguay</option>
                        </select>
                     </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p>
                        Haciendo clic en Crear cuenta, estoy de acuerdo en haber leído y aceptado <a href="#terminos&condiciones">la Condiciones de uso y la Política de privacidad</a>.
                        </p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="registrar btn btn-success">Crear cuenta</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
