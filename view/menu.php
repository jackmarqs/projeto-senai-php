<?php
    $perfil = $_SESSION['perfil'];
    switch ($perfil){
        case 'Administrador':
            echo "<a href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a href='view/listar.php'>Listar cliente</a>";
            echo "<a href='view/formFuncionario.php'>Cadastrar Funcionário</a>";
            break;
        case 'Funcionario':
            echo "<a href='view/formCliente.php'>Cadastrar cliente</a>";
            echo "<a href='view/listar.php'>Listar cliente</a>";
            break;
    }
?>