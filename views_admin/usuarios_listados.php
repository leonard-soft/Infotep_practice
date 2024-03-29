<?php
include "../controllers/controller_consultas_backend.php"; 
include "session.php";

$db_obj = new ExtraerDatos();
$result = array();
$result = $db_obj -> listadoUsuarios();

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"> 
    <!-- theme meta -->
    <meta name="theme-name" content="Infotep" />
    <title>Usuarios Listados</title>
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
          <div class="container-fluid mt3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4 class="card-title">Listado de Usuarios</h4>
                            <div class="table-responsive">
                                
                                <?php if($result) { ?>

                                <table class="table table-bordered verticle-middle">
                                    
                                    <thead>
                                        <tr>
                                            <th scope="col" width="10px">Accion</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Direcciòn</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Contraseña</th>
                                        </tr>
                                    </thead>
                                       
                                  
                                    <?php foreach ($result as $res) {?>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <span>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil color-muted m-r-5"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa-close color-danger"></i>
                                                    </a>
                                                </span>
                                            </td>
                                            <td><?php echo $res['nombre']; ?></td>
                                            <td><?php echo $res['correo']; ?></td>
                                            <td><?php echo $res['telefono']; ?></td>
                                            <td><?php echo $res['direccion']; ?></td>
                                            <td><?php echo $res['usuario']; ?></td>
                                            <td><?php echo $res['contrasena']; ?></td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
                             <?php } ?>
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

    </body>

    </html>