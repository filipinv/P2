<?php

    class Cliente {

        private $nome, $email, $senha, $telefone;

        function __construct ($n, $e, $s, $f) {
            $this->setNome  ($n);
            $this->setEmail ($e);
            $this->setSenha ($s);
            $this->setFone ($f);
        }
        
        public function setNome ($n) {
            $this->nome = $n;
        }

        public function getNome () {
            return $this->nome;
        }

        public function setEmail ($e) {
            $this->email = $e;
        }

        public function getEmail () {
            return $this->email;
        }

        public function setSenha ($s) {
            $this->senha = $s;
        }

        public function getSenha () {
            return $this->senha;
        }

        public function setFone ($f) {
            $this->telefone = $f;
        }

        public function getFone () {
            return $this->telefone;
        }

    }

?>