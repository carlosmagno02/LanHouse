<?php

    namespace LanHouse\Views;

    class MainView{
        public static function render($filename){
            include("pages/$filename.php");
        }
    }

?>