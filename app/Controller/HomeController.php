<?php

namespace AlwiJaya\TugasBesarWeb\Controller;

use AlwiJaya\TugasBesarWeb\App\View;

class HomeController extends View{

    function index(): void {
       $this->render('Home/index');
    }
    
    
    function create(): void {
        View::render('Home/create_task');
    }
    

    function showTask(): void {

        $data['post'] = $this->model('TaskModel')->getTask();

        $this->render('Home/show_task',$data);
    }


    function showUser(): void {
        $data['users'] = $this->model('UserModel')->getUsers();


        $this->render('Home/show_users',$data);
    }
}