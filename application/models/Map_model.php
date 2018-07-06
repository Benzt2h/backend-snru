<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Map_model extends CI_Model{
    public function map_list(){
        $query=$this->db->get('map');
        return $query->result_array();
    }
    public function map_insert_process($input){
        $this->db->insert('map',$input);
    }
    public function map_delete($input){
        $this->db->where('map_number',$input);
        $this->db->delete('map');
    }
    public function map_edit($input){
        $query=$this->db->get_where('map',array('map_number'=>$input));
        return $query->result_array();
    }
    public function map_edit_process($input){
        $this->db->update('map', $input, 'map_number='.$input['map_number']);
    }
    public function map_search($input){
        $this->db->like('map_number', $input);
        $this->db->or_like('map_name', $input);
        $this->db->or_like('map_description', $input);
        $query = $this->db->get('map');
        return $query->result_array();

    }
}
?>