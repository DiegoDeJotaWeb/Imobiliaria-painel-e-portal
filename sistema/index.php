<?php require_once "conexao.php";
//criar um usuario administrador
$senha_crip = md5('admin');
//echo $senha_crip;

$query = $pdo->query("select * from funcionarios where administradorFuncionario = 'Sim'");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$total_result = @count($result);

// exit();

if ($total_result == 0) {
    $pdo->query("insert into funcionarios(
    nomeFuncionario,   cpfFuncionario,    emailFuncionario,    senhaFuncionario, senhaCripFuncionario,  administradorFuncionario, fotoFuncionario)
    values
    ('admin', '000.000.000-00', 'diego@caipora.com.br', 'admin', '$senha_crip', 'Sim', 'avatar1.png');");
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php echo $nome_site ?></title>
</head>

<body class="bg-dark">
    <section class="vh-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://picsum.photos/1000" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; width:100%" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="autenticar.php" method="POST"> 

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Imobiliaria caipora</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Faça login em sua conta</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="usuario" id="form2Example17" class="form-control form-control-lg" required />
                                            <label class="form-label" for="form2Example17">Email ou CPF</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="senha" name="senha" class="form-control form-control-lg" required />
                                            <label class="form-label" for="senha">Senha</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>

                                        <a class="small text-muted " data-toggle="modal" data-target="#modalRecuperar" href="#">Esqueceu a senha?</a>
                                        <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Não tem uma conta? Registre-se aqui</a></p> -->
                                        <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a> -->
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="modalRecuperarUser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRecuperarUser">Recuperar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="emailRecuperar">Digite seu email cadastrado</label>
                            <input type="email" class="form-control" id="emailRecuperar" name="emailRecuperar" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-dark">Recuperar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>

</html>