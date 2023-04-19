<?php 

class Jenis_Laporan_model{
    private $table = 'mst_jenis_laporan';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

    public function getJenisLaporan($jenis_laporan){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE jenis_laporan=:jenis_laporan');
        $this->db->bind(':jenis_laporan', $jenis_laporan);
        return $this->db->single();
    }
}


?>