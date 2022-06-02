<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css1/styleForm.css">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Senai</title>
</head>
<body class="conteudo">
    <header>
        <nav class="navbar bg-light">
            <div class="container container-fluid">
                <a class="navbar-brand" href="../paginaInicial.php">
                    <img src="../images/senai_logo.png" alt="" width="100" height="48">
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <form>
                    <input type="submit" class="btn btn-outline-dark" value="Entrar"></input>
                </form>
            </div>
        </nav>
    </header>
    <nav class="nav flex-column nav-tabs" >

    </nav>
    <main>
        <div class="form-floating login">
            <h1>Login</h1>
            <form action="../controller/login.php" method="POST">
                <div class="form-floating">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário">
                    <label for="usuario">Usuário</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                    <label for="senha">Senha</label>
                </div>
                <input type="submit" id="submit" class ="btn btn-primary form-control" value="Entrar">
            </form>
        </div>
    </main>
    <footer>
        Todos os direitos reservados
    </footer>
</body>
</html>