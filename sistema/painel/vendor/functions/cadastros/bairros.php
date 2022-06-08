<?php

// cadastro de bairros


function cadastroBairro()
{
    try {
        require_once './../../../../conexao.php';
        $nomeBairro = $_POST['nomeBairro'];
        $statusBairro = $_POST['statusBairro'];

        echo $nomeBairro . '" "' .  $statusBairro;
        $stmt = $pdo->prepare("insert into bairro (nomeBairro,statusBairro) values (:nomeBairro,:statusBairro)");
        $stmt->execute(array(
            ':nomeBairro' => $nomeBairro,
            ':statusBairro' => $statusBairro
        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=bairros');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeBairro'])) {
    cadastroBairro();
} else {
    echo 'eroo 1';
}


// apagar de bairro

function apagarBairro()
{
    try {
        require_once './../../../../conexao.php';
        $idBairroApagar = $_POST['bairroApagar'];
        $stmt = $pdo->prepare("DELETE FROM bairro WHERE idBairro = :idBairroApagar;");
        $stmt->bindParam(':idBairroApagar', $idBairroApagar);
        $stmt->execute();
        // echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=bairros');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['bairroApagar'])) {
    apagarBairro();
} else {
    echo 'eroo 2';
}


// editar bairro

function editarBairro()
{
    try {
        require_once './../../../../conexao.php';
        $nomeBairro = $_POST['bairroNome'];
        $idBairro = $_POST['idBairro'];
        $statusBairro = $_POST['bairroStatus'];
        echo $nomeBairro . ' - ' . $statusBairro;
        $stmt = $pdo->prepare('UPDATE bairro SET nomeBairro = :nomeBairro, statusBairro = :statusBairro WHERE idBairro = :idBairro');

        $stmt->execute(array(
            ':idBairro' => $idBairro,
            ':nomeBairro' => $nomeBairro,
            ':statusBairro' => $statusBairro

        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=bairros');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['bairroNome'])) {
    editarBairro();
} else {
    echo 'eroo 3';
}
