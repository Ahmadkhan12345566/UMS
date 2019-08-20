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
        date_default_timezone_set('Asia/Karachi');
        $data['created_at']=date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
        return $this->db->insert($table,$data);
    }

    public  function get_all($table){
        return $this->db->get($table)->result();
    }

    public function get($table,$id){
        $this->db->where('id',$id);
        return $this->db->get($table)->row();
    }

    public function delete($table,$id){
        $this->db->where('id, studentphoto',$id);
        return $this->db->delete($table);
    }


    public function update($table,$id,$data){
        $this->db->where('id',$id);
        return  $this->db->update($table,$data);
    }

    public function update_photo($id,$data){
        $this->db->where('id',$id);
        $this->db->update('users',$data);
    }



}