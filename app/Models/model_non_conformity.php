<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_non_conformity extends CI_Model {
    function get($id = null,$tgl = null){
        if($id !== null){
            $this->db->where('id_non_conformity',$id);
        }
        if($tgl !== null){
            $this->db->like('tgl_non_conformity',$tgl,'after');
        }
        return $this->db->get('tbl_non_conformity');
    }
    function save($data){
        return $this->db->insert('tbl_non_conformity',$data);
    }
    function update($data,$id){
        $this->db->where('id_non_conformity',$id);
        return $this->db->update('tbl_non_conformity',$data);
    }
    function delete(){
        
    }
}