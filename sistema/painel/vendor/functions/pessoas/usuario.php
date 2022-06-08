<?php

// cadastro de cargos


function cadastroTipoImovels()
{
    try {
        require_once './../../../../conexao.php';
        $imovel = $_POST['imovel'];

        date_default_timezone_set("Etc/GMT-8");

        if (isset($_POST['imovel'])) {
            // setando a foto do tipo de imovel
            $file_name_foto = $_FILES['fileNomeTipo']['name'];
            $file_temp_foto = $_FILES['fileNomeTipo']['tmp_name'];
            $file_size_foto = $_FILES['fileNomeTipo']['size'];
            $file_type_foto = $_FILES['fileNomeTipo']['type'];
            $date_uploaded = date("Y-m-d");
            $location = "./../../../images/tipo-de-imoveis/" . $file_name_foto;

            // setando a foto ficha 
            $file_name_ficha = $_FILES['fileNomeTipoFicha']['name'];
            $file_temp_ficha = $_FILES['fileNomeTipoFicha']['tmp_name'];
            $file_size_ficha = $_FILES['fileNomeTipoFicha']['size'];
            $file_type_ficha = $_FILES['fileNomeTipoFicha']['type'];
            $date_uploaded = date("Y-m-d");
            $location1 = "./../../../images/tipo-de-imoveis/" . $file_name_ficha;

            if ($file_size_foto != 0) {
                // if(move_uploaded_file($file_temp_foto, $location) && move_uploaded_file($file_temp_ficha, $location)){

                move_uploaded_file($file_temp_foto, $location);
                move_uploaded_file($file_temp_ficha, $location1);
                try {
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $pdo->prepare("insert into tipoImovel (nomeTipoImovel,fotoTipoImovel,fotoFichaTipoImovel) values (:nomeTipoImovel,:fotoTipoImovel,:fotoFichaTipoImovel)");
                    $stmt->execute(array(
                        ':nomeTipoImovel' => $imovel,
                        ':fotoTipoImovel' => $file_name_foto,
                        ':fotoFichaTipoImovel' => $file_name_ficha
                    ));
                    header('Location:../../../index.php?pagina=tipos-imoveis');
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $pdo = null;
            }
        }
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['imovel'])) {
    cadastroTipoImovels();
} else {
    echo 'eroo 4';
}

// apagar de tipo de imovel

function apagarTipoImovel()
{
    try {
        require_once './../../../../conexao.php';
        $idTipoImovelApagar = $_POST['tipoImovelApagar'];
        $stmt = $pdo->prepare("DELETE FROM tipoImovel WHERE idTipoImovel = :idTipoImovelApagar;");
        $stmt->bindParam(':idTipoImovelApagar', $idTipoImovelApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=tipos-imoveis');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['tipoImovelApagar'])) {
    apagarTipoImovel();
} else {
    echo 'eroo 1';
}
