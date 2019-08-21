<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructions extends CI_Controller {

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

    public function __construct()
    {

        parent::__construct();

        $this->load->helper(array('form', 'url'));
    }

    public function signup()
    {
        $this->load->view('index');
        if ($data=$this->input->post()){
        }
    }
    public  function  viewLoad($page){
        $this->load->view('inc/header');
        $this->load->view('inc/bssidebar');
        $this->load->view('inc/navbar');
        $this->load->view($page);
        $this->load->view('inc/footer');
    }
    public  function  viewLoad2($page){
        $this->load->view('inc/header');
        $this->load->view('inc/mssidebar');
        $this->load->view('inc/navbar');
        $this->load->view($page);
        $this->load->view('inc/footer');
    }

    public function login(){

        $this->load->view('login');

    }

    public function index()
    {
        $this->viewLoad("instructions");
        $this->viewLoad2("instructions");
        //$this->load->view('instructions');
    }



    public function personalinfo()
    {
        $this->load->view('personalinformation');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }

    public function adres()
    {
        $this->load->view('address');
    }

    public function photoup()
    {
        $this->load->view('photoupload');
    }

    public function edudetails()
    {
        $this->load->view('educationdetails');
    }

    public function nts()
    {
        $this->load->view('ntsdetails');
    }

    public function program()
    {
        $this->load->view('programchoices');
    }

    public function workh()
    {
        $this->load->view('workhistory');
    }

    public function fund()
    {
        $this->load->view('funddetails');
    }

    public function publish()
    {
        $this->load->view('publicationdetails');
    }

    public function research()
    {
        $this->load->view('researchinterests');
    }

    public function documents()
    {
        $this->load->view('documentsupload');
    }

    public function other()
    {
        $this->load->view('otherdetail');
    }

    public function fee()
    {
        $this->load->view('confirmfee');
    }

    public function application()
    {
        $this->viewLoad('submitapplication');
    }


}






//class Instructions
//{
//
//}