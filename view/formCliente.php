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
    </header>
    <main>
        <div class="container">
            <h1>Cadastro Cliente</h1>
            <form action="../controller/cadastrarCliente.php" method="POST">
                <input type="text" name="cpf" id="cpf" placeholder="CPF" class="entrada">
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome completo" class="entrada">
                <br>
                <input type="email" name="email" id="email" placeholder="Email" class="entrada">
                <p>Gênero</p>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="masculino" value="M" class="genero">
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="feminino" value="F" class="genero">
                <br>
                <p>
                    Data de nascimento
                    <input type="date" name="datanasc" id="data" class="entrada">
                </p>
                <input type="submit" value="Cadastrar" id="submit" class="submit">
            </form>
        </div>
    </main>
    <footer>

    </footer>

</body>
</html>