<?php 

class Controller{
    public function view($view, $data = [])
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            
        }
        if (!isset($_SESSION['username'])) {
            
            require_once '../app/views/Login/index.php';    
        } else {
            if($_SESSION['role'] == "asisten" && $view == "admin") {
                require_once '../app/views/Error/403.php'; // tampilkan halaman error
            } else {
                require_once '../app/views/' . $view . '.php';
            }
        }
    }

    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}