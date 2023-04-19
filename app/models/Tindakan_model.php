<?php

class Tindakan_model{
    private $table = 'trx_respon';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

    public function addTindakan($id_asisten ,$id_laporan, $date, $formatted_time, $status){
        $id_respon = '';
        $query = "INSERT INTO " . $this->table . " VALUES (:id_respon,:id_asisten, :id_laporan, :tanggal, :time, :status)";
        $this->db->query($query);
        $this->db->bind('id_respon', $id_respon);
        $this->db->bind('id_asisten', $id_asisten);
        $this->db->bind('id_laporan', $id_laporan);
        $this->db->bind('tanggal', $date);
        $this->db->bind('time', $formatted_time);
        $this->db->bind('status', $status);
        $this->db->execute();
    }


}