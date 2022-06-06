<?php
    require_once 'conexao/conexao.php';
    // require_once '../dto/membroDTO.php';

    class membroDAO{
        function cadastrarMembro(membroDTO $membroDTO){
            try {
                $cpf = $membroDTO -> getCpf();
                $nome = $membroDTO -> getNome();
                $email = $membroDTO -> getEmail();
                $usuario = $membroDTO -> getUsuario();
                $senha = $membroDTO -> getSenha();
                $perfil = $membroDTO -> getPerfil();
                $genero = $membroDTO -> getGenero();
                $datanasc = $membroDTO -> getDatanasc();
    
                $bd = new conexao();
                $conexao = $bd -> getConexao();
                $sql1 = $conexao -> prepare("insert into usuario (user, pass, perfil_idperfil) values(?, ?, ?)");
                $sql1 -> bind_param('ssi', $usuario, $senha, $perfil);
                $sql1 -> execute();
    
                $ultimoID = $conexao -> insert_id;
                $sql2 = $conexao -> prepare("insert into membro values(? , ?, ?, ? , ? ,?)");
                $sql2 -> bind_param('ssssii', $cpf, $nome, $email, $genero, $datanasc, $ultimoID);
                $var = $sql2 -> execute();
    
                return $var;
            } catch (mysqli_sql_exception $er) {
                $erro = $er -> getMessage();
                echo $erro;
            }
        }
        function getMembro(){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("select * from membro");
            return $sql;
            if(!$sql){
                $msg = $conexao -> error;
                return $msg;
            }
        }
        function getUsuario(){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("select * from usuario");
            return $sql;
            if(!$sql){
                $msg = $conexao -> error;
                return $msg;
            }
        }
        function getByCPF($cpf){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("Select * from membro where cpf = '$cpf'");
            $final = $sql -> fetch_assoc();
            if(!$final){
                echo $conexao -> error;
            }else{
                return $final;
            }
        }

        function alterarMembro(membroDTO $membroDTO){
            $cpf = $membroDTO -> getCpf();
            $nome = $membroDTO -> getNome();
            $email = $membroDTO -> getEmail();
            $genero = $membroDTO -> getGenero();
            $datanasc = $membroDTO -> getDatanasc();

            $bd = new conexao();
            $conexao = $bd -> getConexao();
            $sql = $conexao -> query("update membro set nome = '$nome', email = '$email', genero = '$genero', datanasc = '$datanasc' where cpf = '$cpf' ");
            if(!$sql){
                echo $conexao -> error;
            }else{
                return $sql;
            }
        }

        function excluirMembro($cpf){
            $bd = new conexao();
            $conexao = $bd -> getConexao();
            $sql = $conexao -> query("delete from membro where cpf = '$cpf' ");
            if(!$sql){
                echo $conexao -> error;
            }else{
                return $sql;
            }
        }
    }
?>