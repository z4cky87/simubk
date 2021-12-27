<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dataKelas extends CI_Controller {
    public  function index ()
    {
         // $data = $this->db->query('SELECT * FROM data_siswa')->result();
         // var_dump($data);
        // $data = $this->db->query('SELECT * FROM data_siswa')->result();
         //var_dump($data);
         //echo "Test";
        $data ['title'] = "Data Kelas" ;
        $data['kelas'] = $this->simubkModel->get_data('data_kelas')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataKelas',$data);
        $this->load->view('templates_admin/footer');
     }
    public  function tambahData()
    {
        $data ['title'] = "Tambah Data Kelas" ;
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambahDataKelas',$data);
        $this->load->view('templates_admin/footer');
     }
    public  function tambahDataAksi()
    {
       $this->_rules();
       if($this->form_validation->run()==FALSE){
          $this->tambahData();
       }
       else
       {
          $nama_kelas = $this->input->post('nama_kelas');
          $uang_pangkal = $this->input->post('uang_pangkal');
          $spp = $this->input->post('spp');
          $data = array(
             'nama_kelas' => $nama_kelas,
             'uang_pangkal' => $uang_pangkal,
             'spp' => $spp
          );
          $this->simubkModel->insert_data($data,'data_kelas');
          $this->session->set_flashdata('pesan','<div class="alert alert-succes alert-dismissible fade show" role="alert">
         <strong>Data Berhasil Ditambahkan</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>');
         redirect('dataKelas');
       }
    }

    public  function _rules()
    {
       $this->form_validation->set_rules('nama_kelas','nama_kelas','required');
       $this->form_validation->set_rules('uang_pangkal','uang_pangkal','required');
       $this->form_validation->set_rules('spp','spp','required');
    }

}
?>