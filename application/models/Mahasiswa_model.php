<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    
    public function getAllMahasiswa()
    {
        return $query = $this->db->get('mahasiswa')->result_array();
        //bisa di buat seperti ini
        //$query = $this->db->get('mahasiswa');
        //return result_array($query);
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }
}
