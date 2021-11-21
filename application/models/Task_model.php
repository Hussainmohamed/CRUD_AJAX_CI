<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function register(){
        $name=$this->input->post('uname');
        $email=$this->input->post('email');
        $pwd=md5($this->input->post('pwd'));
        // call procedure
        $pro = "CALL Register(?,?,?)";
        $data = array('Name' => $name, 'Email' => $email, 'Password' => $pwd);
        //execute the query or procedureds
        return $this->db->query($pro, $data); 
    }

    public function auth_user(){       
            $uname=$this->input->post('uname');
            $pwd=md5($this->input->post('pwd'));
            $sql="select * from users where Name='$uname' and Password='$pwd'";
            $cnt=$this->db->query($sql)->num_rows();
            if($cnt > 0){
                return $this->db->query($sql)->result_array();               
            }else{
                return 0;
            }            
    }
    public function Insert_record($data){
        $pro = "CALL Insert_emp(?,?,?,?,?,?,?)";
        $this->db->query($pro,$data);
    }

    public function Update_record($data){
        $pro = "CALL Update_record(?,?,?,?,?,?,?,?)";
        $this->db->query($pro,$data);
    }

    public function get_records(){
        $pro="CALL Get_emp()";
        return $this->db->query($pro)->result_array();
    }
    public function delete_record($id){
        $sql="delete from employee where Eid='$id'";
        $this->db->query($sql);
    }

    public function search($id){            
        $pro="CALL Search_emp(?)";        
        return $this->db->query($pro,array("Eid"=>$id))->result_array();
    }

   

}