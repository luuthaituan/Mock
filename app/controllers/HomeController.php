<?php
namespace app\controllers;
use http\Header;
use libs\DB;
use app\models\ToDo;
class HomeController extends Controller {

    public function  __construct() {
        $this->todo = new ToDo();
    }

    public function showPost() {
        $posts = $this->todo->getData();
        $this->view('main.php', ['posts' => $posts]);
    }

    public function deletePost($param) {
        $posts = $this->todo->deleteData($param['id']);
        header('Location: /todo');
    }

    public function showViewAdd() {
        $this->view('add.php');
    }

    public function addPost() {
        $congviec = $_POST["congviec"];
        $ngaylam = $_POST['ngaylam'];
        $trangthai = $_POST['trangthai'];
        $add = $this->todo->prepare("INSERT INTO ToDo VALUES ($congviec, $ngaylam, $trangthai)");
        $add -> execute();
//        var_dump($add);
        header('Location: /todo');
    }
}