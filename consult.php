<?php require_once("validate_acess.php"); ?>

<?php

  $lists = array();

  $file = fopen('file.hd', 'r');

  while( !feof( $file ) ) {
    $register = fgets( $file );

    $register_details = explode('#', $register);

    if ( $_SESSION['perfil'] == 2 )
    {
      if ( $_SESSION['id'] != $register_details[0] ) 
      {
        continue;
      } 
      else 
      {
        $lists[] = $register;
      }
    }
    else 
    {
      $lists[] = $register;
    }
  }

  fclose( $file );
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
          </nav>
      </div>
    </header>

    <div class="container">    
      <div class="row">
        <div class="card-consult mt-5">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            <div class="card-body">

              <?php foreach($lists as $value): ?>
              
              <?php 
              
                $data_list = explode('#', $value);
              
                if ( count($data_list) < 3 ) 
                {
                  continue;
                }
              
              ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$data_list[1]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$data_list[2]; ?></h6>
                  <p class="card-text"><?=$data_list[3]; ?></p>

                </div>
              </div>

              <?php endforeach; ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning w-100">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>