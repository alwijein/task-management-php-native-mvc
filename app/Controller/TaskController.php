<?php

namespace AlwiJaya\TugasBesarWeb\Controller;

use AlwiJaya\TugasBesarWeb\App\View;

class TaskController extends View
{

    public function create(): void
    {
        var_dump($_POST);

        if ($this->model('TaskModel')->buatTaskBaru($_POST) > 0) {
            header('location: /show-task');
            exit();
        } else {
            echo "GAGAL";
        }
    }
}
