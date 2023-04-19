<?php

class Laporan extends Controller{

    public function index(){
        session_start();
        $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
        $data['laporan'] = $this->model('Laporan_model')->getLaporanData();
        
        
        $this-> view('templates/sidebar');
        $this-> view('templates/header', $data);
        $this-> view('laporan/index', $data);
        $this-> view('templates/footer');
    }

    public function submitReport(){
        session_start();
        $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
        $data['laboratorium'] = $this->model('Lab_model')->getLab($_POST['laboratorium']);
        $data['jenis_laporan'] = $this->model('Jenis_Laporan_model')->getJenisLaporan($_POST['urgensi']);
        
        $data_asisten = $data['asisten'];
        $data_laboratorium = $data['laboratorium'];
        $jenis_laporan = $data['jenis_laporan'];
        $id_asisten = $data_asisten['id_asisten'];
        $id_lab = $data_laboratorium['id_lab'];
        $id_jenis_laporan = $jenis_laporan['id_jenis_laporan'];
        $kegiatan = $_POST['kegiatan'];
        $deskripsi = $_POST['deskripsi'];
        $time = time();
        $formatted_time = date("H:i:s", $time);
        $date = date("Y-m-d",$time);
        $status = 'belum dieksekusi';
        
        $this->model('Laporan_model')->addLaporan($id_asisten, $id_lab, $id_jenis_laporan, $date, $formatted_time, $kegiatan, $deskripsi, $status);
        header("Location:".BASEURL."/Laporan/index");
        // echo $id_asisten.'<br>';
        // echo $id_lab.'<br>';
        // echo $id_jenis_laporan.'<br>';
        // echo $kegiatan.'<br>';
        // echo $deskripsi.'<br>';
        // echo $time;
        // echo $date.'<br>';
        // echo $status.'<br>';


    }

    

   
}