<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->view('admin/index');

    }
    public function dashboard()
    {
        $this->load->view('admin/dashboard');

    }

    public function ad_requests()
    {
        $this->load->view('admin/admissionrequests');

    }

    public function usersadd()
    {
        $this->load->view('admin/users');
        if ($data=$this->input->post()){
          //  $this->Adminm->admin_users($data);
            var_dump($data);
            die();
        }
        //$this->Adminm->admin_users($data);


    }

    public function user()
    {
        $this->load->view('admin/user');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
        //$this->Adminm->admin($data);
    }

    public function studentlist()
    {
        $this->load->view('admin/studentlist');

    }

    public function statistics()
    {
        $this->load->view('admin/statistics');

    }
    public function department()
    {
        $this->load->view('admin/departments');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }
    public function degree()
    {
        $this->load->view('admin/degree');
        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }
    public function courses()
    {
        $this->load->view('admin/courses');
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