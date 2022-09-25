<?php
class Dashboard extends CI_Controller{

    public function index(){
       
        $data['jumlah_karyawan']= $this->model_karyawan->jumlah_data();
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard',$data);
        $this->load->view('templates/footer');

    }
}

?>