<?php
    require_once '../dao/membroDAO.php'; 

    $cpf = $_GET['cpf'];
    $id_usuario = $_GET['id_usuario'];
    $membroDAO = new membroDAO();
    $membroDAO -> excluirMembro($cpf);
    $membroDAO -> excluirUsuario($id_usuario);
    header("Location: '../view/listar.php'");
?>
