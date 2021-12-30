<?php
namespace app\controllers;

class Controller {


    public function view($path, $data = []) {
        extract($data);
        $file = dirname(__DIR__)  . '\views\\' . $path;
        require $file;
    }


}
