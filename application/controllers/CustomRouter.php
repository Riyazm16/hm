<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomRouter extends CI_Controller {

    public function __construct() {
//        header('Access-Control-Allow-Origin: *');
//        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
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
    public function link_1() {
        $data['style'] = 'style1.css';
        $data['redirect_url'] = LINK_1;
        $this->load->view('link-1', $data);
    }

    public function link_2() {
        $data['style'] = 'style2.css';
        $data['redirect_url'] = LINK_2;
        $this->load->view('link-2', $data);
    }
   public function femaleHL(){
        $data['style'] = 'femaleHL.css';
        $data['redirect_url'] = FEMALE_HL;
        $this->load->view('femaleHL', $data);
    }
     public function link_0() {
        $data['style'] = 'style0.css';
        $data['redirect_url'] = LINK_0;
        $this->load->view('link-0', $data);
    }
}
