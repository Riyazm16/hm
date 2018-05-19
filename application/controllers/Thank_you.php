<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Thank_you extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        echo "in";
//        die;
//        $this->load->model('UserDetailsModel');
//        $this->load->library('Notification');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {

        $redirecturl = $this->session->flashdata('redirecturl');
        if (!empty($redirecturl)) {
            $data['redirect_url'] = $redirecturl;
        } else {
            $data['redirect_url'] = LINK_1;
        }
        $this->load->view('thank_you', $data);
    }

}
