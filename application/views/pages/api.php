<?php
$key=$this->input->get('key');
$swich=$this->Post_model->get_swich_board($key);
echo json_encode($swich);

 ?>
