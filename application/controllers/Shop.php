<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Shop_model');       

    }

    public function index(){
        $data['category']=$this->Shop_model->get_category();
        $data['records']=$this->Shop_model->get_records();
       $this->load->view('Shop/index',$data);
    }

    public function login(){
        $this->load->view('Shop/login');
    }

    public function add_product(){
       $cnt=count($_FILES['images']['name']);
      $name=implode(",",$_FILES['images']['name']);
       
       for($i=0;$i<$cnt;$i++){
            $_FILES['files']['name']=$_FILES['images']['name'][$i];
            $_FILES['files']['type']= $_FILES['images']['type'][$i];
			$_FILES['files']['size']= $_FILES['images']['size'][$i];
		
            $_FILES['files']['tmp_name']=$_FILES['images']['tmp_name'][$i];  
            $config['upload_path']="./assets/images/";
            $config['allowed_types']="jpg|png|jpeg";
            $this->load->library('upload',$config);   
            $this->upload->initialize($config);
            if($this->upload->do_upload('files')){
                $this->upload->data();
            }   else{
                echo $this->upload->display_errors(); die();
            }  
           
       }
       $data=array(
           'Name'=>$this->input->post('name'),
           'Category'=>$this->input->post('category'),
           'Price'=>$this->input->post('price'),
           'Images'=>$name
       );
       $this->Shop_model->add_product($data);
       redirect(base_url("Shop/index"));
      
       
      
    }

    public function test(){
        echo "test";
    }

}