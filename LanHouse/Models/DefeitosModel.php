<?php

namespace LanHouse\Models;

class DefeitosModel{
    public static function listarEquipamentos() {
        $pdo = \LanHouse\MySql::connect();
        $equipamentos = $pdo->prepare("SELECT * FROM tipo_equipamento");
        $equipamentos->execute();
        return $equipamentos->fetchAll();
    }

    public static function listarDefeitos() {
        $pdo = \LanHouse\MySql::connect();
        $defeitos = $pdo->prepare("SELECT * FROM defeito");
        $defeitos->execute();
        return $defeitos->fetchAll();
    }

    public static function listarRelatorios() {
        $pdo = \LanHouse\MySql::connect();
        $relatorios = $pdo->prepare("SELECT * FROM registro");
        $relatorios->execute();
        return $relatorios->fetchAll();
    }
}

?>