<?php require_once("validate_acess.php"); ?>

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

        <div class="card-call mt-5">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="register.php" method="POST">
                    <div class="form-group pb-3">
                      <label class="pb-2">Título</label>
                      <input type="text" name="title" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group pb-3">
                      <label class="pb-2">Categoria</label>
                      <select name="category" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group pb-3">
                      <label class="pb-2">Descrição</label>
                      <textarea name="description" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="row mt-3">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-warning w-100">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info w-100" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>