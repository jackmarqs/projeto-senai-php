<?php
    require_once '../dao/funcionarioDAO.php';
    require_once '../dto/funcionarioDTO.php';
    
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    $perfil = $_POST['perfil'];
    $genero = $_POST['genero'];
    $datanasc = date($_POST['datanasc']);

    $funcionarioDTO = new funcionarioDTO();
    $funcionarioDTO -> setCpf($cpf);
    $funcionarioDTO -> setNome($nome);
    $funcionarioDTO -> setEmail($email);
    $funcionarioDTO -> setUsuario($usuario);
    $funcionarioDTO -> setSenha($senha);
    $funcionarioDTO -> setPerfil($perfil);
    $funcionarioDTO -> setGenero($genero);
    $funcionarioDTO -> setDatanasc($datanasc);

    $funcionarioDAO = new funcionarioDAO;
    $funcionarioDAO -> cadastrarFuncionario($funcionarioDTO);
    header("Location: ../index.php");
?>