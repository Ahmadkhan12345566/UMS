<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
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
        $this->load->model('Adminm');
        $this->load->helper(array('form'));
    }

    public function index()
    {
        $this->load->view('index');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }

    }

    public function dashboard()
    {
        $this->load->view('dashboard');

    }
    public function department()
    {
        $this->load->view('departments');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }
    public function degree()
    {
        $this->load->view('degree');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }
    public function courses()
    {
        $this->load->view('courses');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }

}


//class Admin
//{
//
//}