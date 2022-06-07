<?php
    $perfil = $_SESSION['perfil'];
    switch ($perfil){
        case 'Administrador':
            echo "<a class= 'nav-link' href='index.php'>Inicio</a>";
            echo "<a class='nav-link' href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='view/listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='view/formFuncionario.php'>Cadastrar Funcionário</a>";
            echo "<a class='nav-link' href='view/formMembro.php'>Cadastrar Membro</a>";
            break;
        case 'Coordenador':
            echo "<a class= 'nav-link' href='index.php'>Inicio</a>";
            echo "<a class='nav-link' href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='view/listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='view/formFuncionario.php'>Cadastrar Funcionário</a>";
            echo "<a class='nav-link' href='view/formMembro.php'>Cadastrar Membro</a>";
            echo "<a class='nav-link' href='view/listarMaterias.php'>Listar Matérias</a>";
            echo "<a class='nav-link' href='view/formMateria.php'>Cadastrar Materia</a>";
            break;
        case 'Funcionario':
            echo "<a class= 'nav-link' href='index.php'>Inicio</a>";
            echo "<a class='nav-link' href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='view/listar.php'>Listar cliente</a>";
            break;
        case 'Aluno':
            echo "<a class= 'nav-link' href='index.php'>Inicio</a>";
            echo "<a class='nav-link' href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='view/listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='view/listarMaterias.php'>Listar Matérias</a>";
            break;
    }
?>