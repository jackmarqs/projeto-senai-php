<?php
    require_once '../dao/membroDAO.php'; 

    $id_usuario = $_GET['id_usuario'];
    $cpf = $_GET['cpf'];
    $membroDAO = new membroDAO();
    $membroDAO -> excluirUsuario($id_usuario);
    $membroDAO -> excluirMembro($cpf);
    header("Location: '../view/listar.php'");
?>
