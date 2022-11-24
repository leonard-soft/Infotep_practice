 <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.php">
                        <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                        <span class="logo-compact">INFOTEP WEB PRACTICE</span>
                        <span class="brand-title" style="color: white;">
                            INFOTEP WEB PRACTICE
                        </span>
                    </a>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->


        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">    
                <div class="header-content clearfix">
                    
                    <!--menu hamburguesa-->
                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="fa-solid fa-list"></i></span>
                        </div>
                    </div>
                    <!--fin menu hamburguesa-->

                    <!--formulario de busqueda-->
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">
                                <a class="input-group-text bg-transparent border-0 pr-2 pr-sm-3 btn btn-success" id="basic-addon1">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                            <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                            <div class="drop-down animated flipInX d-md-none">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--formulario de busqueda-->
                    
                    <!--cierre de sesion-->
                    <div class="header-right">
                        <ul class="clearfix">

                            <li class="icons dropdown d-none d-md-flex">
                                <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                    <span>Bienvenido, <?php echo $_SESSION['nombre'];?>!</span>  
                                </a>
                            </li>


                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="../img/perfil_masculino.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="app-profile.html"><i class="icon-user"></i> <span>Perfil</span></a>
                                            </li>
                                            
                                            <hr class="my-2">

                                            
                                            <li>
                                                <a href="logout.php"><i class="icon-key"></i> <span>Cerrar sesión</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->