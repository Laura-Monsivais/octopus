<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/src/assets/images/favicon.png">
    <title>OCTOPUS LOGIN</title>
    <link href="<?php echo base_url()?>assets/src/dist/css/style.min.css" rel="stylesheet">
</head>
<body>
<div class="main-wrapper">
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
        style="background:url(http://localhost/octopus/assets/images/big/des.jpg) no-repeat center center;">
        <div class="auth-box row">
            <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?php echo base_url()?>assets/src/assets/images/big/3.jpg);">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <div class="text-center">
                        <img src="<?php echo base_url()?>assets/src/assets/images/big/icon.png" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">LOGIN</h2>
                    <p class="text-center">Entra con tu correo y contraseña para acceder al panel de administración.</p>
                    <form class="mt-4" action="" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="uname">Usuario</label>
                                    <input class="form-control" id="uname" type="text" 
                                    placeholder="Ingresa tu usuario" name="username">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Contraseña</label>
                                    <input class="form-control" id="pwd" type="password" 
                                    placeholder="Ingresa tu contraseña" name="password">
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-block btn-dark">ENTRAR</button>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                No tienes una cuenta? <a href="#" class="text-danger">Regístrate</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>assets/src/assets/libs/jquery/dist/jquery.min.js "></script>
</body>
</html>