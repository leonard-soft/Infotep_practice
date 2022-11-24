<?php  
include '../models/models_admin.php';
include "session.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"> 
    <!-- theme meta -->
    <meta name="theme-name" content="Infotep" />
    <title>Usuarios Registrar</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4fc40aa7f8.js" crossorigin="anonymous"></script>
    <!-- Pignose Calender -->
    <link href="../includes/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../includes/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../includes/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../includes/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="../img/infoteplogo.png">
    <!--scripts-->
    <script type="text/javascript" src="../includes/js/jquery-migrate-3.4.0.js"></script>

</head>

<body>

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


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <!---------Nav header end----------------->

        <!--------------Header start-------------->
        <?php 
        include "../includes/docs/header.php";
        ?>
        <!--------Header end ti-comment-alt------->



        <!-------Sidebar start-------------------->

        <?php 
        include "../includes/docs/sidebar.php";
        ?>
        
        <!-------Sidebar end---------------------->




        <!---------Content body start-------------->
        <div class="content-body">
          <div class="container-fluid mt2">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body bg-secondary rounded">
                            <h4 class="card-title">Crear Nuevo Perfil</h4>
                            <p class="text-dark m-b-15 f-s-12">aqui podras crear un nuevo perfil para tus usuarios.</p>
                            <div class="basic-form">
                                <form action="./prueba.php" method="post"> <br>

                                    <div class="form-group">
                                        <label class = "text-dark"><strong>ingresar nombre para el usuario</strong></label>
                                        <input id="txt_nombre" name="txt_nombre" type="text" class="form-control input-default" placeholder="nombre">
                                    </div>

                                    <div class="form-group">
                                       <label class = "text-dark"><strong>ingresar un correo para el usuario</strong></label>
                                       <input id="txt_email" name="txt_email" type="text" class="form-control input-default" placeholder="Correo">
                                   </div>

                                   <div class="form-group">
                                      <label class = "text-dark"><strong>ingresar un telefono para el usuario</strong></label>
                                      <input id="txt_num" name="txt_num" type="text" class="form-control input-default" placeholder="telefono">
                                  </div>

                                  <div class="form-group">
                                      <label class = "text-dark"><strong>ingresar la direccion donde vive el usuario</strong></label>
                                      <input id="txt_dir" name="txt_dir" type="text" class="form-control input-default" placeholder="Calle example #23-100">
                                  </div>

                                  <div class="form-group">
                                      <label class = "text-dark"><strong>ingresar un usuario</strong></label>
                                      <input id="txt_user" name="txt_user" type="text" class="form-control input-default" placeholder="Usuario">
                                  </div>

                                  <div class="form-group">
                                      <label class = "text-dark"><strong>ingresar una contraseña</strong></label>
                                      <input id="txt_pass" name="txt_pass" type="text" class="form-control input-default" placeholder="Contraseña">
                                  </div>


                                  <div class="form-group">
                                    <button type="submit" id="button-next" class="btn btn-success">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<!----------Content body end--------------->


<!----------Footer start------------------->
<?php 
include "../includes/docs/footer.php";
?>
<!---------Footer end---------------------->



</div>
    <!--**********************************
        Main wrapper end
        ***********************************-->



    <!--**********************************
        Scripts
        ***********************************-->
        <script src="../includes/plugins/common/common.min.js"></script>
        <script src="../includes/js/custom.min.js"></script>
        <script src="../includes/js/settings.js"></script>
        <script src="../includes/js/gleek.js"></script>
        <script src="../includes/js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="../includes/plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="./plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="../includes/plugins/d3v3/index.js"></script>
        <script src="../includes/plugins/topojson/topojson.min.js"></script>
        <script src="../includes/plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="../includes/plugins/raphael/raphael.min.js"></script>
        <script src="../includes/plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="../includes/plugins/moment/moment.min.js"></script>
        <script src="../includes/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="../includes/plugins/chartist/js/chartist.min.js"></script>
        <script src="../includes/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
        <script src="../includes/js/dashboard/dashboard-1.js"></script>

         <?php
                if (isset($_POST["txt_nombre"])){
                  $nombre = $_POST["txt_nombre"];
                  $email = $_POST["txt_email"];
                  $telefono = $_POST["txt_num"];
                  $dir = $_POST["txt_dir"];
                  $user = $_POST["txt_user"];
                  $pass = $_POST["txt_pass"];

                  $objDBO = new DBconfig();
                  $objDBO->config();
                  $objDBO->conexion();

                  $ejecucion = $objDBO->Operaciones("INSERT INTO usuarios(nombre,correo,telefono,direccion,usuario,contrasena) VALUES('$nombre','$email','$telefono','$dir', '$user','$pass')");

                  if($ejecucion){ // Todo se ejecuto correctamente
                  echo "<div class='alert alert-success'>
                          Datos registrados correctamente
                        </div>";
                  }else{ // Algo paso mal
                  echo "<div class='alert alert-danger'>
                          Ha ocurrido un error inexperado 
                        </div>";
                       }
                }
              ?>

</body>

</html>