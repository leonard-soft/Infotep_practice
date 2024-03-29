<?php 
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
    <title>Plantilla</title>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="active-member">
                                <div class="table-responsive">
                                    <table class="table table-xs mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 120px;">Codigo PC</th>
                                                <th style="width: 60px;">Fecha Inicio</th>
                                                <th style="width: 60px;">Fecha Final</th>
                                                <th>Tipo Mantenimiento</th>
                                                <th>Ubicación</th>
                                                <th>Problemas</th>
                                                <th>Causas</th>
                                                <th>Solución</th>
                                                <th>Responsable</th>
                                                <th>Estado Final</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            for ($i=0; $i < 10; $i++) { 
                                            ?>
                                            <tr>
                                                <td>SisLab03-PC05</td>
                                                <td>26/09/2022</td>
                                                <td>26/09/2022</td>
                                                <td>Correctivo</td>
                                                <td>Laboratorio_4</td>
                                                <td>Daño en la fuente de Poder</td>
                                                <td>Un corte eléctrico en la fuente de poder</td>
                                                <td>Se realizó la  instalación de la fuente en el pc-05 del laboratorio 03.</td>
                                                <td>Leonardo Bermudez, Windis Melo, David Niebles y Juan Nontien.</td>
                                                <td>Funcionando Correctamente </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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