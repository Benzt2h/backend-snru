<?php
defined('BASEPATH') or exit('No direct script access allowed');
class News_model extends CI_Model
{
    public function news_list(){
        $query = $this->db->get('news');
        return $query->result_array();
    }
    public function news_insert_process($input){
        $this->db->insert('news',$input);
    }
    public function news_delete($input){
        $this->db->where('news_number', $input);
        $this->db->delete('news');
    }
    public function news_edit($input){
        $query = $this->db->get_where('news',array('news_number'=>$input));
        return $query->result_array();
    }
    public function news_edit_process($input){
        $this->db->update('news', $input, 'news_number='.$input['news_number']);

    }
    public function news_search($input){
         $this->db->like('news_number', $input);
        $this->db->or_like('news_header', $input);
        $this->db->or_like('news_description', $input);
        $query = $this->db->get('news');
        return $query->result_array();

    }
}
?>