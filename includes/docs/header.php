<div id="main-wrapper">

    <!--------- Nav header start-------------->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="index.php">
                <span class="brand-title" style="color:white;">
                    INFOTEP WEB PRACTICE
                </span>
            </a>
        </div>
    </div> 

    <!--header-->
    <div class="header">    
        <div class="header-content clearfix">

            <!--menu hamburguesa-->
            <div class="nav-control">    
                <div class="hamburger">
                    <span class="toggle-icon"><i class="fa-solid fa-bars"></i></span>
                </div>     
            </div>
             <!--fin menu hamburguesa-->


           
            <!--icono de buscador e input-->
              <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <a class="input-group-text bg-transparent border-0 pr-2 pr-sm-3 btn btn-info" id="basic-addon1"><i class="fa-solid fa-search"></i></a>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <!--icono de buscador e input--> 

          

            <!--info_usuario-->
            <div class="header-right">
              <ul class="clearfix">


                <!--nombre_usuario-->
                <li class="icons dropdown d-none d-md-flex">
                    <span>Nombre_Usuario</span>  
                </li>
                <!--fin_nombre_usuario-->


                <!--imagen y boton de perfil-->
                <li class="icons dropdown">
                 <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                   <span class="activity active"></span>

                    <!--imagen-->
                    <img src="../img/perfil_masculino.png" height="40" width="40" alt="">
                    <!--imagen-->

                 </div>

                 <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                   <div class="dropdown-content-body">
                     <ul>

                       <li>
                          <a href="app-profile.html"><i class="icon-user"></i> <span>Perfil</span></a>
                        </li>
                           
                            
                        <hr class="my-2">
                        

                        <li>
                            <a href="page-login.html"><i class="icon-key"></i> <span>Salir</span></a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </li>
                <!--fin de imagen y menu del perfil-->

             </ul>
           </div>
   <!--fin_info_usuario-->
 
  </div>
</div>