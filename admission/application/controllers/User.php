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
        $this->load->library('auth', 'form_validation');
    }

    public  function  viewLoad($page ,$data=null){
        $this->load->view('inc/header');
        $this->load->view('inc/bssidebar');
        //$this->load->view('inc/navbar');
        $this->load->view($page,$data);
        $this->load->view('inc/footer');
    }

    public function personal_information(){

       // var_dump($this->auth->userID());


        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('personal_information', $_POST);
            //todo: update pifo status
            $data["pinformation"]=true;
            $this->Crud_model->update("admission_process_status","1",$data);
        }
        else{
            $data['countries']= $this->Crud_model->get_all("countries");
            $data['domiciles']= $this->Crud_model->get_all("domiciles");
//            var_dump($data);
//            die();
            $this->viewLoad('personalinformation',$data);
        }
    }

    public function address_detail(){

        if ($this->input->post()){

            // Permanent Address

            $permanentaddress=array();
            $permanentaddress["address1"]= $_POST['pline1'];
            $permanentaddress["address2"]= $_POST['pline2'];
            $permanentaddress["city_id"]= $_POST['pcity_id'];
            $permanentaddress["phone"]= $_POST['pphone'];
            $permanentaddress["address_type_id"]= 1;
            $permanentaddress['user_id']=$this->auth->userID();

            $this->Crud_model->insert('address', $permanentaddress);

           // Mailing Addresses

            $mailingaddress=array();
            $mailingaddress["address1"]= $_POST['mline1'];
            $mailingaddress["address2"]= $_POST['mline2'];
            $mailingaddress["city_id"]= $_POST['mcity_id'];
            $mailingaddress["phone"]= $_POST['mphone'];
            $mailingaddress["address_type_id"]= 1;
            $mailingaddress['user_id']=$this->auth->userID();

            $this->Crud_model->insert('address', $mailingaddress);

           // Guardian Addresses

            $guardianaddress=array();
            $guardianaddress["address1"]= $_POST['mline1'];
            $guardianaddress["address2"]= $_POST['mline2'];
            $guardianaddress["city_id"]= $_POST['gcity_id'];
            $guardianaddress["phone"]= $_POST['mphone'];
            $guardianaddress["address_type_id"]= 1;
            $guardianaddress['user_id']=$this->auth->userID();

            $this->Crud_model->insert('address', $guardianaddress);

            //Todo: Address Status
            $data["address"]= true;
            $this->Crud_model->update("admission_process_status", "1", $data);
        }
        else{
            $data["cities"]= $this->Crud_model->get_all("cities");
            $this->viewLoad('address', $data);
        }

        // permanent address


    }

    public function photo_upload(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('photo_upload', $_POST);

            // Todo: Photo status
            $data["pupload"] = true;
            $this->Crud_model->update("admission_process_status", "1", $data);
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
            $data["education_levels"]= $this->Crud_model->get_all('education_levels');
            $data["degrees"]= $this->Crud_model->get_all('degrees');
            $data["boards"]= $this->Crud_model->get_all('boards');
//            var_dump($data);
//            die();
            $this->viewLoad('educationdetails',$data);
        }
    }

    public function eduMatric_detail(){

        if ($this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('education_details', $_POST);

            // Todo: Education Details Status
            $data["edetails"] = true;
            $this->Crud_model->update("admission_process_status", "1", $data);

        }
        else{
            $data["education_levels"]= $this->Crud_model->get_all('education_levels');
            $data["degrees"]= $this->Crud_model->get_all('degrees');
            $data["boards"]= $this->Crud_model->get_all('boards');
            $this->viewLoad('educationdetails', $data);
        }

    }

    public function eduintermediate_detail(){

        if ($this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('education_details', $_POST);

            // Todo: Education Details Status
            $data["edetails"] = true;
            $this->Crud_model->update("admission_process_status", "1", $data);
        }
        else{

            $data["education_levels"]= $this->Crud_model->get_all('education_levels');
            $data["degrees"]= $this->Crud_model->get_all('degrees');
            $data["boards"]= $this->Crud_model->get_all('boards');
            $this->viewLoad('educationdetails', $data);
        }
    }

    public function fourteenyearsEdu_detail(){

        if ($this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('education_details', $_POST);

            // Todo: Education Details Status
            $data["edetails"] = true;
            $this->Crud_model->update("admission_process_status", "1", $data);
        }
        else{

            $data["education_levels"]= $this->Crud_model->get_all('education_levels');
            $data["degrees"]= $this->Crud_model->get_all('degrees');
            $data["boards"]= $this->Crud_model->get_all('boards');
            $this->viewLoad('educationdetails', $data);
        }
    }

    public function SixteenYearEdu_Detail(){

        if ($this->input->post()){
            unset($_POST["submit"]);
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('education_details', $_POST);

            // Todo: Education Details Status
            $data["edetails"] = true;
            $this->Crud_model->update("admission_process_status", "1", $data);
        }
        else{
            $this->viewLoad('educationdetails');
        }
    }

    public function nts_detail(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('nts_details', $_POST);

            // Todo: NTS Status
            $data["ntsdetails"] = true;
            $this->Crud_model->update("admission_process_status", "1", $data);
        }
        else{
            $this->viewLoad('ntsdetails');
        }
    }

    public function program_choice(){

        if ($this->input->post()){
            foreach ($_POST['program'] as $item){
                $program=array();
                $program["user_id"]=$this->auth->userID();
                $program["degree_id"]=$item;
                $this->Crud_model->insert('program_choices', $program);
            };

            // Todo: Program Choices Status
            $data["prochoices"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
        }
        else{

            $data['degrees']=$this->Crud_model->get_all("degrees");
            $this->viewLoad('programchoices', $data);
        }
    }

    public function work_history(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('work_history', $_POST);

            // Todo: Work History Status
            $data["workhistory"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
        }
        else{
            $this->viewLoad('workhistory');
        }
    }

    public function work_history_submit(){

        if ($data=$this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('work_history', $_POST);
        }
    }

    public function fund_detail(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('fund_details', $_POST);

            // Todo: Fund Details Status
            $data["fdetails"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
        }
        else{
            $this->viewLoad('funddetails');
        }
    }

    public function publication_details(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('publication_details', $_POST);

            // Todo: Publication Details Status
            $data["pubdetails"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
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

        if ($this->input->post()){
            foreach ($_POST['research'] as $item){
                $research=array();
                $research["research"]=$item;
                $research['user_id']=$this->auth->userID();
                $this->Crud_model->insert('research_interests', $research);
            }

            // Todo: Research Interest Status
            $data["rinterests"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
        }
        else{
            $this->viewLoad('researchinterests');
        }
    }

    public function documents_upload(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('documents_upload', $_POST);

            // Todo: Documents Upload Status
            $data["docupload"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
        }
        else{
            $this->viewLoad('documentsupload');
        }
    }

    public function other_detail(){

        if ($this->input->post()){
            //other details
             $otherdetails=array();
             $otherdetails['seats']=$_POST['seats'];
             $otherdetails['transport']=$_POST['transport'];
             $otherdetails['user_id']=$this->auth->userID();
             $this->Crud_model->insert('other_details', $otherdetails);

            // Advertisement out
             $advertisementout=array();
             $advertisementout['advertisement_id']=$_POST['advertisement_id'];
             $advertisementout['user_id']=$this->auth->userID();

             $this->Crud_model->insert('advertisement_out', $advertisementout);

            // Todo: Other Details Status
            $data["othdetails"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);

        }
        else{
            $data['advertisements']= $this->Crud_model->get_all('advertisements');
            $this->viewLoad('otherdetail', $data);
        }
    }

    public function confirm_fee(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('confirm_fee', $_POST);

            // Todo: Confirm Fee Status
            $data["confirmfee"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);
        }
        else{
            $this->viewLoad('confirmfee');
        }
    }

    public function submit_data(){

        if ($this->input->post()){

            // Todo: Submit Application Status
            $data["subapplication"]= true;
            $this->Crud_model->update("admission_process_status","1", $data);

            $this->viewLoad('submitapplication');
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
//            var_dump($error);
//            die();
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