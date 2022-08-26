<?php
  session_start(); 

  if(isset($_SESSION['username'])) {
    ?>
      <script>
        window.open('./content/index.php',"_self");
      </script>
    <?php
  }else {

    include('./php/connect.php'); //CONNECTION
    include('./auth/authendpoint.php'); //ENDPOINT

    include('./auth/login.php'); //LOGIN
  ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="assets/logo.png" />
      <title>Butwal Model College | Admin Panel | Login</title>

      <!-- font awesome -->
      <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous"
      />
      <!-- font awesome -->

      <!-- bootstrap and jquery -->
      <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <!-- bootstrap and jquery -->

      <!-- FONTS -->
      <link
        href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
        rel="stylesheet"
      />

      <!-- CSS -->
      <link rel="stylesheet" href="./assets/index.css" />
    </head>
    <body>
      <div class="container-fluid">
        <div class="wrapper"></div>
        <div class="row">
          <div class="col-md-3 col-sm-12 d-flex justify-content-center">
            <div class="image">
              <img src="./assets/logo.png" alt="logo" />
            </div>
            <p class="text-center">Welcome</p>
            <form method="POST" class="containts">
              <div class="backBtn">
                <i onclick="handelBack()" class="fas fa-chevron-left"></i>
              </div>
              <div class="inputFields">
                <input
                  name="username"
                  type="text"
                  class="w-100"
                  placeholder="username"
                  id="username"
                />
                <input
                  style="display: none;"
                  name="password"
                  type="password"
                  class="w-100"
                  placeholder="password"
                  id="password"
                  required
                />
              </div>
              <div class="loginBtn">
                <span onclick="movetoPassword()" title="Next"
                  ><i class="fas fa-arrow-right"></i
                ></span>
                <button name="btn" style="display: none;">
                  <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="intro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <span data-dismiss="modal" class="text-right">&times;</span>
            </div>
            <div class="modal-body">
              <h4 class="text-center">
                <b>
                  <span class="text-danger">
                    Warning!
                  </span>
                  Authorized Personal Only
                </b>
              </h4>
              <br>
              <p class="text-center">
                If you are not related to the Company or Organization. Keep out, Your IP Address is being monitored.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- SCRIPTS -->
      <script src="./assets/app.js"></script>
    </body>
  </html>
  <?php
  }
?>
