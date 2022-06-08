<?php


// cadastro de cargos


function cadastroMensagem()
{
    try {
        require_once './../../../../conexao.php';
        $paraQuem = $_POST['paraQuem'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        $idUsuario = $_POST['idUsuario'];

        echo $paraQuem;
        echo  "<br>";
echo $assunto;
echo  "<br>";
echo $mensagem;
echo  "<br>";
echo $idUsuario ;
echo  "<br>";
      

        $stmt = $pdo->prepare("insert into mensagens (assuntoMensagem,mensagemMensagem,idRemetente,idDestinatario,dataMensagem) values (:assunto,:mensagem,:paraQuem,$idUsuario,now())");
      
        $stmt->execute(array(
            ':assunto' => $assunto,
            ':mensagem' => $mensagem,
            ':paraQuem' => $paraQuem
            
            

        ));
        echo $stmt->rowCount();
        // header('Location:../../../index.php?pagina=cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['paraQuem'])) {
    cadastroMensagem();
} else {
    echo 'eroo 1';
}


// apagar de bairro

function apagarMensagem()
{
    try {
        require_once './../../../../conexao.php';
        $idMensagem = $_GET['idMsgApagar'];
        echo $idMensagem;
        $stmt = $pdo->prepare("DELETE FROM mensagens WHERE idMensagem = :idMensagem;");
        $stmt->bindParam(':idMensagem', $idMensagem);
        $stmt->execute();
        // echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=caixa-de-entrada');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_GET['idMsgApagar'])) {
    apagarMensagem();
} else {
    echo 'eroo 2';
}