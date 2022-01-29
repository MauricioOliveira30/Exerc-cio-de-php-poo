<?php
class Aluno
{
    public $nome;
    public $matricula;
    function __construct($nome,$matricula){

        $this->nome = $nome;

        $this->matricula = $matricula;

    }

    function verStatus(){

        return "O nome do Aluno é{$this->nome}<br>
        A matricula do Aluno é {$this->matricula}";

    }

}


