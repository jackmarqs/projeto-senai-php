<?php
    require_once '../dao/membroDAO.php'; 

    $cpf = $_GET['cpf'];
    $membroDAO = new membroDAO();
    $membroDAO -> excluirMembro($cpf);
    echo "<script>
            window.location = '../view/listar.php';
        </script>"; 
    //header("Location: '../view/listar.php'");
?>
