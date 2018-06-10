<?php

  class Post extends CI_Controller
  {

    public function view ($page= 'index'){
      if(!file_exists(APPPATH.'views/post/'.$page.'.php')){
        show_404();
      }
      $data['title']=ucfirst($page);

      if($page=='register'){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email address','required');
        $this->form_validation->set_rules('pass','Password','required');
        if($this->form_validation->run()==FALSE ){
          $data['posts']= $this->Post_model->get_users();
          $this->load->view('templates/header',$data);
          $this->load->view('post/'.$page, $data);
          $this->load->view('templates/footer');
        }
        else {
          $this->Post_model->set_register();
          redirect('index');
        }
        return ;
      }
      else if($page=='index'){
        $this->form_validation->set_rules('email','Email address','required');
        $this->form_validation->set_rules('pass','Password','required');
        if($this->form_validation->run()==FALSE){
          $data['posts']= $this->Post_model->get_users();
          $this->load->view('templates/header',$data);
          $this->load->view('post/'.$page, $data);
          $this->load->view('templates/footer');
        }
        else {
          $query=$this->Post_model->log_verify();
          if($query->num_rows()){

            $session_data=$query->row_array();
            $this->session->set_userdata($session_data);
            redirect('pages/');
          }
          else {
            $this->session->set_flashdata('error','Invalid Username Or Password');
            redirect('index');
          }

        }
        return ;
      }
      else if($page=='logout'){
        $this->session->unset_userdata('user_name');
        redirect('index');
        return ;
      }
      $this->load->view('templates/header',$data);
      $this->load->view('post/'.$page, $data);
      $this->load->view('templates/footer');
    }

  }

 ?>
