<?php
defined('BASEPATH') or exit('No direcy script access allowed');
class Admin_model extends CI_Model
{
    public function admin_list()
    {
        $query = $this->db->get('admin');
        return $query->result_array();
    }
    public function admin_insert_process($input)
    {
        $this->db->insert('admin', $input);
    }
    public function admin_delete($input)
    {
        $this->db->where('admin_id', $input);
        $this->db->delete('admin');
    }
    public function admin_edit($input)
    {
        $query = $this->db->get_where('admin', array('admin_id' => $input));
        return $query->result_array();
    }
    public function admin_edit_process($input)
    {
        $this->db->update('admin', $input, 'admin_id ='.$input['admin_id']);
    }

    public function login($input)
    {
        $query = $this->db->get_where('admin', array('admin_id'=>$input['admin_id'],'admin_password'=>$input['admin_password']));
        return $query;
    }
    public function admin_search($input){
        $this->db->like('admin_id',$input);
        $this->db->or_like('admin_name',$input);
        $query = $this->db->get('admin');
        return $query->result_array();

    }
}
