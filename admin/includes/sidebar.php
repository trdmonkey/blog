<?php
$pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/") +1);
// $pageName = basename($_SERVER['SCRIPT_NAME']); /* HACE LO MISMO PERO MAS OPTIMIZADO Y PRACTICO */
// echo $pageName;
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://jorge-luis.netlify.app/" target="_blank">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX0x15dcHy02aDGHJQkktHoAzJiz2cCjyAZvUYDePMff3mm-Ah1LBsIeK6Fl9pTP3JxfE&usqp=CAU" style="border-radius: 5px;" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold" style="font-weight: bold; letter-spacing: 1px;">.net</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= $pageName == 'index.php' ? 'active' : ''; ?>" href="index.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="fa fa-home text-dark text-lg"></i> -->
                        <i class="fa fa-tachometer <?= $pageName == 'index.php' ? 'text-white' : 'text-dark'; ?> text-lg" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inicio</span>
                </a>
            </li>
            
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Consultas</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $pageName == 'enquiries.php' || $pageName == 'enquires-view.php' ? 'active' : ''; ?>" href="enquiries.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="fa fa-bullhorn text-white text-lg"></i> -->
                        <i class="fa fa-coffee <?= $pageName == 'enquiries.php' ? 'text-white' : 'text-dark'; ?> text-lg" aria-hidden="true"></i>

                    </div>
                    <span class="nav-link-text ms-1">Consultas</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Gestionar Servicios</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $pageName == 'services.php' || $pageName == 'services-create.php' || $pageName == 'services-edit.php' ? 'active' : ''; ?>" href="services.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-tty <?= $pageName == 'services.php' ? 'text-white' : 'text-dark'; ?> text-lg" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Servicios</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administrador</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $pageName == 'users.php' || $pageName == 'users-create.php' || $pageName == 'users-edit.php' ? 'active' : ''; ?>" href="users.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user-circle-o <?= $pageName == 'users.php' ? 'text-white' : 'text-dark'; ?> text-lg" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Admin | Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $pageName == 'social-media.php' || $pageName == 'social-media-create.php' || $pageName == 'social-media-edit.php' ? 'active' : ''; ?>" href="social-media.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="fa fa-cogs text-white text-lg"></i> -->
                        <i class="fa fa-superpowers <?= $pageName == 'social-media.php' ? 'text-white' : 'text-dark'; ?> text-lg" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Medios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $pageName == 'settings.php' ? 'active' : ''; ?>" href="settings.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="fa fa-cogs text-white text-lg"></i> -->
                        <i class="fa fa-cogs <?= $pageName == 'settings.php' ? 'text-white' : 'text-dark'; ?> text-lg" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Ajustes</span>
                </a>
            </li>

            
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <!-- <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')"></div>
            <div class="card-body text-start p-3 w-100">
                <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                    <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
                </div>
                <div class="docs-info">
                    <h6 class="text-white up mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold">Please check our docs</p>
                    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                </div>
            </div>
        </div> -->
        <a class="btn bg-gradient-primary mt-3 w-100" href="logout.php">logout</a>
    </div>
</aside>