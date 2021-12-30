<?php
namespace app\controllers;
use libs\DB;
use app\models\ToDo;
class HomeController extends Controller {

    public function  __construct() {
        $this->todo = new ToDo();
    }

    public function showPost() {
        $posts = $this->todo->getData();
//        var_dump($posts);
        $this->view('main.php', ['posts' => $posts]);
    }

    public function deletePost($param) {
        $posts = $this->todo->deleteData($param['id']);

    }



}