<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_incident extends CI_Model {
    function get($id = null,$tgl = null,$client = null){
        if($id !== null){
            $this->db->where('id_incident',$id);
        }
        if($tgl !== null){
            $this->db->like('tgl_incident',$tgl,'after');
        }
        if($client !== null){
            $this->db->where('id_client',$client);
        }
        return $this->db->get('tbl_incident');

    }
    function save($data){
        $this->db->insert('tbl_incident',$data);
        return $this->db->insert_id();
    }
    function update($data,$id){
        $this->db->where('id_incident',$id);
        return $this->db->update('tbl_incident',$data);
    }
    function delete(){
        
    }
}