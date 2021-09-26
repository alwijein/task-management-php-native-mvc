<?php

use AlwiJaya\TugasBesarWeb\App\Database;

class TaskModel {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTask () {
        $this->db->query('SELECT * FROM post');
        return $this->db->resultSet();
    }

    public function buatTaskBaru($data){
        $this->db->query("INSERT INTO post (title, description, deadline) 
        VALUES (:taskTitle, :taskDescription, :taskDeadline)");

        $this->db->bind(':taskTitle', $data['title']);
        $this->db->bind(':taskDescription', $data['description']);
        $this->db->bind(':taskDeadline', $data['deadline']);


        $this->db->execute();

        return $this->db->rowCount();
    }
}