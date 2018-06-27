<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Map extends CI_Controller
{
    public function map_list()
    {
        $this->load->view('map_list');
    }
}
