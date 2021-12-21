<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dataSiswa extends CI_Controller {
     public  function index ()
    {
         // $data = $this->db->query('SELECT * FROM data_siswa')->result();
         // var_dump($data);
         $data = $this->db->query('SELECT * FROM data_siswa')->result();
         var_dump($data);
         //echo "Test";
     }
}
?>