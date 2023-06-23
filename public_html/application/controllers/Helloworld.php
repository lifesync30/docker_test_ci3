<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data['users'] = $this->getData();
        $this->load->view('hello_world', $data);
    }

    function getData(){
        $data = $this->db->select('users.*')
                        ->from('users')
                        ->order_by('id', 'ASC')
                        ->get()
                        ->result_array();
         return $data;
    }

}