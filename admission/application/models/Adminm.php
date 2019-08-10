<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminm extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function admin_users($data)
    {

        return $this->db->insert($data);

    }

    function admin($data)
    {

        return $this->db->insert($data);

    }

}