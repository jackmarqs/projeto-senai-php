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
        <div class="table-responsive">
            <?php
            require_once '../dao/materiaDAO.php';
            $materiaDAO = new materiaDAO();
            $materias = $materiaDAO -> getMateria();
            ?>
            <table class="table table-secundary table-striped table caption-top">
                <caption>Lista de Matérias</caption>
                <thead class="table-secundary">
                    <tr>
                        <td>ID</td>
                        <td>Diciplina</td>
                        <td>Turno</td>
                        <td>Professor</td>
                        <td>Alterar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
            <tbody class="table-group-divider">
                <?php
                    foreach($materias as $materia){
                        echo "<div>";
                        echo "<tr>";
                        echo "<td>{$materia['ID']}</td>";
                        echo "<td>{$materia['diciplina']}</td>";
                        echo "<td>{$materia['turno']}</td>";
                        echo "<td>{$materia['professor']}</td>";
                        echo "<td>
                                <a class='btn btn-warning' href = 'formAlterar.php?ID={$materia['ID']}'>Alterar</a>
                            </td>";
                        echo "<td>
                                <a class='btn btn-danger' href = '../controller/excluirMateria.php?ID={$materia['ID']}' onclick='return excluir()'>Excluir</a>
                            </td>";
                        echo "</tr>";
                        echo"</div>";
                    }
                ?>
            </tbody>
        </table>
        <script>
            function excluir(){
                var ok = confirm('Deseja realmente excluir?');
                if(ok){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
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