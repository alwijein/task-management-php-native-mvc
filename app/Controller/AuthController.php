<?php

namespace AlwiJaya\TugasBesarWeb\Controller;

use AlwiJaya\TugasBesarWeb\App\View;


class AuthController extends View{


    public function index(): void {

        View::render('Auth/login');
    }

    public function register(): void {

        View::render('Auth/register');
    }

    public function storeRegister(){
        //Process form
        
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data = [
            'username' => trim($_POST['username']),
            'tingkatan' => trim($_POST['tingkatan']),
            'angkatan' => trim($_POST['angkatan']),
            'userPwd' => trim($_POST['userPwd']),
            // 'pwdRepeat' => trim($_POST['pwdRepeat'])
        ];

        // //Validate inputs
        // if(empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) || 
        // empty($data['usersPwd']) || empty($data['pwdRepeat'])){
        //     flash("register", "Please fill out all inputs");
        //     redirect("../signup.php");
        // }

        // if(!preg_match("/^[a-zA-Z0-9]*$/", $data['usersUid'])){
        //     // flash("register", "Invalid username");
        //     // redirect("../signup.php");
        // }

        // if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
        //     // flash("register", "Invalid email");
        //     // redirect("../signup.php");
        // }

        // if(strlen($data['usersPwd']) < 6){
        //     // flash("register", "Invalid password");
        //     // redirect("../signup.php");
        // } else if($data['usersPwd'] !== $data['pwdRepeat']){
        //     // flash("register", "Passwords don't match");
        //     // redirect("../signup.php");
        // }

        // //User with the same email or password already exists
        // if($this->userModel->findUserUsername($data['usersEmail'], $data['usersName'])){
        //     // flash("register", "Username or email already taken");
        //     // redirect("../signup.php");
        // }

        //Passed all validation checks.

        //Now going to hash password
        $data['userPwd'] = password_hash($data['userPwd'], PASSWORD_DEFAULT);

        //Register User
        if($this->model('UserModel')->register($data)){
            header('location: /');
            exit();
        }else{
            die("Something went wrong");
        }
    }

    function login(): void {
        
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        $data=[
            'username' => trim($_POST['username']),
            'userPwd' => trim($_POST['userPwd'])
        ];

        if(empty($data['username']) || empty($data['userPwd'])){
            // flash('login','please fill out all inputs');
            header('location: /login');
            exit();
        }

        if($this->model('UserModel')->findUserByUsername($data['username'])){
            $loggedInUser = $this->model('UserModel')->login($data['username'], $data['userPwd']);
            if($loggedInUser){
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("/login");
            }
        }else{
            flash("login", "No user found");
            redirect("login.php");
        }
        
        // echo "SUKSES";
    }

    public function createUserSession($user): void{
        $_SESSION['id_user'] = $user->id_user;
        $_SESSION['username'] = $user->username;

        header('location: /');
        exit();
    }


}