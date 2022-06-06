<?php

    namespace A; 

    class Funcionario implements \B\CadastroInterface 
    {
        public $nome = 'Tiago';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_glass_methods(this));
            echo '</pre>';
        }

        public function __get($attr) 
        {
            return $this->$attr;  
        }

        public function salvar()
        {
            echo 'Salvar';
        }

        public function remover()
        {
            echo 'Remover';
        }
    }

    interface CadastroInterface 
    {
        public function salvar();
    }

    namespace B; 

    class Funcionario implements \A\CadastroInterface 
    {
        public $nome = 'Heitor';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_glass_methods(this));
            echo '</pre>';
        }

        public function __get($attr) 
        {
            return $this->$attr;
        }

        public function remover()
        {
            echo 'Remover';
        }

        public function salvar()
        {
            echo 'Salvar';
        }
    }

    interface CadastroInterface
    {
        public function remover();
    }


    $laura = new \A\Funcionario();
    print_r($laura);
    echo $laura->__get('nome');