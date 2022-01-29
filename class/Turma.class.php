<?php

class Turma extends Aluno {

    public $professor;

    public $sala;



    function __construct($nome,$matricula,$professor,$sala){

        parent::__construct($nome,$matricula);

        $this->professor = $professor;

        $this->sala = $sala;

    }



    function verStatusTurma(){

        return "O nome do professor é: {$this->professor}";

    }



}