<?php 

namespace LanHouse\Controllers;

class RelatorioController{
    public function index(){
                if(isset($_SESSION['login'])){
                    \LanHouse\Views\MainView::render('relatorio');
                }else{
                    \LanHouse\Utilidades::redirect(INCLUDE_PATH);
                }
            }
        }
