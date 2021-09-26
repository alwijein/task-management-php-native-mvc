<?php

namespace AlwiJaya\TugasBesarWeb\App;

class View {

    public static function render(string $view, $data = []){
        require __DIR__ . '/../View/' . $view . '.php';
    }

    public static function model($model)
    {
        require_once __DIR__ . '/../Model/' . $model . '.php';
        return new $model;
    }

}