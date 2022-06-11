<?php
    require_once'../dao/membroDAO.php';
    $cpf = $_GET['cpf'];
    $membroDAO = new membroDAO();
    $membro = $membroDAO -> getByCPF($cpf);
    // $usuario = $membroDAO -> getUsuario();
?>
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
            <h1>Alterar Membro</h1>
            <form action="../controller/cadastrarMembro.php" method="POST">
                <div class="form-floating">
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" value="<?php echo $membro['cpf']?>">
                    <label for="cpf">CPF</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo" value="<?php echo $membro['nome']?>">
                    <label for="nome">Nome completo</label>
                </div>
                <div class="form-floating mb-3"> 
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $membro['email']?>">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" >
                    <label for="usuario">Usuário</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" >
                    <label for="senha">Senha</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="perfil">
                        <option selected>Selecionar</option>
                        <option value="1">Coordenador</option>
                        <option value="2">Aluno</option>
                    </select>
                    <label for="floatingSelect">Perfil</label>
                </div>
                <h5>Gênero:</h5>
                <div class="form-check">
                    <input name="genero" class="form-check-input" type="radio" id="masculino" value="M" <?php echo $membro ['genero'] == 'M'? 'checked': '' ?>>
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                    <br>
                    <input name="genero" class="form-check-input" type="radio" id="feminino" value="F" <?php echo $membro ['genero'] == 'F'? 'checked': '' ?>>
                    <label class="form-check-label" for="feminino">
                        Feminino
                    </label>
                    <br>
                    <input name="genero" class="form-check-input" type="radio" id="outro" value="O" <?php echo $membro ['genero'] == 'O'? 'checked': '' ?>>
                    <label class="form-check-label datanasc" for="outro">
                        Outro
                    </label>
                </div>
                <h5>Data de Nascimento:</h5>
                <div class="form-floating">
                    <input type="date" name="datanasc" id="data" class="form-control">
                    <label for="nome">Data de nascimento</label>
                </div>
                <input type="submit" value="Alterar" id="submit" class="form-control btn btn-primary submit">
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