<?php

// cadastro de Funcionario


function cadastroFuncionario()
{
    try {
        require_once './../../../../conexao.php';
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
        $nomeFuncionario = $_POST['nomeFuncionario'];
        $cpfFuncionario =  $_POST['cpfFuncionario'];
        $emailFuncionario =  $_POST['emailFuncionario'];
        $telefoneFuncionario =  $_POST['telefoneFuncionario'];
        $dataAdmissaoFuncionario =  $_POST['dataAdmissaoFuncionario'];
        $cargoFuncionario =  $_POST['cargoFuncionario'];
        $creciFuncionario =  $_POST['creciFuncionario'];
        $bancoFuncionario =  $_POST['bancoFuncionario'];
        $tipoFuncionario =  $_POST['tipoFuncionario'];
        $agenciaFuncionario =  $_POST['agenciaFuncionario'];
        $contaFuncionario =  $_POST['contaFuncionario'];
        $pixFuncionario =  $_POST['pixFuncionario'];
        $enderecoFuncionario =  $_POST['enderecoFuncionario'];
        $administradorFuncionario =  $_POST['administradorFuncionario'];
      
        $senhaFuncionario = $_POST['senhaFuncionario'];
        $senhaCripFuncionario =  md5($senhaFuncionario);
        echo $senhaFuncionario;
        echo $senhaCripFuncionario;
        $obsFuncionario =  $_POST['obsFuncionario'];

        // echo $nomeFuncionario;
        // // echo $cpfFuncionario;
        // echo $dataAdmissaoFuncionario;



        date_default_timezone_set("Etc/GMT-8");

        if (isset($_POST['nomeFuncionario'])) {
            // setando a foto do tipo de imovel
            $file_name_foto = $_FILES['fotoFuncionario']['name'];
            $file_temp_foto = $_FILES['fotoFuncionario']['tmp_name'];
            $file_size_foto = $_FILES['fotoFuncionario']['size'];
            $file_type_foto = $_FILES['fotoFuncionario']['type'];
            $date_uploaded = date("Y-m-d");
            $location = "./../../../images/funcionarios/" . $file_name_foto;



            if ($file_size_foto != 0) {
                // if(move_uploaded_file($file_temp_foto, $location) && move_uploaded_file($file_temp_ficha, $location)){

                move_uploaded_file($file_temp_foto, $location);
                try {
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $pdo->prepare("insert into funcionarios (
                    nomeFuncionario,
                    cpfFuncionario,
                    emailFuncionario,
                    telefoneFuncionario,
                    dataAdmissaoFuncionario,
                    cargoFuncionario,
                    creciFuncionario,
                    bancoFuncionario,
                    tipoFuncionario,
                    agenciaFuncionario,
                    contaFuncionario,
                    pixFuncionario,
                    enderecoFuncionario,
                    administradorFuncionario,
                    fotoFuncionario,
                    senhaFuncionario,
                    senhaCripFuncionario,
                    obsFuncionario
                    
                    ) values (
                        
                        :nomeFuncionario,
                        :cpfFuncionario,
                        :emailFuncionario,
                        :telefoneFuncionario,
                        :dataAdmissaoFuncionario,
                        :cargoFuncionario,
                        :creciFuncionario,
                        :bancoFuncionario,
                        :tipoFuncionario,
                        :agenciaFuncionario,
                        :contaFuncionario,
                        :pixFuncionario,
                        :enderecoFuncionario,
                        :administradorFuncionario,
                        :fotoFuncionario,
                        :senhaFuncionario,
                        :senhaCripFuncionario,
                        :obsFuncionario
                        )");
                    $stmt->execute(array(

                        // ':fotoTipoImovel' => $file_name_foto,
                        // ':fotoFichaTipoImovel' => $file_name_ficha

                        ':nomeFuncionario' =>   $nomeFuncionario,
                        ':cpfFuncionario' =>  $cpfFuncionario,
                        ':emailFuncionario' =>  $emailFuncionario,
                        ':telefoneFuncionario' =>  $telefoneFuncionario,
                        ':dataAdmissaoFuncionario' => $dataAdmissaoFuncionario,
                        ':cargoFuncionario' =>  $cargoFuncionario,
                        ':creciFuncionario' =>  $creciFuncionario,
                        ':bancoFuncionario' =>  $bancoFuncionario,
                        ':tipoFuncionario' =>  $tipoFuncionario,
                        ':agenciaFuncionario' =>  $agenciaFuncionario,
                        ':contaFuncionario' =>  $contaFuncionario,
                        ':pixFuncionario' =>  $pixFuncionario,
                        ':enderecoFuncionario' =>  $enderecoFuncionario,
                        ':administradorFuncionario' =>  $administradorFuncionario,
                        ':senhaFuncionario' =>  $senhaFuncionario,
                    ':senhaCripFuncionario' =>  $senhaCripFuncionario,
                        ':fotoFuncionario' => $file_name_foto,
                        ':obsFuncionario' =>  $obsFuncionario
                    ));
                    // header('Location:../../../index.php?pagina=tipos-imoveis');
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

if (isset($_POST['nomeFuncionario'])) {
    cadastroFuncionario();
} else {
    echo 'eroo 1';
}





function apagarFuncionarios()
{
    try {
        require_once './../../../../conexao.php';
        $idFuncionarioApagar = $_POST['idFuncionarioApagar'];
     
        print_r($idFuncionarioApagar);


        $stmt = $pdo->prepare("DELETE FROM funcionarios WHERE idFuncionario = :idFuncionarioApagar;");
        $stmt->bindParam(':idFuncionarioApagar', $idFuncionarioApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=funcionarios');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}


if (isset($_POST['idFuncionarioApagar'])) {
    apagarFuncionarios();
} else {
    echo 'eroo 2';
}









// editar conta bancaria

function editarFuncionario()
{
    try {
        require_once './../../../../conexao.php';
        $funcionarioId = $_POST['funcionarioId'];
        $funcionarioNome = $_POST['funcionarioNome'];
        $funcionarioCpf =  $_POST['funcionarioCpf'];
        $funcionarioEmail =  $_POST['funcionarioEmail'];
        $funcionarioTelefone =  $_POST['funcionarioTelefone'];
        $funcionarioDataAdmissao =  $_POST['funcionarioDataAdmissao'];
        $funcionarioCargo =  $_POST['funcionarioCargo'];
        $funcionarioCreci =  $_POST['funcionarioCreci'];
        $funcionarioBanco =  $_POST['funcionarioBanco'];
        $funcionarioTipo =  $_POST['funcionarioTipo'];
        $funcionarioAgencia =  $_POST['funcionarioAgencia'];
        $funcionarioConta =  $_POST['funcionarioConta'];
        $funcionarioPix =  $_POST['funcionarioPix'];
        $funcionarioEndereco =  $_POST['funcionarioEndereco'];
        $funcionarioAdministrador =  $_POST['funcionarioAdministrador'];
        $funcionarioSenha = $_POST['funcionarioSenha'];
        $funcionarioSenhaCrip =  md5($funcionarioSenha);
        
        $funcionarioObs =  $_POST['funcionarioObs'];
print_r($_POST);
        
        
        $stmt = $pdo->prepare('UPDATE funcionarios SET 
        nomeFuncionario = :funcionarioNome,
        cpfFuncionario = :funcionarioCpf,
        emailFuncionario = :funcionarioEmail,
        telefoneFuncionario = :funcionarioTelefone,
        dataAdmissaoFuncionario= :funcionarioDataAdmissao,
        cargoFuncionario =  :funcionarioCargo,
        creciFuncionario = :funcionarioCreci,
        bancoFuncionario = :funcionarioBanco,
        tipoFuncionario = :funcionarioTipo,
        agenciaFuncionario = :funcionarioAgencia,
        contaFuncionario =  :funcionarioConta,
        pixFuncionario =  :funcionarioPix,
        enderecoFuncionario =  :funcionarioEndereco,
        administradorFuncionario = :funcionarioAdministrador,
        senhaFuncionario = :funcionarioSenha,
        senhaCripfuncionario = :funcionarioSenhaCrip,
        
        obsFuncionario =  :funcionarioObs
        WHERE idFuncionario = :funcionarioId');


        $stmt->execute(array(     
            ':funcionarioId' => $funcionarioId,       
            ':funcionarioNome' => $funcionarioNome,
            ':funcionarioCpf' => $funcionarioCpf,
            ':funcionarioEmail' => $funcionarioEmail,
            ':funcionarioTelefone' => $funcionarioTelefone,
            ':funcionarioDataAdmissao' => $funcionarioDataAdmissao,
            ':funcionarioCargo' =>  $funcionarioCargo,
            ':funcionarioCreci' => $funcionarioCreci,
            ':funcionarioBanco' => $funcionarioBanco,
            ':funcionarioTipo' => $funcionarioTipo,
            ':funcionarioAgencia' => $funcionarioAgencia,
            ':funcionarioConta' =>  $funcionarioConta,
            ':funcionarioPix' =>  $funcionarioPix,
            ':funcionarioEndereco' =>  $funcionarioEndereco,
            ':funcionarioAdministrador' => $funcionarioAdministrador,
            ':funcionarioSenha' => $funcionarioSenha,
            ':funcionarioSenhaCrip' => $funcionarioSenhaCrip,
            ':funcionarioObs' =>  $funcionarioObs         



        ));
      
        echo $stmt->rowCount();
        // header('Location:../../../index.php?pagina=funcionarios');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['funcionarioNome'])) {
    editarFuncionario();
} else {
    echo 'eroo 3';
}
