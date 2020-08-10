<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OCTOPUS</title>
    <link href="<?php echo base_url()?>assets/src/dist/css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
    * {
        font-family: 'Roboto', sans-serif;
      }
    </style>
</head>

<body style="background: #D3D8DA;">
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="card col-md-4">
                <div class="card-body">
                    <form action="<?php echo site_url()?>/LoginController/validatingFormData" method="POST">
                        <div class="form-group text-center text-secondary">
                        <span class="logo-icon"><img
                                src="<?php echo base_url() ?>assets/src/assets/images/OCTOPUS.png" alt="homepage"
                                class="dark-logo" width="200" height="60px" /></span>
                        </div>
                        <div class="form-group">
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="text-body">Nombre de usuario</label>
                            <input type="text"     class="form-control" name="username" required="true" minlength="5" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label class="text-body">Contraseña</label>
                            <input type="password" class="form-control" name="password" required="true" minlength="8" maxlength="30">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-rounded btn-outline-primary">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>