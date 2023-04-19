<?php 
class Tindakan extends Controller{
    public function index(){
        session_start();
        $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
        $data['laporan'] = $this->model('Laporan_model')->getLaporanData();
        $data['respon'] = $this->model('Respon_model')->getRespon();
        $this-> view('templates/sidebar');
        $this-> view('templates/header', $data);
        $this-> view('tindakan/index', $data);
        $this-> view('templates/footer');


        // $this-> view('templates/footer');
    }

    public function updateTindakan($id_laporan){
        session_start();
        $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
        $data_asisten = $data['asisten'];
        $status = $_POST['status'];
        $time = time();
        $formatted_time = date("H:i:s", $time);
        $date = date("Y-m-d",$time);
        $data_laporan = $this->model('Laporan_model')->updateLaporan($id_laporan, $status);
        $data_tindakan = $this->model('Tindakan_model')->addTindakan($data_asisten['id_asisten'] ,$id_laporan, $date, $formatted_time, $status);
        header("Location:".BASEURL."/Tindakan/index");

        // echo $status;
        // echo $id_laporan;
        // echo $id_asisten;
        // echo $date;
        // echo $time;

    }

}
?>