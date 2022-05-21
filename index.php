<?php
    require_once 'controller/valida.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <?php
        echo "Usuario: ", $_SESSION['usuario'];
        echo "Perfil: ", $_SESSION['perfil'];
    ?>
    <a href="view/formCadastrar.php">Cadastar cliente</a>
    <a href="view/listar.php">Listar cliente</a>
    <a href="controller/logoff.php">Logout</a>
</body>
</html>