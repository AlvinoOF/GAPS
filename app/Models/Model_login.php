<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

    function cek_auth($username,$password)
    {
        $this->db->group_start();
            $this->db->where('username', $username);
            $this->db->or_where('email', $username);
        $this->db->group_end();
        $this->db->where('password', $password);
        return $this->db->get('tbl_user');
    }
    function cek_auth_client($username,$password)
    {
        $this->db->join('tbl_client b','a.id_client = b.id_client');
        $this->db->group_start();
            $this->db->where('a.username', $username);
            $this->db->or_where('a.email', $username);
        $this->db->group_end();
        $this->db->where('a.password', $password);
        return $this->db->get('tbl_client_user a');
    }
 }