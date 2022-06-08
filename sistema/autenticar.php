<?php

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

session_cache_expire(120);
$cache_expire = session_cache_expire();

@session_start();
require_once 'conexao.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->prepare("select * from funcionarios where (cpfFuncionario = :usuario or emailFuncionario = :usuario) and senhaCripFuncionario = :senha");

$query->bindValue(":usuario","$usuario");
$query->bindValue(":senha", "$senha_crip");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);
$total_result = @count($result);

if ($total_result > 0) {
    $_SESSION['id_usuario'] = $result[0]['idFuncionario'];
    $_SESSION['nome_usuario'] = $result[0]['nomeFuncionario'];
    $_SESSION['nivel_usuario'] = $result[0]['administradorFuncionario'];
    $_SESSION['foto_usuario'] = $result[0]['fotoFuncionario'];
    echo "<script>window.location='painel';</script>";
}else{
   
    echo "<script>window.alert('Dados incoretos');</script>";
    echo "<script>window.location='index.php';</script>";
    // header('Location:index.php');
    // print_r($_POST);
}


?>