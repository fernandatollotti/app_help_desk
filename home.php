<?php 
  require_once("validate_acess.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>App Help Desk</title>

      <!-- Boostrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <style>
        .card-body img { cursor: pointer; }
      </style>
  </head>
  <body>


    <header class="p-3 bg-dark">
        <div class="container">
            <nav class="navbar navbar-dark">
                <a href="/" class="navbar-brand">
                    <img src="images/logo.png" alt="App Help Desk" width="30" height="30" class="me-2 d-inline-block align-top">
                    <span>App Help Desk</span>
                </a>

                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="logoff.php" class="nav-link">SAIR</a>
                  </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="card-menu mt-5">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-6 text-center">
                            <a href="call.php">
                              <img src="images/icon-create.png" width="70" height="70">
                            </a>
                          </div>
                          <div class="col-md-6 text-center">
                            <a href="consult.php">
                              <img src="images/icon-search.png" width="70" height="70">
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  </body>
</html>