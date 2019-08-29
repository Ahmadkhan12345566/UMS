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

            $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);

            $this->Crud_model->insert('users', $_POST);

            //todo: inset status data ;
            $data= array();
            $this->Crud_model->insert('admission_process_status', $data);
            redirect("Login");

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



    public function  insert_dumy_data()
    {
        //country 1
        $country=array();
        $country["name"]="Pakistan";
        $country["shortname"]="Pak";
       // country 2
        $country1=array();
        $country1["name"]="America";
        $country1["shortname"]="Ame";

        // domicile 1
        $domicile= array();
        $domicile["name"]="Azad Jammu Kashmir";
        $domicile["shortname"]="AJK";

        // domicile 2
        $domicile1= array();
        $domicile1["name"]="Balochistan";
        $domicile1["shortname"]="BA";

        // cities 1
        $city=array();
        $city["name"]="Islamabad";
        $city["shortname"]="Isb";

        // cities 2
        $city1=array();
        $city1["name"]="Rawalpindi";
        $city1["shortname"]="Rwp";

        // Education Levels 1
        $educationlevel=array();
        $educationlevel["name"]="Matric";
        $educationlevel["shortname"]="Mat";

        // Education Levels 2
        $educationlevel1=array();
        $educationlevel1["name"]="O Level";
        $educationlevel1["shortname"]="Ol";

        // Degrees 1
        $degree=array();
        $degree["name"]="Pre Engineering";
        $degree["shortname"]="PE";

        // Degrees 2
        $degree1=array();
        $degree1["name"]="Computer Science";
        $degree1["shortname"]="CS";

        // boards 1
        $boards=array();
        $boards["boardname"]="BISE, Abbotabad";
        $boards["shortname"]="ABBBISE";

        // boards 2
        $boards1=array();
        $boards1["boardname"]="FBISE, Islamabad";
        $boards1["shortname"]="FBISE";

        // Advertisement 1
        $advertisement=array();
        $advertisement["name"]="Facebook";

        // Advertisement 2
        $advertisement1=array();
        $advertisement1["name"]="Referred by a person";

        $this->Crud_model->insert('countries', $country);
        $this->Crud_model->insert('domiciles', $domicile);
        $this->Crud_model->insert('cities', $city);
        $this->Crud_model->insert('education_levels', $educationlevel);
        $this->Crud_model->insert('degrees', $degree);
        $this->Crud_model->insert('boards', $boards);
        $this->Crud_model->insert('advertisements', $advertisement);
        $this->Crud_model->insert('countries', $country1);
        $this->Crud_model->insert('domiciles', $domicile1);
        $this->Crud_model->insert('cities', $city1);
        $this->Crud_model->insert('education_levels', $educationlevel1);
        $this->Crud_model->insert('degrees', $degree1);
        $this->Crud_model->insert('boards', $boards1);
        $this->Crud_model->insert('advertisements', $advertisement1);


        echo "<h2 style='color: blue;'>Welcome<h2><hr><p style='color: green;'>Your data inserted in your database</p>";
    }
}