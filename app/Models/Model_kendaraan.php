<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kendaraan extends CI_Model {
    function get($id = null,$tgl = null){
        if($id !== null){
            $this->db->where('id_kendaraan',$id);
        }
        if($tgl !== null){
            $this->db->like('tgl_kendaraan',$tgl,'after');
        }
        return $this->db->get('tbl_kendaraan');
    }
    function save($data){
        return $this->db->insert('tbl_kendaraan',$data);
    }
    function update($data,$id){
        $this->db->where('id_kendaraan',$id);
        return $this->db->update('tbl_kendaraan',$data);
    }
    function delete(){
        
    }
}