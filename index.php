<?php
require 'includes/app.php';
$db = conectarDB();

$errores = [];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //Valida que no sea sql y que no sea vacio y que el correo sea valido
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (!$email) {
            $errores[] = "El email es obligatorio o no es valido";
        }

        if (!$password) {
            $errores[] = "La contraseña es obligatoria";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Validar que no haya errores
        if (empty($errores)) {
             //Busca el usuario.
            $query = "SELECT * FROM usuario WHERE correo = '{$email}'";

            $resultado = mysqli_query($db, $query);

            // revisa si encontro el usuario
            if ($resultado->num_rows) {
                $usuario = mysqli_fetch_assoc($resultado);
                
                //Revisar si el password es correcto
                $auth = password_verify($password, $usuario["contraseña"]);

                if ($auth) {
                    //Usuario autenticado
                    session_start();

                    //llenar el arreglo de la sesion
                    $_SESSION['nombre'] = $usuario['nombre'];
                    $_SESSION['apellido'] = $usuario['apellido'];
                    $_SESSION['correo'] = $usuario['correo'];
                    $_SESSION['login'] = true;

                    header('Location: /inventory.php');
                } else {
                    $errores[] = "La contraseña es incorrecta";
                }
            } else {
                $errores[] = "El correo no esta registrado";
            }
        }
    }

// Incluir el template
incluirTemplate('header', true);
?>

    <div class="login-container">
        <div class="left-side">
            <img src="src/img/logo_whitecrown.png" alt="Logo" class="logo">
            <h1>¡Bienvenido de nuevo! Vamos a vender mucho hoy</h1>
        </div>
        <div class="right-side">
            <h2>Iniciar Sesión</h2>
            <form class="login-form" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit" class="login-button">ENTRAR</button>
            </form>
            <?php foreach($errores as $error) : ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>