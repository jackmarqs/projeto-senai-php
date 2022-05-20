<?php
    require_once '../dto/clienteDTO.php';
    require_once 'conexao/conexao.php';
    class clienteDAO{
        function cadastrarCliente(clienteDTO $clienteDTO){
            $nome = $clienteDTO -> getNome();
            $cpf = $clienteDTO -> getCpf();
            $email = $clienteDTO -> getEmail();
            $genero = $clienteDTO -> getGenero();
            $datanasc = $clienteDTO -> getDatanasc();

            //Ligação com banco de dados
            $banco = new mysqli("localhost", "root", "", "projetophp");
            $cadastro = $banco -> query("insert into cliente values('$cpf', '$nome', '$email', '$genero', '$datanasc')");
            if(!$cadastro){
                echo "<script>
                        document.alert('Esse CPF já consta na nossa base dados!')
                        widoe.location = '../view/formCadastrar.php'
                    </script>";
            }
            return $cadastro;
        }

        function getCliente(){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("select * from cliente");
            return $sql;
            if(!$sql){
                $msg = $conexao -> error;
                return $msg;
            }
        }

        function getByCPF($cpf){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("Select * from cliente where cpf = '$cpf'");
            $final = $sql -> fetch_assoc();
            if(!$final){
                echo $conexao -> error;
            }else{
                return $final;
            }
        }
    }
?>