<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_complaint extends CI_Model {

    function simpan($data)
    {
        return $this->db->insert('tbl_complaint',$data);
    }
    function ambil($id = null)
    {
        if(null !== $id){
            $this->db->where('a.id_complaint ',$id);
        }
        $this->db->group_by('a.id_complaint');
        return $this->db->get('tbl_complaint as a');
    }
 }