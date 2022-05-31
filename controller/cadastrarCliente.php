<?php
    require_once'../dto/clienteDTO.php';
    require_once'../dao/clienteDAO.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $datanasc = date($_POST['datanasc']);

    $clienteDTO = new clienteDTO();
    $clienteDTO -> setNome($nome);
    $clienteDTO -> setCpf($cpf);
    $clienteDTO -> setEmail($email);
    $clienteDTO -> setGenero($genero);
    $clienteDTO -> setDatanasc($datanasc);

    $clienteDAO = new clienteDAO();
    $ok = $clienteDAO -> cadastrarCliente($clienteDTO);

    if($ok){
        echo"<script>
                alert('Cadastrado com sucesso!')
                window.location = '../view/listar.php'
            </script>";
    }
?>