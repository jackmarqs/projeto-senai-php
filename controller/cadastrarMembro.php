<?php
    require_once '../dao/membroDAO.php';
    require_once '../dto/membroDTO.php';
    
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    $perfil = $_POST['perfil'];
    $genero = $_POST['genero'];
    $datanasc = date($_POST['datanasc']);

    $membroDTO = new membroDTO();
    $membroDTO -> setCpf($cpf);
    $membroDTO -> setNome($nome);
    $membroDTO -> setEmail($email);
    $membroDTO -> setUsuario($usuario);
    $membroDTO -> setSenha($senha);
    $membroDTO -> setPerfil($perfil);
    $membroDTO -> setGenero($genero);
    $membroDTO -> setDatanasc($datanasc);

    $membroDAO = new membroDAO;
    $membroDAO -> cadastrarMembro($membroDTO);
    header("Location: ../index.php");
?>