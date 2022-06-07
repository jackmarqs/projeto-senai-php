<?php
    require_once '../dao/materiaDAO.php';
    require_once '../dto/materiaDTO.php';

    $id = $_POST['ID'];
    $diciplina = $_POST['diciplina'];
    $turno = $_POST['turno'];
    $professor = $_POST['professor'];

    $materiaDTO = new materiaDTO();
    $materiaDTO -> setId($id);
    $materiaDTO -> setDiciplina($diciplina);
    $materiaDTO -> setTurno($turno);
    $materiaDTO -> setProfessor($professor);

    $materiaDAO = new materiaDAO();
    $ok = $materiaDAO -> alterarMateria($materiaDTO);
    if($ok){
        echo "<script>
                alert('Alterado com sucesso!');
                window.location = '../view/listar.php';
            </script>";
    }else{
        echo "Não funfou";
    }
?>