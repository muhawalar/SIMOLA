<?php 

class Asisten_model{
    private $table = 'trx_asisten';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

    public function getAsisten($id_user){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->bind(':id_user', $id_user);
        return $this->db->single();
    }
}


?>