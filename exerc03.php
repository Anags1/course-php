<?php

class Paciente {

    public $sexo = null;
    public $nome = null;
    public $filho = null;
    public $dataNascimento = null;

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getIdade() {
        return date("Y-m-d") - $this->getDataNascimento();
    }

    public function getIdadeCanonico() {
        $dataHoje = new DateTime();
        $dataNascimento = new DateTime($this->getDataNascimento());

        return $dataHoje->diff($dataNascimento)->format("%y");
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setFilho($filho) {
        $this->filho = $filho;
    }

    public function getNome($nome) {
        return $this->nome;
    }

    public function getFilho($filho) {
        return $this->filho;
    }

    public function fichaPaciente() {
        return "O paciente {$this->nome}, do sexo {$this->sexo} tem {$this->getIdade()} anos e {$this->filho} filho.";
    }
}

$paula = new Paciente();
$paula->setNome('Paula');
$paula->setFilho(2);
$paula->setDataNascimento("1991-12-05");

echo $paula->fichaPaciente();
echo '<br />';
echo $paula->getDataNascimento();
echo '<br />';
echo $paula->getIdade();
echo '<br />';
echo $paula->getIdadeCanonico();