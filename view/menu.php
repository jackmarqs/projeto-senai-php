<?php
    $perfil = $_SESSION['perfil'];
    switch ($perfil){
        case 'Administrador':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='formFuncionario.php'>Cadastrar Funcionário</a>";
            echo "<a class='nav-link' href='formMembro.php'>Cadastrar Membro</a>";
            break;
        case 'Coordenador':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='formFuncionario.php'>Cadastrar Funcionário</a>";
            echo "<a class='nav-link' href='formMembro.php'>Cadastrar Membro</a>";
            echo "<a class='nav-link' href='listarMaterias.php'>Listar Matérias</a>";
            echo "<a class='nav-link' href='formMateria.php'>Cadastrar Materia</a>";
            break;
        case 'Funcionario':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='listar.php'>Listar cliente</a>";
            break;
        case 'Aluno':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='listarMaterias.php'>Listar Matérias</a>";
            break;
    }
?>