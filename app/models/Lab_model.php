<?php 

class Lab_model{
    private $table = 'mst_lab';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

    public function getLab($nama_lab){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_lab=:nama_lab');
        $this->db->bind(':nama_lab', $nama_lab);
        return $this->db->single();
    }
}


?>