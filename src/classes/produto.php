<?php

    class Produto {

        private $titulo, $descritivo, $valor, $imagem;

        function __construct ($t, $d, $v, $i) {
            $this->setTitulo ($t);
            $this->setDescritivo ($d);
            $this->setValor ($v);
            $this->setImagem ($i);
        }

        public function setTitulo ($t) {
            $this->titulo = $t;
        }

        public function getTitulo () {
            return $this->titulo;
        }

        public function setDescritivo ($d) {
            $this->descritivo = $d;
        }

        public function getDescritivo () {
            return $this->descritivo;
        }

        public function setValor ($v) {
            $this->valor = $v;
        }

        public function getValor () {
            return $this->valor;
        }

        public function setImagem ($i) {
            $this->imagem = $i;
        }

        public function getImagem () {
            return $this->imagem;
        }
    }
?>