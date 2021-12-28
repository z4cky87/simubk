<?php
defined('BASEPATH') or exit('No direct script access allowed');
class simubkModel extends CI_model {
     public  function get_data ($table)
     {
         return $this->db->get($table);
     }

     public  function insert_data($data,$table)
     {
        $this->db->insert($table,$data);
     }
}
?>