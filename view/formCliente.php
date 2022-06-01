<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css1/styleForm.css">
    <!-- <link rel="stylesheet" href="../css1/formLogin.css"> -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Página Inicial</title>
</head>
<body class="conteudo">
    <header>
        <nav class="navbar bg-light">
            <div class="container container-fluid">
                <a class="navbar-brand" href="../index.php">
                <img src="../images/senai_logo.png" alt="" width="100" height="48">
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <form action="../controller/logoff.php" method="POST">
                    <input type="submit" class="btn btn-outline-danger" value="Sair" ></input>
                </form>
            </div>
        </nav>
    </header>
    <nav class="nav flex-column nav-tabs" >
        <!-- <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled">Disabled</a> -->
        <?php
            require_once '../controller/valida.php';
            echo "Usuario: ", $_SESSION['usuario'],"<br>";
            echo "Perfil: ", $_SESSION['perfil'],"<br>";
            include '../view/menu.php';
        ?>
    </nav>
    <main>
    <div>
        <h1>Cadastro Cliente</h1>
        <form action="../controller/cadastrarCliente.php" method="POST">
            <input type="text" name="cpf" id="cpf" placeholder="CPF" class="entrada">
            <br>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" class="entrada">
            <br>
            <input type="email" name="email" id="email" placeholder="Email" class="entrada">
            <p>Gênero</p>
            <label for="masculino">Masculino</label>
            <input type="radio" name="genero" id="masculino" value="M" class="genero">
            <label for="feminino">Feminino</label>
            <input type="radio" name="genero" id="feminino" value="F" class="genero">
            <br>
            <p>
                Data de nascimento
                <input type="date" name="datanasc" id="data" class="entrada">
            </p>
            <input type="submit" value="Cadastrar" id="submit" class="submit">
            </form>
        </div>
    </main>
    <footer>
        Todos os direitos reservados
    </footer>
</body>
</html>