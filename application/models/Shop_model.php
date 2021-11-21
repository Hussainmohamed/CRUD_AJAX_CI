<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        
    }

    public function get_category(){
        return $this->db->query("SELECT * FROM `Category`")->result_array();
    }
    public function get_records(){
        return $this->db->query("SELECT * FROM `Products`")->result_array();
    }

    public function add_product($post_data){
       $this->db->insert('Products',$post_data);
    }


}