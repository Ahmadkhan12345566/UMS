<?php


class Studentm extends CI_Model
{
    public function __construct()
    {

        parent::__construct();

        $this->load->helper(array('form', 'url'));
    }

    function personal_information($data){

        return $this->db->insert($data);
        var_dump($data);
        die();
    }

    function address_detail($data){

        $this->db->insert($data);

    }

    function photo_upload($data){

        $this->db->insert($data);

    }

    function education_detail($data){

        $this->db->insert($data);

    }

    function eduMatric_detail($data){

        $this->db->insert($data);

    }

    function eduintermediate_detail($data){

        $this->db->insert($data);

    }

    function fourteenyearsEdu_detail($data){

        $this->db->insert($data);


    }

    function SixteenYearEdu_Detail($data){

        $this->db->insert($data);


    }

    function nts_detail($data){

        $this->db->insert($data);


    }

    function program_choice($data){

        $this->db->insert($data);

    }

    function work_history($data){

        $this->db->insert($data);


    }

    function work_history_submit($data){

        $this->db->insert($data);


    }

    function fund_detail($data){

        $this->db->insert($data);


    }

    function  publication_details($data){

            $this->db->insert($data);


    }

    function  publication_details_submit($data){

            $this->db->insert($data);


    }

    function  research_details($data){

            //$this->db->insert($data);
            var_dump("research", $data);

    }

    function  documents_upload($data){

            $this->db->insert($data);


    }

    function  other_detail($data){

            $this->db->insert($data);


    }

    function  confirm_fee($data){

            $this->db->insert($data);


    }

    function  submit_data($data){

            $this->db->insert($data);


    }













}