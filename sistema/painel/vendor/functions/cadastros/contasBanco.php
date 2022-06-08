<?php

// cadastro de Conta Bancaria


function cadastroContaBancaria()
{
    try {
        require_once './../../../../conexao.php';
        $nomeContaBancaria = $_POST['nomeContaBancaria'];
        $bancoContaBancaria = $_POST['bancoContaBancaria'];
        $contaContaBancaria = $_POST['contaContaBancaria'];
        $agenciaContaBancaria = $_POST['agenciaContaBancaria'];

        echo $nomeContaBancaria . " - " .$bancoContaBancaria  . " - " . $contaContaBancaria  . " - " . $agenciaContaBancaria;
        $stmt = $pdo->prepare("insert into contaBancaria (nomeContaBancaria,bancoContaBancaria,contaContaBancaria,agenciaContaBancaria) values (:nomeContaBancaria,:bancoContaBancaria,:contaContaBancaria,:agenciaContaBancaria)");
        $stmt->execute(array(
            ':nomeContaBancaria'=> $nomeContaBancaria ,
            ':bancoContaBancaria'=> $bancoContaBancaria,
            ':contaContaBancaria'=> $contaContaBancaria,
            ':agenciaContaBancaria'=> $agenciaContaBancaria

        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=contas-banco');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeContaBancaria'])) {
    cadastroContaBancaria();
} else {
    echo 'eroo 1';
}

// apagar conta bancaria

function apagarcadastroContaBancaria()
{
    try {
        require_once './../../../../conexao.php';
        $idContasBancariaApagar = $_POST['contasBancariaApagar'];
        $stmt = $pdo->prepare("DELETE FROM contaBancaria WHERE idContaBancaria = :idContasBancariaApagar;");
        $stmt->bindParam(':idContasBancariaApagar', $idContasBancariaApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=contas-banco');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['contasBancariaApagar'])) {
    apagarcadastroContaBancaria();
} else {
    echo 'eroo 1';
}

// editar conta bancaria

function editarContaBancaria()
{
    try {
        require_once './../../../../conexao.php';
        $contaBancariaNome = $_POST['contaBancariaNome'];
        $contaBancariaBanco = $_POST['contaBancariaBanco'];
        $contaBancariaConta = $_POST['contaBancariaConta'];
        $contaBancariaAgencia = $_POST['contaBancariaAgencia'];

        $idContaBancaria = $_POST['idContaBancaria'];
       echo $idContaBancaria;
       echo $contaBancariaNome;
        $stmt = $pdo->prepare('UPDATE contaBancaria SET nomeContaBancaria = :contaBancariaNome, bancoContaBancaria = :contaBancariaBanco, contaContaBancaria = :contaBancariaConta, agenciaContaBancaria = :contaBancariaAgencia  WHERE idContaBancaria = :idContaBancaria');

        $stmt->execute(array(
            ':idContaBancaria' => $idContaBancaria,
            ':contaBancariaNome' => $contaBancariaNome,
            ':contaBancariaBanco' => $contaBancariaBanco,
            ':contaBancariaConta' => $contaBancariaConta,
            ':contaBancariaAgencia' => $contaBancariaAgencia

        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=contas-banco');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idContaBancaria'])) {
    editarContaBancaria();
} else {
    echo 'eroo 3';
}
