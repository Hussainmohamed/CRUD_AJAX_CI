<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Task_model');
        $this->load->library('session');
    }


    public function index(){
        $this->load->view('Task/login');
    }

    public function register(){
        $this->Task_model->register($this->input->post());
        echo "Register Successfully";
    }


    public function dashboard(){
       $this->load->view('Task/header');
       $this->load->view('Task/content');
       $this->load->view('Task/footer');
    }

    // authenticate user function
    public function login(){
      $data=$this->Task_model->auth_user($this->input->post());
      if($data==0){
        return 0;
      }else{          
          $sess=array(
            "Email"=>$data[0]['Email'],
            "Name"=>$data[0]['Name']
         );
          $this->session->set_userdata($sess);
          echo "Login successfully";      
      }
    }


    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Task'));
    }

    public function insert_record(){
        $cnt=count($_FILES['files']['name']);
        $name=implode(",",$_FILES['files']['name']);
         
         for($i=0;$i<$cnt;$i++){
              $_FILES['img']['name']=$_FILES['files']['name'][$i];
              $_FILES['img']['type']= $_FILES['files']['type'][$i];
              $_FILES['img']['size']= $_FILES['files']['size'][$i];
          
              $_FILES['img']['tmp_name']=$_FILES['files']['tmp_name'][$i];  
              $config['upload_path']="./assets/images/";
              $config['allowed_types']="jpg|png|jpeg|doc|docx|xlsx|pdf";
              $this->load->library('upload',$config);   
              $this->upload->initialize($config);
              if($this->upload->do_upload('img')){
                  $this->upload->data();
              }   else{
                  echo $this->upload->display_errors(); die();
              }  
             
         }
         $data=array(
             'Name'=>$this->input->post('emp-name'),
             'Email'=>$this->input->post('emp-email'),
             'DOB'=>$this->input->post('emp-dob'),
             'Qualification'=>$this->input->post('emp-qual'),
             'Experience'=>$this->input->post('emp-exp'),
             'Salary'=>$this->input->post('emp-sal'),
             'Images'=>$name
         );
        
         $this->Task_model->Insert_record($data);
         echo "Register Successfully";
    }

    public function Update_record(){

        if(!empty($_FILES['files']['name'])){
        $cnt=count($_FILES['files']['name']);
        $name=implode(",",$_FILES['files']['name']);
         
         for($i=0;$i<$cnt;$i++){
              $_FILES['img']['name']=$_FILES['files']['name'][$i];
              $_FILES['img']['type']= $_FILES['files']['type'][$i];
              $_FILES['img']['size']= $_FILES['files']['size'][$i];
          
              $_FILES['img']['tmp_name']=$_FILES['files']['tmp_name'][$i];  
              $config['upload_path']="./assets/images/";
              $config['allowed_types']="jpg|png|jpeg|doc|docx|xlsx|pdf";
              $this->load->library('upload',$config);   
              $this->upload->initialize($config);
              if($this->upload->do_upload('img')){
                  $this->upload->data();
              }   else{
                  echo $this->upload->display_errors(); die();
              }               
         }
        }
         $data=array(
             'Name'=>$this->input->post('edit-emp-name'),
             'Email'=>$this->input->post('edit-emp-email'),
             'DOB'=>$this->input->post('edit-emp-dob'),
             'Qualification'=>$this->input->post('edit-emp-qual'),
             'Experience'=>$this->input->post('edit-emp-exp'),
             'Salary'=>$this->input->post('edit-emp-sal'),
             'Images'=>empty($_FILES['files']['name']) ? $this->input->post('edit-img') : $name,
             'Eid'=>$this->input->post('eid')
         );
        
         $this->Task_model->Update_record($data);
         echo "Updated Successfully";
       

    }


    // public function get_employee(){
    //    $data=$this->Task_model->get_records();
    //    echo json_encode($data);
    // }

        //delete Employee data
    public function delete_emp(){
      $id=$this->input->post('Id');
      $this->Task_model->delete_record($id);
    }
    //Retrive data
    public function get_table(){
        $data['records']=$this->Task_model->get_records();
        $this->load->view('Task/records_table',$data);
    }

    public function search_emp(){
        $id=$this->input->post('Id');
        $data=$this->Task_model->search($id);
        echo json_encode($data);
    }


}