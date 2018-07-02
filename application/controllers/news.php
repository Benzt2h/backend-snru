<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function news_list()
    {
        $data['data']=$this->News_model->news_list();
        $this->load->view('news_list', $data);
    }
    public function news_insert()
    {
        $this->load->view('news_insert');
    }
    public function news_insert_process()
    {
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('news_img')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('news_error', $error);
        } else {
            $img_path = 'img/'.$this->upload->data('file_name');
            $input = array(
            'news_number'=>$this->input->post('news_number'),
            'news_header'=>$this->input->post('news_header'),
            'news_description'=>$this->input->post('news_description'),
            'news_img'=>$img_path,
        );
            $this->News_model->news_insert_process($input);
            redirect('News/news_list');
        }
    }

    public function news_delete()
    {
        $news_number=$this->uri->segment(3);
        $this->News_model->news_delete($news_number);
        redirect('News/news_list');
    }

    public function news_edit()
    {
        $news_number=$this->uri->segment(3);
        $data['data'] = $this->News_model->news_edit($news_number);
        $this->load->view('news_edit', $data);
    }

    public function news_edit_process()
    {
        $config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('news_img')) {
            $image = $this->input->post('news_img_old');
        } else {
            $image = 'img/'.$this->upload->data('file_name');
        }

        $input = array(
            'news_number'=>$this->input->post('news_number'),
            'news_header'=>$this->input->post('news_header'),
            'news_description'=>$this->input->post('news_description'),
            'news_img'=>$image,
        );
        $this->News_model->news_edit_process($input);
        redirect('News/news_list');
    }
}
