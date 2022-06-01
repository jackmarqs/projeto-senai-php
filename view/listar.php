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
        <div class="table-responsive">
            <?php
            require_once '../dao/clienteDAO.php';
            $clienteDAO = new clienteDAO();
            $clientes = $clienteDAO -> getCliente();
            ?>
            <a href="../index.php">Inicio</a>
            <table class="table table-bordered border-dark table-secundary table-striped">
                <tr>
                    <td>CPF</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Gênero</td>
                    <td>Data de nascimento</td>
                    <td>Alterar</td>
                    <td>Excluir</td>
                </tr>
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
                            <a href = 'formAlterar.php?cpf={$cliente['cpf']}'>Alterar</a>
                        </td>";
                    echo "<td>
                            <a href = '../controller/excluirCliente.php?cpf={$cliente['cpf']}' onclick='return excluir()'>Excluir</a>
                        </td>";
                    echo "</tr>";
                    echo"</div>";
                }
            ?>
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