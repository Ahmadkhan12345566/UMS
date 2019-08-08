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

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
        //$this->Studentm->personal_information($data);

    }

    public function address_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->address_detail($data);

    }

    public function photo_upload(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->photo_upload($data);

    }

    public function education_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->education_detail($data);

    }

    public function eduMatric_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->eduMatric_detail($data);

    }

    public function eduintermediate_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->eduintermediate_detail($data);

    }

    public function fourteenyearsEdu_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->fourteenyearsEdu_detail($data);

    }

    public function SixteenYearEdu_Detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->SixteenYearEdu_Detail($data);

    }

    public function nts_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->nts_detail($data);

    }

    public function program_choice(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->program_choice($data);

    }

    public function work_history(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->work_history($data);

    }

    public function work_history_submit(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->work_history_submit($data);

    }

    public function fund_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->fund_detail($data);
    }

    public function publication_details(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->publication_details($data);

    }

    public function publication_details_submit(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->publication_details_submit($data);

    }

    public function research_details(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->research_details($data);

    }

    public function documents_upload(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->documents_upload($data);

    }

    public function other_detail(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->other_detail($data);

    }

    public function confirm_fee(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->confirm_fee($data);

    }

    public function submit_data(){

        if ($data=$this->input->post()){
            var_dump($data);
            die();
        }
//        $data=$this->input->post();
//        $this->Studentm->submit_data($data);

    }


}