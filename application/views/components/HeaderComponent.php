<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/src/assets/images/favicon.png">
    <title>OCTOPUS</title>
    <link href="<?php echo base_url() ?>assets/src/dist/css/style.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <link href="<?php echo base_url()?>assets/css/global.css" rel="stylesheet">
</head>

<body>

<?php if (!$this->session->userdata("usuario")): ?>
    <div id="info-header-modal" class="modal fade show" tabindex="-1" role="dialog"
        aria-labelledby="info-header-modalLabel" aria-modal="true" style="display: block; padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="text-align: center;">
                    <p>¡Lo sentimos! La sesión ha terminado, vuelve a intentarlo</p>
                    <a class="btn btn-rounded btn-outline-success"
                        href="<?php echo site_url() ?>/LoginController/logout">Iniciar de nuevo sesión</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <div class="navbar-brand">
                    <a href="<?php base_url() ?>MainController">
                        <span class="logo-icon"><img
                                src="<?php echo base_url() ?>assets/src/assets/images/OCTOPUS.png" alt="homepage"
                                class="dark-logo" width="200" height="60px" /></span>
                    </a>
                </div>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="<?php base_url()?>MainController">
                            <span><i data-feather="bell" class="svg-icon"></i></span>
                            <?php if (isset($countNotifications) and $countNotifications != null): ?>
                                <span class="badge badge-primary notify-no rounded-circle"><?php echo $countNotifications; ?></span>
                            <?php endif; ?>
                        </a>
                    </li>

                    <li class="nav-item dropdown show">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-briefcase"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left user-dd animated flipInY">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php base_url()?>MainController">Gestión de operaciones/formatos</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
                            <span class="ml-2 d-none d-lg-inline-block"><span class="text-dark">
                                <?php echo $this->session->userdata("usuario"); ?>
                            </span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="dropdown-divider"></div>
                               
                                <a class="dropdown-item" href="<?php base_url()?>ConfigController">
                                    <i data-feather="settings" class="svg-icon mr-2 ml-1"></i>Gestión interna/externa
                                </a>

                            <div class="dropdown-divider"></div>
                            <?php if ($this->session->userdata("usuario")): ?>

                                <a class="dropdown-item" href="<?php echo site_url() ?>/LoginController/logout">
                                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i>Cerrar sesión
                                </a>
                           
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>