<?php
    $perfil = $_SESSION['perfil'];
    switch ($perfil){
        case 'Administrador':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='formFuncionario.php'>Cadastrar Funcionário</a>";
            break;
        case 'Funcionario':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='listar.php'>Listar cliente</a>";
            break;
    }
?>