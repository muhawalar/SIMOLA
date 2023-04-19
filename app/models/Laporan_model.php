<?php

class Laporan_model{
    private $table = 'trx_laporan';
    // private $table_secondary = 'mst_lab';
    private $db;
    

    public function __construct(){
        $this->db = new Database;
        
    }

    public function getLaporanData(){
        $this->db->query('SELECT id_laporan, tanggal, (SELECT nama_lab FROM mst_lab WHERE trx_laporan.id_lab = mst_lab.id_lab) 
        as laboratorium, kegiatan, laporan, status, id_asisten,
        (SELECT jenis_laporan FROM mst_jenis_laporan WHERE trx_laporan.id_jenis_laporan = mst_jenis_laporan.id_jenis_laporan) 
        as urgensi, (SELECT nama_asisten FROM trx_asisten WHERE trx_laporan.id_asisten = trx_asisten.id_asisten) 
        as pelapor FROM trx_laporan ORDER BY CONCAT(tanggal, " ", time) DESC');
        return $this->db->resultSet();
    }

    public function addLaporan($id_asisten, $id_lab, $id_jenis_laporan, $tanggal, $time, $kegiatan, $laporan, $status){
        $id_laporan = '';

        $query = "INSERT INTO " . $this->table . " VALUES (:id_laporan, :id_asisten, :id_lab, :id_jenis_laporan, :tanggal, :time, :kegiatan, :laporan, :status)";
        $this->db->query($query);
        $this->db->bind('id_laporan', $id_laporan);
        $this->db->bind('id_asisten', $id_asisten);
        $this->db->bind('id_lab', $id_lab);
        $this->db->bind('id_jenis_laporan', $id_jenis_laporan);
        $this->db->bind('tanggal', $tanggal);
        $this->db->bind('time', $time);
        $this->db->bind('kegiatan', $kegiatan);
        $this->db->bind('laporan', $laporan);
        $this->db->bind('status', $status);
        $this->db->execute();
    }

    public function updateLaporan($id_laporan,$status){
        $query = "UPDATE " .$this->table . " SET status = :status WHERE id_laporan  = :id_laporan";
        $this->db->query($query);
        $this->db->bind('id_laporan', $id_laporan);
        $this->db->bind('status', $status);
        $this->db->execute();
    }   

    public function updateLaporanAdmin($id_laporan, $id_lab, $id_jenis_laporan, $jenis_laporan, $date, $kegiatan, $deskripsi, $status){
        $updateJenisLaporan = "UPDATE mst_jenis_laporan SET jenis_laporan = :jenis_laporan WHERE id_jenis_laporan = :id_jenis_laporan";
        $this->db->query($updateJenisLaporan);
        $this->db->bind('id_jenis_laporan', $id_jenis_laporan);
        $this->db->bind('jenis_laporan', $jenis_laporan);
        $this->db->execute();


        $query = "UPDATE " .$this->table . " SET id_lab = :id_lab, id_jenis_laporan  = :id_jenis_laporan, tanggal = :tanggal, tanggal = :tanggal, kegiatan = :kegiatan, laporan = :laporan, status = :status WHERE id_laporan  = :id_laporan";
        $this->db->query($query);
        $this->db->bind('id_laporan', $id_laporan);
        $this->db->bind('id_lab', $id_lab);
        $this->db->bind('id_jenis_laporan', $id_jenis_laporan);
        $this->db->bind('tanggal', $date);
        $this->db->bind('kegiatan', $kegiatan);
        $this->db->bind('laporan', $deskripsi);
        $this->db->bind('status', $status);
        $this->db->execute();
    }   

    public function deleteLaporan($id_laporan){
        // hapus baris-baris pada tabel "trx_respon" yang memiliki nilai "id_laporan" yang sama dengan nilai "id_laporan" pada baris yang ingin dihapus dari tabel "trx_laporan"
        $delete_respon = "DELETE FROM trx_respon WHERE id_laporan = :id_laporan";
        $this->db->query($delete_respon);
        $this->db->bind('id_laporan', $id_laporan);
        $this->db->execute();
    
        // hapus baris dari tabel "trx_laporan"
        $query = "DELETE FROM " . $this->table . " WHERE id_laporan = :id_laporan";
        $this->db->query($query);
        $this->db->bind('id_laporan', $id_laporan);
        $this->db->execute();
    }

    public function belumDieksekusiIOT(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1001" AND status = "belum dieksekusi"');
        return $this->db->single();
    }
    public function onProgressIOT(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1001" AND status = "on-progress"');
        return $this->db->single();
    }
    public function solvedIOT(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1001" AND status = "solved"');
        return $this->db->single();
    }

    
    public function belumDieksekusiStartup(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1002" AND status = "belum dieksekusi"');
        return $this->db->single();
    }
    public function onProgressStartup(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1002" AND status = "on-progress"');
        return $this->db->single();
    }
    public function solvedStartup(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1002" AND status = "solved"');
        return $this->db->single();
    }

    public function belumDieksekusiComNet(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1003" AND status = "belum dieksekusi"');
        return $this->db->single();
    }
    public function onProgressComNet(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1003" AND status = "on-progress"');
        return $this->db->single();
    }
    public function solvedComNet(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1003" AND status = "solved"');
        return $this->db->single();
    }

    public function belumDieksekusiMultimedia(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1004" AND status = "belum dieksekusi"');
        return $this->db->single();
    }
    public function onProgressMultimedia(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1004" AND status = "on-progress"');
        return $this->db->single();
    }
    public function solvedMultimedia(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1004" AND status = "solved"');
        return $this->db->single();
    }

    public function belumDieksekusiMicro(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1005" AND status = "belum dieksekusi"');
        return $this->db->single();
    }
    public function onProgressMicro(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1005" AND status = "on-progress"');
        return $this->db->single();
    }
    public function solvedMicro(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1005" AND status = "solved"');
        return $this->db->single();
    }

    public function belumDieksekusiComputer(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1006" AND status = "belum dieksekusi"');
        return $this->db->single();
    }
    public function onProgressComputer(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1006" AND status = "on-progress"');
        return $this->db->single();
    }
    public function solvedComputer(){
        $this->db->query('SELECT COUNT(id_lab) FROM trx_laporan WHERE id_lab= "1006" AND status = "solved"');
        return $this->db->single();
    }



    
    

}