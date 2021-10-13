<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_daily_security extends CI_Model {
    function get($id = null,$client = null){
        if($id !== null){
            $this->db->where('id_daily_security ',$id);
        }
        if($client !== null){
            $this->db->where('id_client ',$client);
        }
        $this->db->where('deleted_at',null);
        return $this->db->get('tbl_daily_security');
    }
    function save($data){
        $this->db->insert('tbl_daily_security',$data);
        return $this->db->insert_id();
    }
    function update($data,$id){
        $this->db->where('id_daily_security ',$id);
        return $this->db->update('tbl_daily_security',$data);
    }
    function delete(){
        
    }
}