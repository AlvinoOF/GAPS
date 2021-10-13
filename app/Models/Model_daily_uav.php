<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_daily_uav extends CI_Model {
    function get($id = null,$client = null){
        if($id !== null){
            $this->db->where('id_daily_uav',$id);
        }
        if($client !== null){
            $this->db->where('id_client ',$id);
        }
        return $this->db->get('tbl_daily_uav');
    }
    function save($data){
        return $this->db->insert('tbl_daily_uav',$data);
    }
    function update($data,$id){
        $this->db->where('id_daily_uav ',$id);
        return $this->db->update('tbl_daily_uav',$data);
    }
    function delete(){
        
    }
}