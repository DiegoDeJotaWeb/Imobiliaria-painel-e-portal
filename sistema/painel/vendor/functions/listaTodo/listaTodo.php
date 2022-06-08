<?php

// cadastro de cargos


function cadastroItemTodo()
{
    try {
        require_once './../../../../conexao.php';
        $itemTudo = $_POST['itemTudo'];
        $idFuncionario = $_POST['idFuncionario'];
       
        $stmt = $pdo->prepare("insert into listaTodo (itemListaTodo,statusListaTodo,idFuncionario) values (:itemTudo,'n',:idFuncionario)");

        
        $stmt->execute(array(
            ':itemTudo' => $itemTudo,
            ':idFuncionario' => $idFuncionario
        ));

        print_r($stmt);
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['itemTudo'])) {
    cadastroItemTodo();
} else {
    echo 'eroo 1';
}