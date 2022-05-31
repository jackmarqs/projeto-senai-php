<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css1/formLogin.css">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body class="conteudo">
    <!-- <div class="container_login">
        <form action="../controller/login.php" method="POST">
            <input type="text" name="usuario" id="usuario" placeholder="Usuário">
            <br>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br>
            <input type="submit" id = "submit" class ="btn btn-success" value="Entrar">
        </form>
    </div> -->

    <!-- <form class="container">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->
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
        <!-- <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled">Disabled</a> -->
    </nav>
    <main>
        <h1>Login</h1>
        <div class="container_login">
            <form action="../controller/login.php" method="POST">
                <input type="text" name="usuario" id="usuario" placeholder="Usuário">
                <br>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <br>
                <input type="submit" id = "submit" class ="btn btn-primary" value="Entrar">
            </form>
        </div>
    </main>
    <footer>
        Todos os direitos reservados
    </footer>
</body>
</html>