<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_risk extends CI_Model {
    function get($id = null,$tgl = null){
        if($id !== null){
            $this->db->where('id_risk',$id);
        }
        if($tgl !== null){
            $this->db->like('tgl_risk',$tgl,'after');
        }
        return $this->db->get('tbl_risk');
    }
    function save($data){
        return $this->db->insert('tbl_risk',$data);
    }
    function update($data,$id){
        $this->db->where('id_risk',$id);
        return $this->db->update('tbl_risk',$data);
    }
    function delete(){
        
    }
}