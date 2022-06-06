<?php

    namespace A; 

    class Funcionario implements CadastroInterface {
        public $nome = 'Tiago';
        public function __get($attr) {
            return $this->$attr;  
        }
    }

    interface CadastroInterface {
        public function salvar();
    }


    namespace B; 

    class Funcionario implements CadastroInterface {
        public $nome = 'Heitor';
        public function __get($attr) {
            return $this->$attr;
        }
    }


    $laura = new \A\Funcionario();
    print_r($laura);
    echo $laura->__get('nome');