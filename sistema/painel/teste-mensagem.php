

<?php
require_once "./../conexao.php"; 

$query = $pdo->query("SELECT *
FROM mensagens
INNER JOIN funcionarios
ON mensagens.idDestinatario where funcionarios.idFuncionario = 2;");


//SELECT SUM(tempo) from manutencao where DATE(Data) BETWEEN DATE('{$data_inicial}') AND DATE('{$data_final}') AND TIME(Data) BETWEEN time('05:00:00') AND TIME('13:30:00');

while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
    $data = $linha['dataMensagem'];

    // intervalo entre dois periodos
    $entrada = new DateTime('09:00');
    $saida = new DateTime('20:00');
    $intervalo = $saida->diff($entrada);
    print_r($intervalo);
    
    $agora = new DateTime('now');
    $ontem = new DateTime('yesterday');
    $dia15 = new DateTime('2019-03-15');
    $teste = new DateTime($data);
echo '-<pre>';
print_r($ontem);
echo '</pre>-';

$data1 = new DateTime('24-05-2022');
$data2 = new DateTime('25-05-2022');

if($data2 > $data1){
    print_r($data1);
}else{
    print_r($data2);
}

if($teste > $ontem){
    echo 'foi';
}else{
    echo 'não foi';
}

// echo $data->format('d/m/Y H:i');
// $data = new DateTime('first day of this month');
// $data->modify("next month");
// print_r($data);

    echo "<p>Nome do remetente: {$linha['nomeFuncionario']}</p>";
    echo "<p>Assunto: {$linha['assuntoMensagem']}</p>";
    echo "<p>{$linha['mensagemMensagem']}</p>";
    echo "<p>{$linha['idRemetente']}</p>";
    echo "<p>{$linha['idDestinatario']}</p>";
    echo "<p>Data: {$linha['dataMensagem']} </p>";
 echo 'teste';

    $query1 = $pdo->query("SELECT nomeFuncionario FROM funcionarios where idFuncionario =  {$linha['idDestinatario']} ");
 
    while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)){

    echo "<p>{$linha1['nomeFuncionario']}</p> <hr>";
    
    }
}

?>