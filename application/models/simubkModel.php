<?php
defined('BASEPATH') or exit('No direct script access allowed');
class simubkModel extends CI_model {
     public  function get_data ($table)
     {
         return $this->db->get($table);
     }
}
?>