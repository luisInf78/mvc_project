<?php
require_once './models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAll();
        include './views/users/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->userModel->create($name, $email);
            header('Location: index.php');
        } else {
            include './views/users/create.php';
        }
    }
}

