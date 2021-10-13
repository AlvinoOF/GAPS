<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_incident extends CI_Model {

    function simpan($data)
    {
        return $this->db->insert('tbl_incident',$data);
    }
    function ambil($id = null)
    {
        $this->db->select('a.*, b.*, group_concat(b.nama_category order by FIND_IN_SET(b.id_category, a.id_category)) as nm_cat');
        $this->db->join('tbl_category as b','FIND_IN_SET(b.id_category, a.id_category) > 0','left');
        if(null !== $id){
            $this->db->where('a.id_incident',$id);
        }
        $this->db->group_by('a.id_incident');
        return $this->db->get('tbl_incident as a');
    }
    function ambil_saran($id = null,$id2 = null)
    {
        if(null !== $id){
            $this->db->where('id_incident',$id);
        }
        if(null !== $id2){
            $this->db->where('id_incident_saran',$id2);
        }
        return $this->db->get('tbl_incident_saran as a');
    }

    function simpan_doc($data)
    {
        return $this->db->insert('tbl_incident_doc',$data);
    }
    function ambil_doc($id = null)
    {
        $this->db->where('id_incident',$id);
        return $this->db->get('tbl_incident_doc as a');
    }
    function ambil_follow($id = null)
    {
        $this->db->join("tbl_incident_saran as b","a.id_incident_saran = b.id_incident_saran");
        $this->db->where('b.id_incident',$id);
        return $this->db->get('tbl_incident_follow as a');
    }
    function simpan_follow($data)
    {
        return $this->db->insert('tbl_incident_follow',$data);
    }
    
    function count($id = null)
    {
        $this->db->select("incident_status,count(id_incident) as jum");
        if(null !== $id){
            $this->db->where('id_client',$id);
        }
        $this->db->group_by('incident_status');
        return $this->db->get('tbl_incident as a');
    }
 }