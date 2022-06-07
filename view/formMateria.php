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
                <a class="navbar-brand" href="../index.php">
                <img src="../images/senai_logo.png" alt="" width="100" height="48">
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <form>
                    <?php
                        require_once '../controller/valida.php';
                        echo "<h5>","Usuário: ", $_SESSION['usuario'],"&emsp;&emsp;","Perfil: ", $_SESSION['perfil'],"</h5>";
                    ?>
                </form>
                <form action="../controller/logoff.php" method="POST">
                    <input type="submit" class="btn btn-outline-danger" value="Sair">
                </form>
            </div>
        </nav>
    </header>
    <nav class="nav flex-column nav-tabs" >
        <?php
            include '../view/menu.php';
        ?>
    </nav>
    <main>
    <div class="form-floating">
        <h1>Cadastrar Matéria</h1>
        <form action="../controller/cadastrarMateria.php" method="POST">
            <!-- <div class="form-floating">
                <input type="text" name="id" id="id" class="form-control" placeholder="id">
                <label for="id">ID</label>
            </div> -->
            <div class="form-floating">
                <input type="text" name="diciplina" id="diciplina" class="form-control" placeholder="Diciplina">
                <label for="diciplina">Diciplina</label>
            </div>
            <h5>Turno:</h5>
            <div class="form-check">
                <input name="turno" class="form-check-input" type="radio" id="matutino" value="Matutino">
                <label class="form-check-label" for="matutino">
                    Matutino
                </label>
                <br>
                <input name="turno" class="form-check-input" type="radio" id="vespertino" value="Vespertino">
                <label class="form-check-label" for="vespertino">
                    Vespertino
                </label>
                <br>
                <input name="turno" class="form-check-input" type="radio" id="norturno" value="Noturno">
                <label class="form-check-label datanasc" for="norturno">
                    Norturno
                </label>
            </div>
            <div class="form-floating mb-3"> 
                <input type="text" name="professor" class="form-control" id="floatingInput" placeholder="Professor">
                <label for="floatingInput">Professor</label>
            </div>
                <input type="submit" value="Cadastrar" id="submit" class="form-control btn btn-primary submit">
            </form>
        </div>
    </main>
    <footer className='footer'>
        Todos os direitos reservados © |
        Sistema Senai - 2022
        <br/>
        <a href="https://www.github.com/jackmarqs/" alt="github">
            <img src='../images/github.png' alt='github' class='github'></img>
        </a>
        <a href="mailto:jackmarquesnunes@gmail.com" alt="mail">
            <img src='../images/mail.png' alt='mail' class='mail'></img>
        </a>
        <a href="https://www.linkedin.com//in/jackmarqs/" alt="linkedin">
            <img src='../images/linkedin.png' alt='linkedin' class='linkedin'></img>
        </a>
        <br/>
    </footer>
</body>
</html>