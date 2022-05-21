<?php
    require_once '../dao/clienteDAO.php'; 

    $cpf = $_GET['cpf'];
    $clienteDAO = new clienteDAO();
    $clienteDAO -> excluirCliente($cpf);
    echo "<script>
            window.location = '../view/listar.php';
        </script>"; 
    //header("Location: '../view/listar.php'");
?>
