<?php
namespace app\controllers;
use libs\DB;
use app\models\ToDo;
class HomeController extends Controller {
    public function showPost() {
        $todo = new ToDo();
        $posts = $todo->getData();
//        var_dump($posts);
        $this->view('main.php', ['posts' => $posts]);
    }

    public function deletePost($id) {
        $todo = new ToDo();
        $posts = $todo->deleteData($id);
    }



}