<?php
  session_start();
  if(!isset($_SESSION['ipvx-bmc-username'])) {
    ?>
      <script>
        window.open('../index.php',"_self");
      </script>
    <?php
  }else {

    include('../php/connect.php'); //CONNECTION
    include('./php/mainendpoint.php'); //ENDPOINT
    include('./backup/php/backup.php'); //ENDPOINT
    ?>
        <!-- HTML CODES -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="./assets/img/logo.png" />
        <title>Butwal Model College | Content Management System | Dashboard</title>

        <!-- ONLINE LINKS -->
        <?php include("./links.php"); ?>

        <!-- CSS -->
        <link rel="stylesheet" href="./assets/css/index.css" />

        </head>
        <body>
            <!-- MAIN WRAPPER -->
            <div class="container-fluid">
                <div class="row justify-content-around" id="main-wrapper">
                    <!-- MENU COMPONENT -->
                    <?php include("./components/main/menu.php"); ?>
                    <!-- CONTENT COMPONENT -->
                    <?php include("./components/main/content.php"); ?>
                </div>
            </div>

            <!-- SCRIPTS -->
            <?php include("./scripts.php"); ?>
        </body>
        </html>
    <?php
  }
?>