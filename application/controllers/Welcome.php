<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function login_process()
    {
        $input = array(
            'admin_id'=>$this->input->post('admin_id'),
            'admin_password'=>$this->input->post('admin_password'),
        );
        $data = $this->Admin_model->login($input);
        /*  $sql="SELECT * FROM admin WHERE admin_id = '$input[admin_id]' AND admin_password = '$input[admin_password]'";
         $ret = $this->db->query($sql); */
        if ($data->num_rows()) {
            $data_result = $data->result();
            $this->session->set_userdata('admin_name', $data_result[0]->admin_name);
            $this->load->view('welcome_message');
        } else {
            $this->load->view('login_worng');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome/login');
    }
}
