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

            if ($this->_validate_personal() == True){
                $_POST['user_id']=$this->auth->userID();
                if($_POST['dob']) {
                    $_POST['dob'] = date('Y-m-d', strtotime($_POST['dob']));
                }
                $this->Crud_model->insert('personal_information', $_POST);
                //todo: update personal information status
                $data["pinformation"]=true;
                $this->Crud_model->update("admission_process_status",$this->auth->userID(),$data);
            }

            redirect(base_url('addressdetail'));
        }

            $data['countries']= $this->Crud_model->get_all("countries");
            $data['domiciles']= $this->Crud_model->get_all("domiciles");

            $this->viewLoad('personalinformation',$data);

    }

    public function address_detail(){

        if ($this->input->post()){

            if ($this->_validate_address() == True) {
                //Todo: Permanent Address

                $permanentaddress = array();
                $permanentaddress["address1"] = $_POST['pline1'];
                $permanentaddress["address2"] = $_POST['pline2'];
                $permanentaddress["city_id"] = $_POST['pcity_id'];
                $permanentaddress["phone"] = $_POST['pphone'];
                $permanentaddress["address_type_id"] = 1;
                $permanentaddress['user_id'] = $this->auth->userID();

                $this->Crud_model->insert('address', $permanentaddress);

                //Todo: Mailing Addresses

                $mailingaddress = array();
                $mailingaddress["address1"] = $_POST['mline1'];
                $mailingaddress["address2"] = $_POST['mline2'];
                $mailingaddress["city_id"] = $_POST['mcity_id'];
                $mailingaddress["phone"] = $_POST['mphone'];
                $mailingaddress["address_type_id"] = 1;
                $mailingaddress['user_id'] = $this->auth->userID();

                $this->Crud_model->insert('address', $mailingaddress);

                //Todo: Guardian Addresses

                $guardianaddress = array();
                $guardianaddress["address1"] = $_POST['gline1'];
                $guardianaddress["address2"] = $_POST['gline2'];
                $guardianaddress["city_id"] = $_POST['gcity_id'];
                $guardianaddress["phone"] = $_POST['gmobile'];
                $guardianaddress["address_type_id"] = 1;
                $guardianaddress['user_id'] = $this->auth->userID();

                $this->Crud_model->insert('address', $guardianaddress);

                //Todo: Address Status
                $data["address"] = true;
                $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
            }

            redirect(base_url('photoupload'));
        }

            $data["cities"]= $this->Crud_model->get_all("cities");
            $this->viewLoad('address', $data);


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

            redirect(base_url('educationsetails'));
        }

        $this->viewLoad('photoupload');

    }

    public function education_detail(){

        if ($this->input->post()){
            if ($this->_validate_edu() == True) {

                //Todo: Matric/o levels details
                $matric = array();
                $matric["education_level_id"] = $_POST['meducation_level_id'];
                $matric["passingyears"] = $_POST['mpassingyears'];
                $matric["board_id"] = $_POST['mboard_id'];
                $matric["degree_id"] = $_POST['mdegree_id'];
                $matric["totalmarks"] = $_POST['mtotalmarks'];
                $matric["obtainmarks"] = $_POST['mobtainmarks'];
                //$matric["address_type_id"]= 1;
                $matric['user_id'] = $this->auth->userID();

                $this->Crud_model->insert('education_details', $matric);

                //Todo: Indermediate details

                $intermediate = array();
                $intermediate["education_level_id"] = $_POST['ineducation_level_id'];
                $intermediate["passingyears"] = $_POST['inpassingyears'];
                $intermediate["board_id"] = $_POST['inboard_id'];
                $intermediate["degree_id"] = $_POST['indegree_id'];
                $intermediate["totalmarks"] = $_POST['intotalmarks'];
                $intermediate["obtainmarks"] = $_POST['inobtainmarks'];
                //$matric["address_type_id"]= 1;
                $intermediate['user_id'] = $this->auth->userID();

                $this->Crud_model->insert('education_details', $intermediate);

                //Todo: 14 years details

                $fourteen = array();
                $fourteen["education_level_id"] = $_POST['freducation_level_id'];
                $fourteen["passingyears"] = $_POST['frpassingyears'];
                $fourteen["board_id"] = $_POST['frboard_id'];
                $fourteen["degree_id"] = $_POST['frdegree_id'];
                $fourteen["totalmarks"] = $_POST['frtotalmarks'];
                $fourteen["obtainmarks"] = $_POST['frobtainmarks'];
                //$matric["address_type_id"]= 1;
                $fourteen['user_id'] = $this->auth->userID();

                $this->Crud_model->insert('education_details', $fourteen);

                // Todo: Education Details Status
                $data["edetails"] = true;
                $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
            }

            redirect(base_url('ntsdetails'));
        }
            $data["education_levels"]= $this->Crud_model->get_all('education_levels');
            $data["degrees"]= $this->Crud_model->get_all('degrees');
            $data["boards"]= $this->Crud_model->get_all('boards');

            $this->viewLoad('educationdetails',$data);
    }


    public function nts_detail(){

        if ($this->input->post()){
//            var_dump($this->_validate());
//            die();
            if ($this->_validate() == FALSE){
                $_POST['user_id']=$this->auth->userID();
                if($_POST['testdate']) {
                    $_POST['testdate'] = date('Y-m-d', strtotime($_POST['testdate']));
                }
                $this->Crud_model->insert('nts_details', $_POST);
                // Todo: NTS Status
                $data["ntsdetails"] = true;
                $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);

            }

            redirect(base_url('programchoices'));

        }
        else{
            $this->viewLoad('ntsdetails');
        }
    }

    public function program_choice(){

        if ($this->input->post()){
            if($this->_validate_programchoice() == True) {
                foreach ($_POST['program'] as $item) {
                    $program = array();
                    $program["user_id"] = $this->auth->userID();
                    $program["degree_id"] = $item;
                    $this->Crud_model->insert('program_choices', $program);
                };

                // Todo: Program Choices Status
                $data["prochoices"] = true;
                $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
            }

            redirect(base_url('documentsupload'));
        }
        $data['degrees']=$this->Crud_model->get_all("degrees");
        $this->viewLoad('programchoices', $data);
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

            redirect(base_url('otherdetail'));
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

            redirect(base_url('confirmfee'));

        }
        else{
            $data['advertisements']= $this->Crud_model->get_all('advertisements');
            $this->viewLoad('otherdetail', $data);
        }
    }

    public function confirm_fee()
    {
        if ($this->input->post()) {
            if ($this->_validate_fee() == True){
                if ($_FILES) {


                    $_POST['user_id'] = $this->auth->userID();
                    $_POST['depositdate'] = date('Y-m-d', strtotime($_POST['depositdate']));
                    $_POST['bankchallan'] = $this->do_upload('bankchallan');

                    $this->Crud_model->insert('confirm_fee', $_POST);

                    // Todo: Confirm Fee Status
                    $data["confirmfee"] = true;
                    $this->Crud_model->update("admission_process_status", $this->auth->userID(), $data);
                }
            }

            redirect(base_url('submitapplication'));
        }$this->viewLoad('confirmfee');
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

    private function _validate_personal(){

        $this->form_validation->set_rules('fullname', 'Full Name','required|regex_match[/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/]');
        $this->form_validation->set_rules('dob', 'Date of birth','required');
        $this->form_validation->set_rules('cnic', 'Your CNIC','required|regex_match[/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/]|is_unique[personal_information.cnic]');
        $this->form_validation->set_rules('mobnumbers', 'Mobile Number','required|regex_match[/^[0-9+]{4}-[0-9+]{7}$/]|is_unique[personal_information.mobnumbers]');
        $this->form_validation->set_rules('country_id', 'Country","required');
        $this->form_validation->set_rules('domicile_id', 'Domicile','required');
        $this->form_validation->set_rules('gender', 'Gender','required');
        $this->form_validation->set_rules('fathername', 'Father Name','required|regex_match[/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/]');
        $this->form_validation->set_rules('fcnic', 'Father CNIC','required|regex_match[/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/]|is_unique[personal_information.fcnic]');
        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    private function _validate_address(){

        $this->form_validation->set_rules('pline1', 'Address Permanent 1','required');
        $this->form_validation->set_rules('pline2', 'Address Permanent 1','required');
        $this->form_validation->set_rules('pcity_id', 'City','required|numeric');
        $this->form_validation->set_rules('pphone', 'Contact Number','required|regex_match[/^[0-9+]{4}-[0-9+]{7}$/]|is_unique[address.phone]');
        $this->form_validation->set_rules('mline1', 'Address Mailing 1','required');
        $this->form_validation->set_rules('mline2', 'Address Mailing 2','required');
        $this->form_validation->set_rules('mcity_id', 'City','required|numeric');
        $this->form_validation->set_rules('mphone', 'Contact Number','required|regex_match[/^[0-9+]{4}-[0-9+]{7}$/]');
        $this->form_validation->set_rules('gline1', 'Father/Guardian Address 1','required');
        $this->form_validation->set_rules('gline2', 'Father/Guardian Address 2','required');
        $this->form_validation->set_rules('gcity_id', 'City','required|numeric');
        $this->form_validation->set_rules('gmobile', 'Father/Guardian Mobile','required|regex_match[/^[0-9+]{4}-[0-9+]{7}$/]|is_unique[address.phone]');
        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    private function _validate_edu(){

        $this->form_validation->set_rules('meducation_level_id', 'Matric / O level','required|numeric|is_unique[education_details.education_level_id]');
        $this->form_validation->set_rules('mpassingyears', 'Passing year','required|numeric|is_unique[education_details.passingyears]');
        $this->form_validation->set_rules('mboard_id', 'Board','required|numeric');
        $this->form_validation->set_rules('mdegree_id', 'Degree','required|numeric|is_unique[education_details.degree_id]');
        $this->form_validation->set_rules('mtotalmarks', 'Total Marks','required|numeric');
        $this->form_validation->set_rules('mobtainmarks', 'Obtained Marks','required|numeric');

        $this->form_validation->set_rules('ineducation_level_id', 'Intermediate','required|numeric|is_unique[education_details.education_level_id]');
        $this->form_validation->set_rules('inpassingyears', 'Passing year','required|numeric|is_unique[education_details.passingyears]');
        $this->form_validation->set_rules('inboard_id', 'Board','required|numeric');
        $this->form_validation->set_rules('indegree_id', 'Degree','required|numeric|is_unique[education_details.degree_id]');
        $this->form_validation->set_rules('intotalmarks', 'Total Marks','required|numeric');
        $this->form_validation->set_rules('inobtainmarks', 'Obtained Marks','required|numeric');

        $this->form_validation->set_rules('freducation_level_id', '14 years','numeric|is_unique[education_details.education_level_id]');
        $this->form_validation->set_rules('frpassingyears', 'Passing year','numeric|is_unique[education_details.passingyears]');
        $this->form_validation->set_rules('frboard_id', 'Board / University','numeric');
        $this->form_validation->set_rules('frdegree_id', 'Degree','numeric|is_unique[education_details.degree_id]');
        $this->form_validation->set_rules('frtotalmarks', 'Total Marks','numeric');
        $this->form_validation->set_rules('frobtainmarks', 'Obtained Marks','numeric');
        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    private function _validate_programchoice(){

        $this->form_validation->set_rules('program[]', 'Choice Program 1','required|numeric|is_unique[program_choices.degree_id]');
        $this->form_validation->set_rules('program[]', 'Choice Program 2','required|numeric|is_unique[program_choices.degree_id]');
        $this->form_validation->set_rules('program[]', 'Choice Program 3','required|numeric|is_unique[program_choices.degree_id]');
        $this->form_validation->set_rules('program[]', 'Choice Program 4','required|numeric|is_unique[program_choices.degree_id]');
        $this->form_validation->set_rules('program[]', 'Choice Program 5','required|numeric|is_unique[program_choices.degree_id]');
        $this->form_validation->set_rules('program[]', 'Choice Program 6','required|numeric|is_unique[program_choices.degree_id]');
        $this->form_validation->set_rules('program[]', 'Choice Program 7','required|numeric|is_unique[program_choices.degree_id]');
        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    private function _validate_fee(){

        $this->form_validation->set_rules('bankname', 'Choice Program 1','required|regex_match[/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/]');
        $this->form_validation->set_rules('branchcode', 'Choice Program 2','required|numeric');
        $this->form_validation->set_rules('bankaddress', 'Choice Program 3','required');
        $this->form_validation->set_rules('depositdate', 'Choice Program 4','required');
        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

}