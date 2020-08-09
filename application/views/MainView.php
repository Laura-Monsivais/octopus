<div class="page-wrapper">
    <div class="container-fluid">
        <?php  
            $notificationsList = $notifications;
            foreach ($notificationsList as $notification) {
                echo 
                "
                    <div class='list-group'>
                        <a class='list-group-item list-group-item-action flex-column align-items-start activet'>
                            <div class='d-flex w-100 justify-content-between'>
                                <h5 class='mb-1 text-muted'>Notificación</h5>
                                <small class='text-muted'>" . $notification["fecha_lanzamiento"] . "</small>
                            </div>
                            <p class='mb-1'>" . $notification["descripcion"] . "</p>
                        </a>
                    </div>
                "; 
            }
        ?>