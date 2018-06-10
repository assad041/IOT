<?php

  class Post_model extends CI_Model
  {

    function __construct()
    {
      $this->load->database();
    }
    public function get_users($slug=FALSE){
      if($slug==FALSE){
        $query = $this->db->get('user');
        return $query->result_array();
      }
      $query = $this->db->get_where('user', array('slug' => $slug));
      return $query->row_array();
    }
    public function set_register(){
      $data = array(
        'user_name' => $this->input->post('name'),
        'user_email' => $this->input->post('email'),
        'user_pass' => $this->input->post('pass'),

       );

      return $this ->db->insert('user',$data);
    }

    public function log_verify(){
      $query = $this->db->get_where('user', array('user_email' =>$this->input->post('email'),'user_pass' =>$this->input->post('pass')));
      return $query;
    }
  }



 ?>
