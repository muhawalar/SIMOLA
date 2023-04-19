<?php 

class Home extends Controller{
    public function index(){
        // $data['judul'] = 'Home';
        $data['bermasalah']= $this->model('Laporan_model')->belumDieksekusiIOT();
        $data['progress']= $this->model('Laporan_model')->onProgressIOT();
        $data['solved']= $this->model('Laporan_model')->solvedIOT();

        $data['bermasalahStartup']= $this->model('Laporan_model')->belumDieksekusiStartup();
        $data['progressStartup']= $this->model('Laporan_model')->onProgressStartup();
        $data['solvedStartup']= $this->model('Laporan_model')->solvedStartup();

        $data['bermasalahComNet']= $this->model('Laporan_model')->belumDieksekusiComNet();
        $data['progressComNet']= $this->model('Laporan_model')->onProgressComNet();
        $data['solvedComNet']= $this->model('Laporan_model')->solvedComNet();

        $data['bermasalahMultimedia']= $this->model('Laporan_model')->belumDieksekusiMultimedia();
        $data['progressMultimedia']= $this->model('Laporan_model')->onProgressMultimedia();
        $data['solvedMultimedia']= $this->model('Laporan_model')->solvedMultimedia();

        $data['bermasalahMicro']= $this->model('Laporan_model')->belumDieksekusiMicro();
        $data['progressMicro']= $this->model('Laporan_model')->onProgressMicro();
        $data['solvedMicro']= $this->model('Laporan_model')->solvedMicro();
        
        $data['bermasalahComputer']= $this->model('Laporan_model')->belumDieksekusiComputer();
        $data['progressComputer']= $this->model('Laporan_model')->onProgressComputer();
        $data['solvedComputer']= $this->model('Laporan_model')->solvedComputer();

        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location:". BASEURL ."/Login");
        }
        else{
            $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
            
            $this->view('templates/sidebar');
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }


    }
}