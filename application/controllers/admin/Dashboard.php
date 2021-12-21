<?php 

class Dashboard extends CI_Controller{
    public  function index ()
    {
        $data['title'] = "Dashboard";
        $siswa = $this->db->query('SELECT * FROM data_siswa');
        $data['siswa'] = $siswa->num_rows();
        $kelas = $this->db->query('SELECT * FROM data_kelas');
        $data['kelas'] = $kelas->num_rows();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    //echo "Hello World";
    }

}


?>