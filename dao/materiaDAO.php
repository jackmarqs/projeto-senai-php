<?php
    require_once '../dto/materiaDTO.php';
    require_once 'conexao/conexao.php';
    class materiaDAO{
        function cadastrarMateria(materiaDTO $materiaDTO){
            $id = $materiaDTO -> getId();
            $diciplina = $materiaDTO -> getDiciplina();
            $turno = $materiaDTO -> getTurno();
            $professor = $materiaDTO -> getProfessor();

            //Ligação com banco de dados
            $banco = new mysqli("localhost", "root", "", "projetophp");
            $cadastro = $banco -> query("insert into materia values('$id', '$diciplina', '$turno', '$professor')");
            if(!$cadastro){
                echo "<script>
                        document.alert('Esse CPF já consta na nossa base dados!')
                        widoe.location = '../view/formMateria.php'
                    </script>";
            }
            return $cadastro;
        }

        function getMateria(){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("select * from materia");
            return $sql;
            if(!$sql){
                $msg = $conexao -> error;
                return $msg;
            }
        }

        function getByID($id){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("select * from materia where ID = '$id'");
            $final = $sql -> fetch_assoc();
            if(!$final){
                echo $conexao -> error;
            }else{
                return $final;
            }
        }
        function getGrade($cpf){
            $banco = new conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("select * from grade where cpf = '$cpf'");
            return $sql;
            if(!$sql){
                $msg = $conexao -> error;
                return $msg;
            }
        }
        function alterarMateria(materiaDTO $materiaDTO){
            $id = $materiaDTO -> getId();
            $diciplina = $materiaDTO -> getDiciplina();
            $turno = $materiaDTO -> getTurno();
            $professor = $materiaDTO -> getProfessor();

            $bd = new conexao();
            $conexao = $bd -> getConexao();
            $sql = $conexao -> query("update materia set diciplina = '$diciplina', turno = '$turno', professor = '$professor' where ID = '$id' ");
            if(!$sql){
                echo $conexao -> error;
            }else{
                return $sql;
            }
        }

        function excluirMateria($id){
            $bd = new conexao();
            $conexao = $bd -> getConexao();
            $sql = $conexao -> query("delete from materia where ID = '$id' ");
            if(!$sql){
                echo $conexao -> error;
            }else{
                return $sql;
            }
        }
    }
?>