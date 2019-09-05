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



        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('personal_information', $_POST);
            //todo: update personal information status
            $data["pinformation"]=true;
            $this->Crud_model->update("admission_process_status",$this->auth->userID(),$data);
            //var_dump($data);
            //die();
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
            $guardianaddress["address1"]= $_POST['gline1'];
            $guardianaddress["address2"]= $_POST['gline2'];
            $guardianaddress["city_id"]= $_POST['gcity_id'];
            $guardianaddress["phone"]= $_POST['gmobile'];
            $guardianaddress["address_type_id"]= 1;
            $guardianaddress['user_id']=$this->auth->userID();

            $this->Crud_model->insert('address', $guardianaddress);

            //Todo: Address Status
            $data["address"]= true;
            $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
        }
        else{
            $data["cities"]= $this->Crud_model->get_all("cities");
            $this->viewLoad('address', $data);
        }

    }

    //Todo:profile photo upload
    public function photo_upload(){


        if ($_FILES){

            $_POST['user_id']=$this->auth->userID();
            //$this->Crud_model->insert('photo_upload', $_POST);
            $image = $this->do_upload('studentphoto');
            if($image) {
                $this->Crud_model->update_photo($this->auth->userID(), $image);
                $this->session->set_flashdata('success', 'Photo loaded');
                // Todo: Photo status
                $data["pupload"] = true;
                $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
            }
        }

        $this->viewLoad('photoupload');

    }

    public function education_detail(){

        if ($this->input->post()){

            // Matric/o levels
            $matric=array();
            $matric["education_level_id"]= $_POST['meducation_level_id'];
            $matric["passingyears"]= $_POST['mpassingyears'];
            $matric["board_id"]= $_POST['mboard_id'];
            $matric["degree_id"]= $_POST['mdegree_id'];
            $matric["totalmarks"]= $_POST['mtotalmarks'];
            $matric["obtainmarks"]= $_POST['mobtainmarks'];
            //$matric["address_type_id"]= 1;
            $matric['user_id']=$this->auth->userID();

            $this->Crud_model->insert('education_details', $matric);

            // Mailing Addresses

            $intermediate=array();
            $intermediate["education_level_id"]= $_POST['ineducation_level_id'];
            $intermediate["passingyears"]= $_POST['inpassingyears'];
            $intermediate["board_id"]= $_POST['inboard_id'];
            $intermediate["degree_id"]= $_POST['indegree_id'];
            $intermediate["totalmarks"]= $_POST['intotalmarks'];
            $intermediate["obtainmarks"]= $_POST['inobtainmarks'];
            //$matric["address_type_id"]= 1;
            $intermediate['user_id']=$this->auth->userID();

            $this->Crud_model->insert('education_details', $intermediate);

            // Guardian Addresses

            $fourteen=array();
            $fourteen["education_level_id"]= $_POST['freducation_level_id'];
            $fourteen["passingyears"]= $_POST['frpassingyears'];
            $fourteen["board_id"]= $_POST['frboard_id'];
            $fourteen["degree_id"]= $_POST['frdegree_id'];
            $fourteen["totalmarks"]= $_POST['frtotalmarks'];
            $fourteen["obtainmarks"]= $_POST['frobtainmarks'];
            //$matric["address_type_id"]= 1;
            $fourteen['user_id']=$this->auth->userID();

            $this->Crud_model->insert('education_details', $fourteen);

            // Todo: Education Details Status
            $data["edetails"] = true;
            $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
        }
        else{
            $data["education_levels"]= $this->Crud_model->get_all('education_levels');
            $data["degrees"]= $this->Crud_model->get_all('degrees');
            $data["boards"]= $this->Crud_model->get_all('boards');

            $this->viewLoad('educationdetails',$data);
        }
    }


    public function nts_detail(){

        if ($this->input->post()){
            $_POST['user_id']=$this->auth->userID();
            $this->Crud_model->insert('nts_details', $_POST);

            // Todo: NTS Status
            $data["ntsdetails"] = true;
            $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
        }
        else{
            $this->viewLoad('researchinterests');
        }
    }

//Todo:ducoments photo upload
    public function documents_upload(){

        if ($_FILES){


            $image_paths=array();
            $image_paths['user_id']=$this->auth->userID();
            foreach ($_FILES as $key => $file){
                if ($file != null) {
                    $image = $this->do_upload($key);
                }
                if($image) {
                    $image_paths[$key] = $image;
                }else {
                    $image_paths[$key]=null;
                }

            }
            $this->Crud_model->insert('documents_upload',$image_paths );
            // Todo: Documents Upload Status
            $data["docupload"]= true;
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
        }
            $this->viewLoad('documentsupload');

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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);

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
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);
        }
        else{
            $this->viewLoad('confirmfee');
        }
    }

    public function submit_data(){

        if ($this->input->post()){

            // Todo: Submit Application Status
            $data["subapplication"]= true;
            $this->Crud_model->update("admission_process_status",$this->auth->userID(), $data);

            $this->viewLoad('submitapplication');
        }
    }

    public function do_upload($input_name)
    {
        //todo:set unique name to file
        $date = new DateTime();
        $startdata = $date->format('YmdHis');
        $newName = str_replace('/', '', $startdata) . $this->auth->userID();
        $file_ext = pathinfo($_FILES[$input_name]["name"], PATHINFO_EXTENSION);
        $config['file_name'] = $newName;
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 2048;
        //$config['max_width']            = 1920;
       // $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($input_name))
        {
            $error = array('error' => $this->upload->display_errors());

            return false;

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
             return $image;
        }
    }


}