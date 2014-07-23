<?php
/*
* @author Candido Souza
* Projeto: Estudos Potal Code Education - Módulo 03 Php Foundation
* Arquivo: fixture.php
* Linguagem: php
* Data: 17/07/2014
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once ('painel/functions/functionsDb.php');

if(!empty($_SESSION['loginUser'])){
    header('Location: painel/');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4º Projeto php Code Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="painel/css/style.css" type="text/css" rel="stylesheet" />
    <link href="painel/css/bootstrap.css" type="text/css" rel="stylesheet" />
</head>
    <body>
        <div id="body-container">
            <div id="body-content">
                <section class="page container">
                    <div class="row">
                        <div class="page-header">
                            <h1>Administração <small>04 Projeto - Code Education</small></h1>
                        </div>
                            <div class="col-md-6 col-md-offset-3">
                                <?php
                                if (isset($_POST['logar'])) {
                                    $login = $_POST['login'];
                                    $senha = $_POST['senha'];
                                    

                                    if(!$login || !$senha){
                                        echo '<div class="alert alert-danger">Todos os campos devem ser preenchidos!</div>';
                                    }else{
                                        $verificSenha = password_verify($senha, password());
                                        if(($verificSenha == true) && logarsistema($login)){
                                            $_SESSION['loginUser'] = $login;
                                            header('Location: '.$_SERVER['PHP_SELF']);
                                        }else{
                                            echo '<div class="alert alert-danger">Usuário ou senha inválida!</div>';
                                        }
                                    }
                                }
                                ?>
                                <form action="" name="formAdmin" method="post">
                                    <div class="form-group">
                                      <label>Usuário</label>
                                      <input type="text" name="login" class="form-control" placeholder="Usuário">
                                    </div>
                                    <div class="form-group">
                                      <label>Password</label>
                                      <input type="password" name="senha" class="form-control" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" name="logar">Logar</button>
                                    </div>
                                </form>
                                <!--/form-->
                            </div>
                    </div>
                </section>
                <footer class="footer">
                    <p>Administração | 04 Projeto - Code Education</p>
                    <p>&copy Todos os direitos reservados 2014 - <?php echo date('Y');?></p>
                </footer>
                <!--/footer-->
            </div>
        </div>
    </body>
</html>