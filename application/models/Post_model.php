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

    public function get_device(){

      $query = $this->db->get_where('device', array('user_id' => $this->session->userdata('user_id')));
      return $query->result_array();
    }

    public function get_swich_board($key){
      $query = $this->db->get_where('swich_board', array('swich_board_key' => $key));
      return $query->row_array();
    }

    public function get_20quiz($qn){
      $this->db->order_by('rand()');
      $this->db->limit(20);
      $query = $this->db->get_where('quiz', array('quiz_no' => $qn));
      return $query->result_array();
    }

    public function get_quiz_by_id($id){

      $query = $this->db->get_where('quiz', array('quiz_id' => $id));
      return $query->row_array();
    }

    public function get_max_quiz($user_id){
      $this->db->select_max('score_quiz_no');
      $this->db->where('score_point >', '69.5');
      $query = $this->db->get_where('score', array('user_id' =>$user_id))->row();
      return $query->score_quiz_no;
    }

    public function get_score($user_id,$qn){
      $query = $this->db->get_where('score', array('user_id' =>$this->session->userdata('user_id'),'score_quiz_no' =>$qn));
      if($query->num_rows()){
        $sc=$query->row_array();
        return $sc["score_point"];
      }
      else {
        return 0;
      }
    }

    public function get_score_time($user_id,$qn){
      $query = $this->db->get_where('score', array('user_id' =>$this->session->userdata('user_id'),'score_quiz_no' =>$qn));
      if($query->num_rows()){
        $sc=$query->row_array();
        return $sc["score_update"];
      }
      else {
        return 0;
      }
    }


    public function delete_quiz($qn){

      $query = $this->db->delete('quiz', array('quiz_id' => $qn));

    }

    public function set_register(){
      $data = array(
        'user_name' => $this->input->post('name'),
        'user_email' => $this->input->post('email'),
        'user_pass' => $this->input->post('pass'),
       );
      return $this ->db->insert('user',$data);
    }


    public function set_score($qn,$score){
      $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'score_quiz_no' => $qn,
        'score_point' => $score,
        'score_update' => date("Y-m-d H:i:s"),

       );
       $query = $this->db->get_where('score', array('user_id' =>$this->session->userdata('user_id'),'score_quiz_no' =>$qn));


      if($query->num_rows()){
        $sc=$query->row_array();
        if($sc['score_point']<$score){
          $this->db->where(array('user_id' =>$this->session->userdata('user_id'),'score_quiz_no' =>$qn));
          $this->db->update("score",$data);
        }
      }
      else {
        return $this ->db->insert('score',$data);
      }





    }

    public function set_adddevicedata($name,$key){
      $data = array(
        'user_id' =>$this->session->userdata('user_id'),
        'device_name' => $name,
        'device_key' => $key,
       );
      return $this ->db->insert('device',$data);
    }

    public function log_verify(){
      $query = $this->db->get_where('user', array('user_email' =>$this->input->post('email'),'user_pass' =>$this->input->post('pass')));
      return $query;
    }

    public function set_image($value){
       $v=array('user_img' => $value);
       $this->db->where('user_id',$this->session->userdata('user_id'));
       $query =$this->db->update('user',$v);
      return $query;
    }
    public function update_swich_board($field,$key,$status){
      if($status==1){
        $status=0;
      }
      else {
        $status=1;
      }
       $v=array($field => $status);
       $this->db->where('swich_board_key',$key);
       $query =$this->db->update('swich_board',$v);
      return $query;
    }


  }



 ?>
