<?php
namespace libs;
use app\controllers\Controller;

class Router {
    private $routeTable = [];
    private $currentRoute = null;

    public function register($method, $pattern, $dest = []) {
        if (!is_array($dest)){
            $dest = [$dest];
        }
        $method = strtolower($method);
        $this->routeTable[$method][$pattern] = [
            'controller' => $dest[0],
            'action' => $dest[1] ?? 'index'

        ];
    }

    public function matching() {
        $url = parse_url($_SERVER['REQUEST_URI']);
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $path = $url['path'];
        $score = [];
        foreach ($this->routeTable[$method] as $pattern => $controller) {
            $score[] = $this->getScore($path, $pattern); //loi ra pattern,, tinh diem
        }

        usort($score, function ($a, $b){

           if($a['score']=== $b['score']){
               return count($a['param'])< count($b['param']);
           }
           return $a['score'] < $b['score'];
        });

        $this->currentRoute = $this->routeTable[$method][$pattern];
        $this->currentRoute['param'] = $score[0]['param'];
    }
    public function dispatch() {
        if($this->getRoute()) {
            $controller = $this ->currentRoute['controller'];
            if(class_exists($controller)){
                $controller = new $controller;
                $action = $this->currentRoute['action'];
                if(is_callable([$controller, $action])){
                    call_user_func_array([$controller, $action], [$this->currentRoute['param']]);
                }
            }
        }
    }

    public function getRoute(){
        $this->matching();
        return $this->currentRoute;
    }

    public function getRouteTable() {
        return $this->routeTable;
    }

    public function getScore($url, $path) {
        $url_server = explode('/', $url);
        $my_path = explode('/', $path);
        if(count($url_server) != count($my_path)){
            return ['score' => 0, 'param' => 0, 'pattern' => $path];
        }

        $score = 0;
        $param = [];
        foreach ($my_path as $key => $path) {
            if($url_server[$key]== $path ){
                $score+=1;
            }else{
                $convert = $this->convertParam($path);
                if($convert){
                    $param[$convert]= $url_server[$key];
                }
            }
        }

        return ['score' => $score, 'param' => $param, 'pattern' => $path];
    }

    public function convertParam($value){
        $start = substr($value, 0,1);
        $end = substr($value, -1, 1);
        if ($start == '{' && $end == '}'){
            return str_replace(['{', '}' ], ' ', $value); //thay {} bang khoang trong string value
        }
        return '';


    }
}
