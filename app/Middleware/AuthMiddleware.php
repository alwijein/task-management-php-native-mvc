<?php 

namespace AlwiJaya\TugasBesarWeb\Middleware;


class AuthMiddleware implements Middleware {
    function before(): void
    {
        session_start();
        if(!isset($_SESSION['user'])){
            header('location: /');
            exit();
        }
    }
}