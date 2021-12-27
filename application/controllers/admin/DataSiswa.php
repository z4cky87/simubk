<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dataSiswa extends CI_Controller {
     public  function index ()
    {
         // $data = $this->db->query('SELECT * FROM data_siswa')->result();
         // var_dump($data);
        // $data = $this->db->query('SELECT * FROM data_siswa')->result();
         //var_dump($data);
         //echo "Test";
        $data ['title'] = "Dashboard" ;
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataSiswa',$data);
        $this->load->view('templates_admin/footer');
     }
}
?>