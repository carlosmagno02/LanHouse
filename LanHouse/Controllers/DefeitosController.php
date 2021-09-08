<?php

namespace LanHouse\Controllers;

class DefeitosController
{
    public function index()
    {
        if(isset($_SESSION['login'])){
            if(isset($_POST['defeitos'])){
                $data = $_POST['data'];
                $equipamento = $_POST['equipamento'];
                $defeito = $_POST['defeito'];
                $descricao = $_POST['descricao'];

                if($_POST['data'] == ''){
                    \LanHouse\Utilidades::alerta('Adicione uma data');
                    // \LanHouse\Utilidades::redirect(INCLUDE_PATH);
                }else if($_POST['descricao'] == ''){
                    \LanHouse\Utilidades::alerta('Adicione uma descricao');
                    \LanHouse\Utilidades::redirect(INCLUDE_PATH);
                }else{
                    $relatorio = \LanHouse\MySql::connect()->prepare("INSERT INTO registro VALUES(null,?,?,?,?)");
                    $relatorio->execute(array($data,$equipamento, $defeito, $descricao));
                    \LanHouse\Utilidades::alerta('Cadastrado com sucesso');
                }                
            }
            
            \LanHouse\Views\MainView::render('defeitos');
        }else{
            \LanHouse\Utilidades::redirect(INCLUDE_PATH);
        }
    }
}
