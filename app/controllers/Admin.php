<?php 
class Admin extends Controller{
    public function index(){
        $data['users'] = $this->model('User_model')->getAllUsers();
        session_start();
        $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
        if ($_SESSION['role'] !== 'admin') {
            header("Location:".BASEURL);
            exit;
        }
        else{
            $this-> view('templates/sidebar');
            $this-> view('templates/header', $data);
            $this-> view('admin/index', $data);
            $this-> view('templates/footer');
        }

    }

    public function laporan(){
        $data['laporan'] = $this->model('Laporan_model')->getLaporanData();
        session_start();
        $data['asisten'] = $this->model('Asisten_model')->getAsisten($_SESSION['id_user']);
        if ($_SESSION['role'] !== 'admin') {
            header("Location:".BASEURL."404");
            exit;
        }
        else{
            $this-> view('templates/sidebar', $data);
            $this-> view('templates/header', $data);
            $this-> view('admin/laporan', $data);
            $this-> view('templates/footer');

        }
    }

    public function addUser(){
        $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $data = $this->model('User_model')->addUser($id_user,$username, $password, $role);
    }

    public function deleteUser($id_user){
        $id_user = $id_user;
        $id_user = $this->model('User_model')->deleteUser($id_user);
        header("Location:".BASEURL."/Admin/index");
    }

    public function updateUser(){
        $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $data = $this->model('User_model')->updateUser($id_user,$username, $password, $role);
        header("Location:".BASEURL."/Admin/index");
    }

    public function deleteLaporan($id_laporan){
        $id_laporan = $this->model('Laporan_model')->deleteLaporan($id_laporan);
        header("Location:".BASEURL."/Admin/laporan");
    }

    public function updateLaporan($id_laporan){
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
        $jenis_laporan = $jenis_laporan['jenis_laporan'];
        $kegiatan = $_POST['kegiatan'];
        $deskripsi = $_POST['laporan'];
        $time = time();
        $formatted_time = date("H:i:s", $time);
        $date = date("Y-m-d",$time);
        $status = $_POST['status'];

        // echo $_POST['urgensi'];
        // echo $id_laporan."<br>";
        // echo $id_lab."<br>";
        
        // echo $id_jenis_laporan."<br>";
        // echo $jenis_laporan."<br>";
        // echo $date."<br>";
        // echo $kegiatan."<br>";
        // echo $deskripsi."<br>";
        // echo $status."<br>";
        $this->model('Laporan_model')->updateLaporanAdmin($id_laporan, $id_lab, $id_jenis_laporan, $jenis_laporan, $date, $kegiatan, $deskripsi, $status);
        header("Location:".BASEURL."/Admin/laporan");
    }
}
?>