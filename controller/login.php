<?php
    session_start();
    require_once '../dao/loginDAO.php';

    $usuario = isset ($_POST['usuario'])? $_POST['usuario']: '';
    $senha = md5($_POST['senha']);

    $loginDAO = new loginDAO();
    $login = $loginDAO -> login ($usuario, $senha);
    if(!empty($login)){
        $_SESSION['usuario'] = $login['user'];
        $_SESSION['perfil'] = $login['nome'];
        header("Location: ../index.php");
    }else{
        echo "<script>
                alert ('Usuario e/ou senha incorretos!')
                window.location = '../view/formLogin.php';
            </script>";
    }
?>