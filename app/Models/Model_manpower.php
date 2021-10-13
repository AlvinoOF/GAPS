<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_manpower extends CI_Model {
    function get($id = null){
        if($id !== null){
            $this->db->where('id_manpower',$id);
        }
        return $this->db->get('tbl_manpower');
    }
    function save($data){
        return $this->db->insert('tbl_manpower',$data);
    }
    function update($data,$id){
        $this->db->where('id_manpower',$id);
        return $this->db->update('tbl_manpower',$data);
    }
    function delete(){
        
    }
}