<?php

class User_model{
    private $table = 'mst_user';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }
    public function authenticate($username, $password) {
         $user = $this->getUserByUsername($username);
         $pass = $this->getUserByPassword($password);
         

        //  var_dump($user);
        //  var_dump($user["password"]);
        //  echo $user["password"];
        //  echo $password;
        //  echo password_hash($password, PASSWORD_DEFAULT);
        if (is_array($user) && is_array($pass) && isset($user['password']) && isset($pass['password']) && $user['password'] === $pass['password']) {
            
            return $user;
         }
        return false;
    }

    public function getUserByUsername($username) {
        $query = "SELECT * FROM mst_user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind(':username', $username);
        return $this->db->single();
    }

    public function getUserByPassword($password) {
        $query = "SELECT * FROM mst_user WHERE password = :password";
        $this->db->query($query);
        $this->db->bind(':password', $password);
        return $this->db->single();
    }
      

    public function getAllUsers(){
        $this->db->query('SELECT * FROM mst_user');
        return $this->db->resultSet();
    }

    // public function getMahasiswaById($id){
    //     $this->db->query('SELECT * FROM ' . $this->table .'WHERE id=' . $id);
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }

    public function checkUser($username, $password){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username AND password =:password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        return $this->db->resultSet();
    }

    

    public function addUser($id_user, $username, $password, $role){
        $query = "INSERT INTO " . $this->table . " VALUES (:id_user, :username, :password, :role)";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('role', $role);
        $this->db->execute();
    }

    public function deleteUser($id_user){
        $query = "DELETE FROM " . $this->table . " WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->execute();

    }
    
    public function updateUser($id_user, $username, $password, $role){
        $query = "UPDATE " .$this->table . " SET username = :username, password = :password, role = :role WHERE id_user  = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('role', $role);
        $this->db->execute();
    }   

}