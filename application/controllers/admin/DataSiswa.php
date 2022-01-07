<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dataSiswa extends CI_Controller {
     public  function index ()
    {
        $data ['title'] = "Data Siswa" ;
        $data['siswa'] = $this->simubkModel->get_data('data_siswa')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataSiswa',$data);
        $this->load->view('templates_admin/footer');
     }

       public  function tambahData ()
     {
         $data['title'] = "Tambah Data Siswa"; 
         $data['kelas'] = $this->simubkModel->get_data('data_kelas')->result();
         $this->load->view('templates_admin/header',$data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('admin/tambahDataSiswa',$data);
         $this->load->view('templates_admin/footer');
     }

     public  function tambahDataAksi()
       {
      
       $this->_rules();
       if($this->form_validation->run()==FALSE)
       {
           $this->tambahData();
       }
       else
       {
               $nis = $this->input->post('nis');
               $nama_siswa = $this->input->post('nama_siswa');
               $jenis_kelamin = $this->input->post('jenis_kelamin');
               $kelas = $this->input->post('kelas');
               $tanggal_daftar = $this->input->post('tanggal_daftar');
               $status_desc = $this->input->post('status_desc');
               $photo = $_FILES['photo']['name'];
               if ($photo=''){}else{
                  $config['upload_path'] = './assets/photo' ;
                  $config['allowed_types'] = 'jpg|jpeg|png|tiff'; 
                  $this->load->library('upload',$config);
                  if(!$this->upload->do_upload('photo')){
                     echo "Photo Gagal Upload!";
                  }else{
                     $photo=$this->upload->data('file_name');
                  }
               }
               $data = array(
                  'nis' => $nis,
                  'nama_siswa' => $nama_siswa,
                  'jenis_kelamin' => $jenis_kelamin,
                  'kelas' => $kelas,
                  'tanggal_daftar' => $tanggal_daftar,
                  'status_desc' => $status_desc,
                  'photo' => $photo,   
               );
               echo "60";
               $this->simubkModel->insert_data($data,'data_siswa');
               $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Data Berhasil Ditambahkan</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>');
               redirect('admin/dataSiswa');
               }

       
      }
      public function _rules()
          {

               $this->form_validation->set_rules('nis','nis','required');
               
               $this->form_validation->set_rules('nama_siswa','nama_siswa','required');
               
               $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
               
               $this->form_validation->set_rules('kelas','kelas','required');
               
               $this->form_validation->set_rules('tanggal_daftar','tanggal_daftar','required');
               
               $this->form_validation->set_rules('status','status','required');
               
          }

   
}
?>