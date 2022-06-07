<?php
    require_once '../dao/materiaDAO.php'; 
    $id = $_GET['ID'];
    $materiaDAO = new materiaDAO();
    $materiaDAO -> excluirMateria($id);
    header("Location: '../view/listar.php'");
?>
