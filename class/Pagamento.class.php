<?php
class Pagamento extends Aluno {

    public $valor;

    public $data;
function __construct($nome,$matricula,$valor,$data){

parent::__construct($nome,$matricula);

$this->valor = $valor;

$this->data = $data;

}



function verStatusPagamento(){

return "<p>Pagamento<br>
Nome: {$this->nome}<br>
Matricula:{$this->matricula}<br>
Valor:{$this->valor}<br>
Data de Vencimento:{$this->data}</p>";

}



}