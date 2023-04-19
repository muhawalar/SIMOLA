<?php 

class Respon_model{
    private $table = 'trx_respon';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

    public function getRespon(){
        $this->db->query('SELECT id_respon, (SELECT nama_asisten FROM trx_asisten WHERE trx_respon.id_asisten = trx_asisten.id_asisten) as asisten,
        id_laporan, tanggal, time, status FROM ' . $this->table);
       
        return $this->db->resultSet();
    }
}


?>