<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require('./inc/Config.inc.php');
$aluno=new Aluno('Maurício','1813331048');
echo $aluno->verStatus();
echo"<hr>";
$alunoTurma=new Turma('Maurício','1813331048','Juan','1001');
echo $alunoTurma-> verStatusTurma();
$alunoPagamento=new Pagamento('Maurício','1813331048','1500','21/02/2021');
echo $alunoPagamento-> verStatusPagamento();
?>
</body>
</html>