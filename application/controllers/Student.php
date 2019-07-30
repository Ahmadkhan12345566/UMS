<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
        $this->load->model('Studentm');
        $this->load->helper(array('form', 'url'));
    }

    public function personal_information(){

        $data=$this->input->post();
        $this->Studentm->personal_information($data);

    }

    public function address_detail(){

        $data=$this->input->post();
        $this->Studentm->address_detail($data);

    }

    public function photo_upload(){

        $data=$this->input->post();
        $this->Studentm->photo_upload($data);

    }

    public function education_detail(){

        $data=$this->input->post();
        $this->Studentm->education_detail($data);

    }

    public function eduMatric_detail(){

        $data=$this->input->post();
        $this->Studentm->eduMatric_detail($data);

    }

    public function eduintermediate_detail(){

        $data=$this->input->post();
        $this->Studentm->eduintermediate_detail($data);

    }

    public function fourteenyearsEdu_detail(){

        $data=$this->input->post();
        $this->Studentm->fourteenyearsEdu_detail($data);

    }

    public function SixteenYearEdu_Detail(){

        $data=$this->input->post();
        $this->Studentm->SixteenYearEdu_Detail($data);

    }

    public function nts_detail(){

        $data=$this->input->post();
        $this->Studentm->nts_detail($data);

    }

    public function program_choice(){

        $data=$this->input->post();
        $this->Studentm->program_choice($data);

    }

    public function work_history(){

        $data=$this->input->post();
        $this->Studentm->work_history($data);

    }

    public function work_history_submit(){

        $data=$this->input->post();
        $this->Studentm->work_history_submit($data);

    }

    public function fund_detail(){

        $data=$this->input->post();
        $this->Studentm->fund_detail($data);
    }

    public function publication_details(){

        $data=$this->input->post();
        $this->Studentm->publication_details($data);

    }

    public function publication_details_submit(){

        $data=$this->input->post();
        $this->Studentm->publication_details_submit($data);

    }

    public function research_details(){

        $data=$this->input->post();
        $this->Studentm->research_details($data);

    }

    public function documents_upload(){

        $data=$this->input->post();
        $this->Studentm->documents_upload($data);

    }

    public function other_detail(){

        $data=$this->input->post();
        $this->Studentm->other_detail($data);

    }

    public function confirm_fee(){

        $data=$this->input->post();
        $this->Studentm->confirm_fee($data);

    }

    public function submit_data(){

        $data=$this->input->post();
        $this->Studentm->submit_data($data);

    }


}