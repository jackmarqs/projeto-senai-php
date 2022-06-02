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
            require_once '../dao/clienteDAO.php';
            $clienteDAO = new clienteDAO();
            $clientes = $clienteDAO -> getCliente();
            ?>
            <table class="table table-secundary table-striped table caption-top">
                <caption>List of users</caption>
                <thead class="table-secundary">
                    <tr>
                        <td>CPF</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Gênero</td>
                        <td>Data de nascimento</td>
                        <td>Alterar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
            <tbody class="table-group-divider">
                <?php
                    foreach($clientes as $cliente){
                        echo "<div>";
                        echo "<tr>";
                        echo "<td>{$cliente['cpf']}</td>";
                        echo "<td>{$cliente['nome']}</td>";
                        echo "<td>{$cliente['email']}</td>";
                        echo "<td>{$cliente['genero']}</td>";
                        echo "<td>{$cliente['datanasc']}</td>";
                        echo "<td>
                                <a class='btn btn-warning' href = 'formAlterar.php?cpf={$cliente['cpf']}'>Alterar</a>
                            </td>";
                        echo "<td>
                                <a class='btn btn-danger' href = '../controller/excluirCliente.php?cpf={$cliente['cpf']}' onclick='return excluir()'>Excluir</a>
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
    <footer>
        Todos os direitos reservados
    </footer>
</body>
</html>