<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/styleForm.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Senai</title>
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
    <main class="inicial">
        <h1>Bem-vindo a Escola Técnica Senai!</h1>
        <form action="view/formLogin.php" method="POST">
            <input type="submit" class="btn btn-success btn-inicial" value="Entrar">
        </form>
        
    </main>
    <footer className='footer'>
        Todos os direitos reservados © |
        Sistema Senai - 2022
        <br/>
        <a href="https://www.github.com/jackmarqs/" alt="github">
            <img src='images/github.png' alt='github' class='github'></img>
        </a>
        <a href="mailto:jackmarquesnunes@gmail.com" alt="mail">
            <img src='images/mail.png' alt='mail' class='mail'></img>
        </a>
        <a href="https://www.linkedin.com//in/jackmarqs/" alt="linkedin">
            <img src='images/linkedin.png' alt='linkedin' class='linkedin'></img>
        </a>
        <br/>
    </footer>
</body>
</html>