<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Map extends CI_Controller
{
    public function map_list()
    {
        $data['data']=$this->Map_model->map_list();
        $this->load->view('map_list', $data);
    }

    public function map_insert()
    {
        $this->load->view('map_insert');
    }
    public function map_insert_process()
    {
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('map_img')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('map_error', $error);
        } else {
            $img_path = 'img/'.$this->upload->data('file_name');
            $input = array(
            'map_name'=>$this->input->post('map_name'),
            'map_description'=>$this->input->post('map_description'),
            'map_img'=>$img_path,
            'map_latitude'=>$this->input->post('map_latitude'),
            'map_logitude'=>$this->input->post('map_logitude'),
        );
            $this->Map_model->map_insert_process($input);
            redirect('Map/map_list');
        }
    }
    public function map_delete()
    {
        $map_number=$this->uri->segment(3);
        $this->Map_model->map_delete($map_number);
        redirect('Map/map_list');
    }

    public function map_edit()
    {
        $map_number=$this->uri->segment(3);
        $data['data'] = $this->Map_model->map_edit($map_number);
        $this->load->view('map_edit', $data);
    }

    public function map_edit_process()
    {
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('map_img')) {
            $image = $this->input->post('map_img_old');
        } else {
            $image = 'img/'.$this->upload->data('file_name');

        }

        $input = array(
            'map_number'=>$this->input->post('map_number'),
            'map_name'=>$this->input->post('map_name'),
            'map_description'=>$this->input->post('map_description'),
            'map_img'=>$image,
            'map_latitude'=>$this->input->post('map_latitude'),
            'map_logitude'=>$this->input->post('map_logitude'),
        );
        $this->Map_model->map_edit_process($input);
        redirect('Map/map_list');
    }
}
