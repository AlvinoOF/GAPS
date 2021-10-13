<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_daily_cms extends CI_Model {
    function get($id = null,$client = null){
        if($id !== null){
            $this->db->where('id_daily_cms',$id);
        }
        if($client !== null){
            $this->db->where('id_client ',$id);
        }
        return $this->db->get('tbl_daily_cms');
    }
    function save($data){
        return $this->db->insert('tbl_daily_cms',$data);
    }
    function update($data,$id){
        $this->db->where('id_daily_cms ',$id);
        return $this->db->update('tbl_daily_cms',$data);
    }
    function delete(){
        
    }
}