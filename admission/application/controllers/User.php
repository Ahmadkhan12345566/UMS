<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $this->load->helper(array('form', 'url'));
    }

    public  function  viewLoad($page){
        $this->load->view('inc/header');
        $this->load->view('inc/bssidebar');
        $this->load->view('inc/navbar');
        $this->load->view($page);
        $this->load->view('inc/footer');
    }

    public function personal_information(){
        if ($data=$this->input->post()){
            $_POST['user_id']="1";
            $this->Crud_model->insert('personal_information', $_POST);
        }
        else{
            $this->viewLoad('personalinformation');
        }
    }

    public function address_detail(){

        if ($data=$this->input->post()){
           $_POST['user_id']="2";
           $this->Crud_model->insert('address', $_POST);
        }
        else{
            $this->viewLoad('address');
        }
    }

    public function photo_upload(){

        if ($data=$this->input->post()){
            $_POST['user_id']="3";
            $this->Crud_model->insert('photo_upload', $_POST);
        }
        else{
            $this->viewLoad('photoupload');
        }
    }

    public function education_detail(){

        if ($data=$this->input->post()){

         //var_dump($data["submit"]);
         //die();
         if($data["submit"] == "matric"){
             $this->eduMatric_detail($_POST);
         }
         if ($data["submit"] == "intermediate"){
            $this->eduintermediate_detail($_POST);
         }
         if ($data["submit"] == "fourteenyears" ){
             $this->fourteenyearsEdu_detail($_POST);
         }
         if ($data["submit"] == "16 Years"){
             $this->SixteenYearEdu_Detail($_POST);
         }
        }
        else{
            $this->load->view('educationdetails');
        }
    }

    public function eduMatric_detail(){

        if ($data=$this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=4;
            $this->Crud_model->insert('education_details', $_POST);
        }
        else{
            $this->viewLoad('educationdetails');
        }
    }

    public function eduintermediate_detail(){

        if ($data=$this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=4;
            $this->Crud_model->insert('education_details', $_POST);
        }
        else{
            $this->viewLoad('educationdetails');
        }
    }

    public function fourteenyearsEdu_detail(){

        if ($data=$this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=4;
            $this->Crud_model->insert('education_details', $_POST);
        }
        else{
            $this->viewLoad('educationdetails');
        }
    }

    public function SixteenYearEdu_Detail(){

        if ($data=$this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=4;
            $this->Crud_model->insert('education_details', $_POST);
        }
        else{
            $this->viewLoad('educationdetails');
        }
    }

    public function nts_detail(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('nts_details', $_POST);
        }
        else{
            $this->viewLoad('ntsdetails');
        }
    }

    public function program_choice(){

        if ($data=$this->input->post()){
            foreach ($_POST['program'] as $item){
                $program=array();
                $program["user_id"]=4;
                $program["degree_id"]=$item;
                $this->Crud_model->insert('program_choices', $program);
            };
        }
        else{
            $this->viewLoad('programchoices');
        }
    }

    public function work_history(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('work_history', $_POST);
        }
        else{
            $this->viewLoad('workhistory');
        }
    }

    public function work_history_submit(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('work_history', $_POST);
        }
    }

    public function fund_detail(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('fund_details', $_POST);
        }
        else{
            $this->viewLoad('funddetails');
        }
    }

    public function publication_details(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('publication_details', $_POST);
        }
        else{
            $this->viewLoad('publicationdetails');
        }
    }

    public function publication_details_submit(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }

    public function research_details(){

        if ($data=$this->input->post()){
            foreach ($_POST['research'] as $item){
                $research=array();
                $research["research"]=$item;
                $research['user_id']="4";
                $this->Crud_model->insert('research_interests', $research);
            }
        }
        else{
            $this->viewLoad('researchinterests');
        }
    }

    public function documents_upload(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('documents_upload', $_POST);
        }
        else{
            $this->viewLoad('documentsupload');
        }
    }

    public function other_detail(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('other_details', $_POST);
        }
        else{
            $this->viewLoad('otherdetail');
        }
    }

    public function confirm_fee(){

        if ($data=$this->input->post()){
            $_POST['user_id']="4";
            $this->Crud_model->insert('confirm_fee', $_POST);
        }
        else{
            $this->viewLoad('confirmfee');
        }
    }

    public function submit_data(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
    }

    public function do_upload()
    {
//        var_dump("i am h?");
//        die();
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 2048;
        //$config['max_width']            = 1920;
       // $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('studentphoto'))
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            die();
            $this->viewLoad('photoupload', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $image = array('studentphoto'=>$data['upload_data']['full_path']);
            $this->Crud_model->update_photo(1, $image);
            $this->session->set_flashdata('success', 'Photo loaded');

            $this->viewLoad('photoupload', 'refresh');
        }
    }


}