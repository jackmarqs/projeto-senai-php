<?php
    require_once 'conexao/conexao.php';
    require_once '../dto/funcionarioDTO.php';
    class funcionarioDAO{
        function cadastrarFuncionario(funcionarioDTO $funcionarioDTO){
            try {
                $cpf = $funcionarioDTO -> getCpf();
                $nome = $funcionarioDTO -> getNome();
                $email = $funcionarioDTO -> getEmail();
                $usuario = $funcionarioDTO -> getUsuario();
                $senha = $funcionarioDTO -> getSenha();
                $perfil = $funcionarioDTO -> getPerfil();
                $genero = $funcionarioDTO -> getGenero();
                $datanasc = $funcionarioDTO -> getDatanasc();
    
                $bd = new conexao();
                $conexao = $bd -> getConexao();
                $sql1 = $conexao -> prepare("insert into usuario (user, pass, perfil_idperfil) values(?, ?, ?)");
                $sql1 -> bind_param('ssi', $usuario, $senha, $perfil);
                $sql1 -> execute();
    
                $ultimoID = $conexao -> insert_id;
                $sql2 = $conexao -> prepare("insert into funcionario values(? , ?, ?, ? , ? ,?)");
                $sql2 -> bind_param('ssssii', $cpf, $nome, $email, $genero, $datanasc, $ultimoID);
                $var = $sql2 -> execute();
    
                return $var;
            } catch (mysqli_sql_exception $er) {
                $erro = $er -> getMessage();
                echo $erro;
            }

        }
    }
?>