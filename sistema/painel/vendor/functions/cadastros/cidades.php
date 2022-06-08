<?php

// cadastro de cargos


function cadastroCidades()
{
    try {
        require_once './../../../../conexao.php';
        $nomeCidade = $_POST['cidadeNome'];
        $statusCidade = $_POST['statusCidade'];

        echo $nomeCidade;
        echo $statusCidade;

        $stmt = $pdo->prepare("insert into cidade (nomeCidade,statusCidade) values (:nomeCidade,:statusCidade)");
        $stmt->execute(array(
            ':nomeCidade' => $nomeCidade,
            ':statusCidade' => $statusCidade
        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=cidades');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['cidadeNome'])) {
    cadastroCidades();
} else {
    echo 'eroo 1';
}




// apagar de cidade

function apagarCidade()
{
    try {
        require_once './../../../../conexao.php';
        $idCidadeApagar = $_POST['cidadeApagar'];
        $stmt = $pdo->prepare("DELETE FROM cidade WHERE idCidade = :idCidadeApagar;");
        $stmt->bindParam(':idCidadeApagar', $idCidadeApagar);
        $stmt->execute();
        // echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=cidades');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['cidadeApagar'])) {
    apagarCidade();
} else {
    echo 'eroo 1';
}



// editar cidade

function editarCidade()
{
    try {
        require_once './../../../../conexao.php';
        $nomeCidade = $_POST['nomeCidade'];
        $idCidade = $_POST['idCidade'];
        $statusCidade = $_POST['statusCidade'];
        // echo $nomeCidade . '' . $statusCidade;
        $stmt = $pdo->prepare('UPDATE cidade SET nomeCidade = :nomeCidade, statusCidade = :statusCidade WHERE idCidade = :idCidade');

        $stmt->execute(array(
            ':idCidade' => $idCidade,
            ':nomeCidade' => $nomeCidade,
            ':statusCidade' => $statusCidade

        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=cidades');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeCidade'])) {
    editarCidade();
} else {
    echo 'eroo 4';
}
