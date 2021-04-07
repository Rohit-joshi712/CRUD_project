<?php
    class User extends CI_Controller{
        
        function index(){
            $this->load->model('User_model');
            $users= $this->User_model->all();
            $data= array();
            $data['users']=$users;
            $this->load->view('list',$data);
        }

        function create(){
            $this->load->model('User_model');            
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            
            if($this->form_validation->run() == false)  {
                $this->load->view('create');
            }   else{
                $formArray = array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');
                $formArray['created_at'] = date('Y-m-d');
                $this->User_model->create($formArray);
                $this->session->set_flashdata('Success','record added successfully!');
                redirect(base_url().'index.php/User/index');
            }
        }
        function edit($userid){
            $this->load->model('User_model');
            $user = $this->User_model->getUser($userid);
            $data = array();
            $data['user']= $user;

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');

            if($this->form_validation->run() == false)  {
                $this->load->view('edit',$data);
            }   else{
                $formArray=array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');

                $this->User_model->updateUser($userid,$formArray);
                $this->session->set_flashdata('success','record added successfully!');
                redirect(base_url().'index.php/User/index');
            }
        }
            function delete($userid){
                $this->load->model('User_model');
                $user = $this->User_model->getUser($userid);
                if(empty($user))    {
                    $this->session->set_flashdata('failure','Record not found in database');
                    redirect(base_url().'index.php/User/index');
                }
                $this->User_model->deleteUser($userid);
                $this->session->set_flashdata('success','Record deleted successfully');
                redirect(base_url().'index.php/User/index');
            }
        

        

    }
?>