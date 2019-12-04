<?php

class Pengguna_model extends CI_model {
    public function getAllPengguna(){
        return $this->db->get('pengguna')->result_array();
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function hapusDataPengguna($id){
        $this->db->where('id',$id);
        $this->db->delete('pengguna');
    }	
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}