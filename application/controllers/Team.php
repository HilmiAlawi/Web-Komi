<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{
    public function index()
    {
        $data['header'] = $this->load->view('layout/header', '', TRUE);
        $data['footer'] = $this->load->view('layout/footer', '', TRUE);
        $this->load->view('team_view', $data);
    }
}