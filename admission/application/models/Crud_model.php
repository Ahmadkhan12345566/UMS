<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 8/3/2019
 * Time: 6:21 PM
 */
class Crud_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert($table,$data){
        return $this->db->insert($table,$data);
    }

    public  function get_all($table){
        return $this->db->get($table)->result_array();
    }

    public function get($table,$id){
        $this->db->where('id',$id);
        return $this->db->get($table)->row();
    }

    public function delete($table,$id){
        $this->db->where('id',$id);
        return $this->db->delete($table);
    }


    public function update($table,$id,$data){
        $this->db->where('id',$id);
        return  $this->db->update($table,$data);
    }



}