<?php
    require_once '../dao/clienteDAO.php';
    require_once '../dto/clienteDTO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $datanasc = date($_POST['datanasc']);

    $clienteDTO = new clienteDTO();
    $clienteDTO -> setCpf($cpf);
    $clienteDTO -> setNome($nome);
    $clienteDTO -> setEmail($email);
    $clienteDTO -> setGenero($genero);
    $clienteDTO -> setDatanasc($datanasc);

    $clienteDAO = new clienteDAO();
    $ok = $clienteDAO -> alterarCliente($clienteDTO);
    if($ok){
        echo "<script>
                alert('Alterado com sucesso!');
                window.location = '../view/listar.php';
            </script>";
    }else{
        echo "Não funfou";
    }
?>