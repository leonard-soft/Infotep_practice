<?php 
include "../controllers/controller_consultas_backend.php";
?>
<!DOCTYPE html>
<html class="h-100" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Iniciar sesión | INFOAPPS</title>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="../includes/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="../img/infoteplogo.png">
    
</head>

<body class="h-100">

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->
        <div class="login-form-bg h-100 bg-image">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-5">
                        <div class="form-input-content">
                            <div class="card login-form mb-0" style="background: rgba(250,250,250, 0.6); backdrop-filter: blur(10px)">
                                <div class="card-body pt-5">
                                    <a class="text-center" href="login.php"> <h3>INFOAPPS</h3></a>
                                    <?php 
                                    session_start();
                                    if (!empty($_POST["btn_signin"]))
                                    {
                                      if (!empty($_POST["txt_user"]) and !empty($_POST["txt_passwd"]))
                                      {

                                        $usuario = $_POST["txt_user"];
                                        $contrasena = $_POST["txt_passwd"];

                                        $objDB = new ExtraerDatos();

                                        $signin = array();
                                        $signin = $objDB->IniciarSesion($usuario, $contrasena);

                                        if ($signin[0]["usuario"] == $usuario and $signin[0]["contrasena"] == $contrasena)
                                        {
                                          $_SESSION['id'] = $signin[0]["id_usuario"];
                                          $_SESSION['nombre'] = $signin[0]["nombre"];
                                          $_SESSION['correo'] = $signin[0]["correo"];
                                          $_SESSION['telefono'] = $signin[0]["telefono"];
                                          $_SESSION['direccion'] = $signin[0]["direccion"];
                                          $_SESSION['usuario'] = $signin[0]["usuario"];
                                          $_SESSION['contrasena'] = $signin[0]["contrasena"];

                                          header("location: ../views_admin/index.php");
                                        }
                                      else
                                      {
                                        echo '<div class="alert alert-danger text-center" role="alert">Usuario o contraseña incorrecto.</div>';
                                      }
                                    }
                                  }
                                  ?>
                              <form class="mt-5 mb-5" action="" method="post" id="frm_signin" name="frm_signin">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Usuario" required id="txt_user" name="txt_user">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" required id="txt_passwd" name="txt_passwd">
                                </div>
                                <input type="submit" class="btn login-form__btn submit w-100" value="Iniciar sesión" id="btn_signin" name="btn_signin">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--**********************************
        Scripts
        ***********************************-->
        <script src="../includes/plugins/common/common.min.js"></script>
        <script src="../includes/js/custom.min.js"></script>
        <script src="../includes/js/settings.js"></script>
        <script src="../includes/js/gleek.js"></script>
        <script src="../includes/js/styleSwitcher.js"></script>
    </body>
    </html>





