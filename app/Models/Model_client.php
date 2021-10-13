<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_client extends CI_Model {

    function simpan($data)
    {
        return $this->db->insert('tbl_client',$data);
    }
    function ambil($id = null)
    {
        if(null !== $id){
            $this->db->where('a.id_client ',$id);
        }
        return $this->db->get('tbl_client as a');
    }
   
 }