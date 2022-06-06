<?php
    $perfil = $_SESSION['perfil'];
    switch($perfil){
        case 'Coordenador':
            require_once 'dao/membroDAO.php';
            $perfil = $_SESSION['perfil'];
            $membroDAO = new membroDAO();
            $membros = $membroDAO -> getMembro();
            $usuarios = $membroDAO -> getUsuario();
            echo"<div class='table-responsive'>";
                echo"<table class='table table-secundary table-striped table caption-top'>";
                    echo"<caption>Lista de Membros</caption>";
                    echo"<thead class='table-secundary'>";
                        echo"<tr>";
                            echo"<td>CPF</td>";
                            echo"<td>Nome</td>";
                            echo"<td>Email</td>";
                            echo"<td>Gênero</td>";
                            echo"<td>Data de nascimento</td>";
                            echo"<td>ID Usuário</td>";
                            echo"<td>Alterar</td>";
                            echo"<td>Excluir</td>";
                        echo"</tr>";
                    echo"</thead>";
                    echo"<tbody class='table-group-divider'>";
                        foreach($membros as $membro){
                            echo "<div>";
                            echo "<tr>";
                            echo "<td>{$membro['cpf']}</td>";
                            echo "<td>{$membro['nome']}</td>";
                            echo "<td>{$membro['email']}</td>";
                            echo "<td>{$membro['genero']}</td>";
                            echo "<td>{$membro['datanasc']}</td>";
                            echo "<td>{$membro['usuario_id_usuario']}</td>";
                            echo "<td>
                                    <a class='btn btn-warning' href = 'formAlterar.php?cpf={$membro['cpf']}'>Alterar</a>
                                </td>";
                            echo "<td>
                                    <a class='btn btn-danger' href = '../controller/excluirMembro.php?cpf={$membro['cpf']}' onclick='return excluir()'>Excluir</a>
                                </td>";
                            echo "</tr>";
                            echo"</div>";
                        }
                    echo"</tbody>";
                echo"</table>";
                echo"<table class='table table-secundary table-striped table caption-top'>";
                    echo"<caption>Lista de Usuarios</caption>";
                    echo"<thead class='table-secundary'>";
                        echo"<tr>";
                            echo"<td>ID Usuário</td>";
                            echo"<td>Usuário</td>";
                            echo"<td>ID Perfil</td>";
                            echo"<td>Alterar</td>";
                            echo"<td>Excluir</td>";
                        echo"</tr>";
                    echo"</thead>";
                    echo"<tbody class='table-group-divider'>";
                        foreach($usuarios as $usuario){
                            echo "<div>";
                            echo "<tr>";
                            echo "<td>{$usuario['id_usuario']}</td>";
                            echo "<td>{$usuario['user']}</td>";
                            echo "<td>{$usuario['perfil_idperfil']}</td>";
                            echo "<td>
                                    <a class='btn btn-warning' href = 'formAlterar.php?cpf={$membro['cpf']}'>Alterar</a>
                                </td>";
                            echo "<td>
                                    <a class='btn btn-danger' href = '../controller/excluirMembro.php?cpf={$membro['cpf']}' onclick='return excluir()'>Excluir</a>
                                </td>";
                            echo "</tr>";
                            echo"</div>";
                        }
                    echo"</tbody>";
                echo"</table>";
                echo"<script type='javascript'> function excluir(){var ok = confirm('Deseja realmente excluir?'); if(ok){return true;}else{return false;}}";
                    // function excluir(){
                    //     var ok = confirm('Deseja realmente excluir?');
                    //     if(ok){
                    //         return true;
                    //     }else{
                    //         return false;
                    //     }
                    // }
                echo"</script>";
            echo"</div>";
            break;
        case 'Aluno':
            echo"<table class='table table-secundary table-striped table caption-top'>";
                echo"<caption>Grade</caption>";
                echo"<thead class='table-secundary'>";
                    echo"<tr>";
                    echo"<th scope='col'>#</th>";
                    echo"<th scope='col'>Diciplina</th>";
                    echo"<th scope='col'>Professor</th>";
                    echo"<th scope='col'>Local</th>";
                    echo"</tr>";
                echo"</thead>";
                echo"<tbody class='table-group-divider'>";
                    echo"<tr>";
                    echo"<th scope='row'>Manhã</th>";
                    echo"<td>Mark</td>";
                    echo"<td>Otto</td>";
                    echo"<td>@mdo</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<th scope='row'>Tarde</th>";
                    echo"<td>Jacob</td>";
                    echo"<td>Thornton</td>";
                    echo"<td>@fat</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<th scope='row'>Noite</th>";
                    echo"<td colspan='2'>Larry the Bird</td>";
                    echo"<td>@twitter</td>";
                    echo"</tr>";
                echo"</tbody>";
                echo"</table>";
            break;
    }
?>