<?php 
    class materiaDTO{
        private $id;
        private $diciplina;
        private $turno;
        private $professor;

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;
                return $this;
        }

        public function getDiciplina()
        {
                return $this->diciplina;
        }

        public function setDiciplina($diciplina)
        {
                $this->diciplina = $diciplina;

                return $this;
        }

        public function getTurno()
        {
                return $this->turno;
        }

        public function setTurno($turno)
        {
                $this->turno = $turno;

                return $this;
        }

        public function getProfessor()
        {
                return $this->professor;
        }

        public function setProfessor($professor)
        {
                $this->professor = $professor;

                return $this;
        }
    }
?>