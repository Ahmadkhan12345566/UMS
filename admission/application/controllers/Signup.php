<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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
        $this->load->model('Crud_model');
    }

    public function index(){
        if ($data=$this->input->post()){

            $this->Crud_model->insert('users', $_POST);
//            if ($data["applyfor_id"]  == "1"){
//                redirect(base_url("instructions"));
//            }
//            elseif ($data["applyfor_id"]  == "2"){
//                redirect(base_url("instructions"));
//            }
        }
        else{
            $this->load->view('index');
        }
    }



//    public  function  viewLoad($page){
//        $this->load->view('inc/header');
//        $this->load->view('inc/bssidebar');
//        $this->load->view('inc/navbar');
//        $this->load->view($page);
//        $this->load->view('inc/footer');
//    }

//    public function reg_bs(){
//
//        if($this->input->post()){
//            unset($_POST['submit']);
//            $this->Crud_model->insert('users', $_POST);
//        redirect(base_url("instructions"));
//        }
//
//    }
//
//    public function reg_ms(){
//
//        if($this->input->post()){
//            unset($_POST['submit']);
//            $this->Crud_Model->insert('users', $_POST);
//        }
//        else{
//
//            $this->load->view('inc/header');
//            $this->load->view('inc/mssidebar');
//            $this->load->view('inc/navbar');
//            $this->load->view('instruction');
//            $this->load->view('inc/footer');
//
//        }
//    }

}