<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tamu extends CI_Model {
    function get($id = null,$tgl = null){
        if($id !== null){
            $this->db->where('id_tamu',$id);
        }
        if($tgl !== null){
            $this->db->like('tgl_tamu',$tgl,'after');
        }
        return $this->db->get('tbl_tamu');
    }
    function save($data){
        return $this->db->insert('tbl_tamu',$data);
    }
    function update($data,$id){
        $this->db->where('id_tamu',$id);
        return $this->db->update('tbl_tamu',$data);
    }
    function delete(){
        
    }
}