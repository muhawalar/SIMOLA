<?php
require_once 'Laporan.php';



class Login extends Controller {
    public function index(){
        $this-> view('login/index');
    }

    public function login() {
      
      // If user is already logged in, redirect them to the homepage

      // If login form is submitted, attempt to authenticate user
      if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data['login'] = $this->model('User_model')->authenticate($username, $password);
        // var_dump($data['login']);
        // session_start();
        
      

        if($data['login'] == NULL){
          $data['error'] = "Username atau password salah!";
          $this-> view('login/index', $data);
        }
        else{ 
          session_start();
          // var_dump($data['login']);
          $row = $data['login'];
          var_dump($row['username']);
          // $row['username'] = $_SESSION ;
          $_SESSION = $row;
          var_dump($_SESSION['username']);
          var_dump($_SESSION);

            header("Location:". BASEURL);
   
          }
        }

      }
      public function logout(){
        session_start();
        unset($_SESSION["username"]);
        session_destroy();
        header("Location:". BASEURL ."/Login");

      }
  
    }




    