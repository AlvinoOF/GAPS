<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_daily_security_new extends CI_Model {
    function get($id = null,$client = null){
        if($id !== null){
            $this->db->where('id_daily_security_new',$id);
        }
        if($client !== null){
            $this->db->where('id_client ',$client);
        }
        $this->db->where('deleted_at',null);
        return $this->db->get('tbl_daily_security_new');
    }
    function save($data){
        $this->db->insert('tbl_daily_security_new',$data);
        return $this->db->insert_id();
    }
    function update($data,$id){
        $this->db->where('id_daily_security_new',$id);
        return $this->db->update('tbl_daily_security_new',$data);
    }
    function delete(){
        
    }

    function upload($data){
        return $this->db->insert('tbl_daily_security_new_img',$data);
    }
    function get_upload($id){
        $this->db->where('deleted_at',null);
        $this->db->where('id_daily_security_new',$id);
        return $this->db->get('tbl_daily_security_new_img');
    }
    function update_upload($data,$id){
        $this->db->where('id_daily_security_new_img',$id);
        return $this->db->update('tbl_daily_security_new_img',$data);
    }

}