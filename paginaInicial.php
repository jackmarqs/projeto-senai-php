<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/formLogin.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Página Inicial</title>
</head>
<body class="conteudo">
    <header>
        <nav class="navbar bg-light">
            <div class="container container-fluid">
                <a class="navbar-brand" href="#">
                <img src="images/senai_logo.png" alt="" width="100" height="48">
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <form action="view/formLogin.php" method="POST">
                    <input type="submit" class="btn btn-outline-dark" value="Entrar"></input>
                </form>
            </div>
        </nav>
    </header>
    <nav class="nav flex-column nav-tabs" >
        
    </nav>
    <main>
        <h1>Bem-vindo a Escola Técnica Senai!</h1>
        <form action="view/formLogin.php" method="POST">
            <input type="submit" class="btn btn-success"  value="Entrar"></input>
        </form>
        
    </main>
    <footer>
        Todos os direitos reservados
    </footer>
</body>
</html>