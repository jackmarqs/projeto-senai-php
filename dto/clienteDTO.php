<?php 
    class clienteDTO{
        private $nome;
        private $email;
        private $genero;
        private $cpf;
        private $datanasc;

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getGenero()
        {
                return $this->genero;
        }

        public function setGenero($genero)
        {
                $this->genero = $genero;

                return $this;
        }

        public function getCpf()
        {
                return $this->cpf;
        }

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        public function getDatanasc()
        {
                return $this->datanasc;
        }

        public function setDatanasc($datanasc)
        {
                $this->datanasc = $datanasc;

                return $this;
        }
    }
?>