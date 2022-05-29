<?php
    require_once'../dao/clienteDAO.php';
    $cpf = $_GET['cpf'];
    $clienteDAO = new clienteDAO();
    $cliente = $clienteDAO -> getByCPF($cpf);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css1/styleForm.css">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Cadastro</title>
</head>
<body>
    <header>
        Cadastro Cliente
    </header>
    <main>
        <div class="container">
            <h1>Cadastro</h1>
            <form action="../controller/alterarCliente.php" method="POST">
                <input type="text" name="cpf" id="cpf" placeholder="CPF" class="entrada" value="<?php echo $cliente['cpf']?>">
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome completo" class="entrada" value="<?php echo $cliente['nome']?>">
                <br>
                <input type="email" name="email" id="email" placeholder="Seu melhor email" class="entrada" value="<?php echo $cliente['email']?>">
                <p>Gênero</p>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="masculino" value="M" class="entrada" <?php echo $cliente ['genero'] == 'M'? 'checked': '' ?>>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="feminino" value="F" <?php echo $cliente ['genero'] == 'F'? 'checked': '' ?>>
                <br>
                <p>
                    Data de nascimento
                    <input type="date" name="datanasc" id="data" class="entrada" value="<?php echo $cliente['datanasc']?>">
                </p>
                <input type="submit" value="Alterar" id="submit" class="submit">
            </form>
        </div>
    </main>
    <footer>

    </footer>

</body>
</html>