<?php
    require_once 'controller/valida.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Pagina Inicial</title>
</head>
<body>
    <?php
        echo "Usuario: ", $_SESSION['usuario'],"<br>";
        echo "Perfil: ", $_SESSION['perfil'],"<br>";
    ?>
    <div>
        <?php
            include 'view/menu.php';
        ?>
    </div>
    <a href='controller/logoff.php'>Logout</a>
</body>
</html>