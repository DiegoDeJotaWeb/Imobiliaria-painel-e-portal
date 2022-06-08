<?php
require_once "./../conexao.php";

// print_r($_POST);

$nome = $_POST['nome_user'];
$foto = $_POST['foto_user'];
$nivel = $_POST['nivel_user'];
$cpf = $_POST['cpf_user'];
$senha = $_POST['senha_user'];
$senha_crip = md5($senha);
$email = $_POST['email_user'];
$id = $_POST['id_user'];







//validar email duplicado
$query = $pdo->query("select * from usuarios where emailUsuario = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_res = @count($res);
if ($total_res > 0 and $res[0]['idUsuario'] != $id) {
    echo "Email já cadastrado, escolha outro!";
    exit();
}


//validar cpf duplicado
$query = $pdo->query("select * from usuarios where cpfUsuario = '$cpf'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_res = @count($res);
if ($total_res > 0 and $res[0]['idUsuario'] != $id) {
    echo "CPF já cadastrado, escolha outro!";
    exit();
}


// Subir foto para o servidor 
$nome_img = date('d-m-Y H:i:s') . '-' . @$_FILES['foto'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);

$caminho = 'images/perfil/' . $nome_img;

$imagem_temp = @$_FILES['foto']['temp_name'];

if (@$_FILES['foto']['name'] != "") {
    $ext = pathinfo($nome_img, PATHINFO_EXTENSION);
    if ($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif') {
        if (@$_FILES['foto']['name'] != "") {
            if ($foto != "sem-perfil.jpg") {
                @unlink('images/perfil/' . $foto);
            }
            $foto = $nome_img;
        }
        move_uploaded_file($imagem_temp, $caminho);
    }else{
        echo "Extesão de imagem não permitida!";
        exit();
    }
}

$query = $pdo->prepare("UPDATE usuarios SET nome = :nomeUsuario, email = :email, senha = :senha,senha_crip = :senha_crip, cpf = :cpf, foto = '$foto' WHERE id = '$id'");

$query->bindValue(':nome','$nome');
$query->bindValue(':email','$email');
$query->bindValue(':senha','$senha');
$query->bindValue(':senha_crip','$senha_crip');
$query->bindValue(':cpf','$cpf');
$query->bindValue(':','$');





//alterar registro
$query = $pdo->query("select * from usuarios where idUsuario = $id;");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_res = @count($res);
if ($total_res > 0 and $res[0]['idUsuario'] = $id) {

    $alterar = $pdo->query("UPDATE usuarios SET nomeUsuario='$nome', cpfUsuario='$cpf', emailUsuario='$email', senhaUsuario='$senha', senhaUsuarioCrip='$senha_crip'  WHERE idUsuario=$id");
    $alterar->fetchAll(PDO::FETCH_ASSOC);
}
