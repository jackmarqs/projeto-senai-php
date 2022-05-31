<?php
    $perfil = $_SESSION['perfil'];
    switch ($perfil){
        case 'Administrador':
            echo "<a class= 'nav-link' href='../index.php'>Inicio</a>";
            echo "<a class='nav-link' href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='view/listar.php'>Listar cliente</a>";
            echo "<a class='nav-link' href='view/formFuncionario.php'>Cadastrar Funcionário</a>";
            break;
        case 'Funcionario':
            echo "<a class='nav-link' href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a class='nav-link' href='view/listar.php'>Listar cliente</a>";
            break;
    }
?>