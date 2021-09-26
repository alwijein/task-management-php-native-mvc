<?php

use AlwiJaya\TugasBesarWeb\App\Database;

class UserModel {

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers () {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    
    public function findUserByUsername($userUid){
        $this->db->query('SELECT * FROM users WHERE username = :userUid');
        $this->db->bind(':userUid', $userUid);

        $row = $this->db->singleSet();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }


    //Register User
    public function register($data){
        $this->db->query('INSERT INTO users (username, tingkatan, angkatan , userPwd) 
        VALUES (:name, :userTingkatan, :userAngkatan, :password)');
        //Bind values
        $this->db->bind(':name', $data['username']);
        $this->db->bind(':userTingkatan', $data['tingkatan']);
        $this->db->bind(':userAngkatan', $data['angkatan']);
        $this->db->bind(':password', $data['userPwd']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function login($username, $password){
        $row = $this->findUserByUsername($username);

        if($row == false) return false;

        $hashedPassword = $row['userPwd'];

        if(password_verify($password, $hashedPassword)){
            return $row;
        }else {
            return false;
        }
    }

}