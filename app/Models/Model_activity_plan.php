<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_activity_plan extends CI_Model {
    function get($year = null){
        $this->db->where('thn_act',$year);
        return $this->db->get('tbl_activity_program');
    }
    function save($data){
        return $this->db->insert('tbl_activity_program',$data);
    }
    function update($data,$id){
        $this->db->where('id_activiry_program',$id);
        return $this->db->update('tbl_activity_program',$data);
    }
    function delete(){
        
    }
}