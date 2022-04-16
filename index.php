<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk</title>

        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <header class="p-3 bg-dark">
            <div class="container">
                <nav class="navbar navbar-dark">
                    <a href="" class="navbar-brand">
                        <img src="images/logo.png" alt="App Help Desk" width="30" height="30" class="me-2 d-inline-block align-top">
                        <span>App Help Desk</span>
                    </a>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <div class="card-login mt-5">
                    <div class="card mx-auto" style="max-width: 360px;">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="validate.php" method="POST">
                                <div class="form-group pb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group pb-3">
                                    <input type="password" class="form-control form-control-lg" name="pass" id="pass" placeholder="Senha">
                                </div>

                                <?php if ( isset($_GET['login']) && $_GET['login'] == 'erro' ): ?>    

                                    <div class="text-danger pb-2">
                                        Email ou senha inválido(s)
                                    </div>

                                <?php endif; ?>    

                                <?php if( isset($_GET['login']) && $_GET['login'] == 'erro-secao' ): ?>

                                    <div class="text-danger pb-2">
                                        Faça login antes de acessar as páginas protegidas
                                    </div>
                                <?php endif; ?>

                                <div class="pb-3">
                                    <button class="btn btn-lg btn-info text-white w-100">ENTRAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </body>
</html>