<?php

namespace LanHouse\Controllers;

class LoginController{
    public function index(){

        if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            \LanHouse\Utilidades::redirect(INCLUDE_PATH);
        }

        if(isset($_SESSION["login"])){
            \LanHouse\Utilidades::redirect('defeitos');
        }else{
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $senha = $_POST['senha'];;

                $verifica = \LanHouse\MySql::connect()->prepare("SELECT * FROM usuario WHERE email = ?");
                $verifica->execute(array($email));
                if($verifica->rowCount() == 0){
                    \LanHouse\Utilidades::alerta('Email incorreto');
                    \LanHouse\Utilidades::redirect(INCLUDE_PATH);
                }else{
                    $dados = $verifica->fetch();
                    $senhaBanco = $dados['senha'];
                    if($senha == $senhaBanco){
                        $_SESSION['login'] = $dados['email'];
                        $_SESSION['id'] = $dados['id'];
                        \LanHouse\Utilidades::redirect(INCLUDE_PATH);
                    }else{
                        \LanHouse\Utilidades::alerta('Senha incorreta');
                        \LanHouse\Utilidades::redirect(INCLUDE_PATH);
                    }
                }
            }
        }
        \LanHouse\Views\MainView::render('login');

    }
}


?>