<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function admin_list()
    {
        $data['data'] = $this->Admin_model->admin_list();
        $this->load->view('admin_list',$data);
    }
    
    public function admin_insert(){
        $this->load->view('admin_insert');

    }

    public function admin_insert_process(){
        $input = array(
            'admin_id'=>$this->input->post('admin_id'),
            'admin_password'=>$this->input->post('admin_password'),
            'admin_name'=>$this->input->post('admin_name'),
        );
        $this->Admin_model->admin_insert_process($input);
        redirect('Admin/admin_list');
    }

    public function admin_delete(){
       $admin_id=$this->uri->segment(3);
       $this->Admin_model->admin_delete($admin_id);
       redirect('Admin/admin_list');
    }

    public function admin_edit(){
        $admin_id=$this->uri->segment(3);
       $data['data'] = $this->Admin_model->admin_edit($admin_id);
       $this->load->view('admin_edit',$data);
    }

    public function admin_edit_process(){
        $input = array(
            'admin_id'=>$this->input->post('admin_id'),
            'admin_password'=>$this->input->post('admin_password'),
            'admin_name'=>$this->input->post('admin_name'),
        );
        $this->Admin_model->admin_edit_process($input);
        redirect('Admin/admin_list');
    }
}
