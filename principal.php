<!-- Esto es el panel principal del Administrador -->
<?php

include('app/config.php');
include('layout/admin/datos_usuario_sesion.php');

    session_start();
    if(isset($_SESSION['usuario_sesion'])){
      
        ?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <?php  include('layout/admin/head.php');?>
            </head>
            <body class="hold-transition sidebar-mini">
            <div class="wrapper">
              <!-- MESta parte esta en menu.php-->
              <?php  include('layout/admin/menu.php');?>

                <div class="content-wrapper">

                  Bienvenido Administrador
                
                </div>
                <!-- /.content-wrapper -->
              <?php  include('layout/admin/footer.php');?>

              </div>
              <?php  include('layout/admin/footer_link.php');?>
            </body>
            </html>      
        <?php
          
        //  echo "existe sesion";
    }else{
      echo "Para ingresar a esta plataforma debe de iniciar sesion";
    }

?>

