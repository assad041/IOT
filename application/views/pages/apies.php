<?php
$key=$this->input->get('key');
$swich=$this->Post_model->get_swich_board($key);
echo $swich['swich_board_f1value'].$swich['swich_board_f2value'].$swich['swich_board_f3value'].$swich['swich_board_f4value'].$swich['swich_board_f5value'].$swich['swich_board_f6value'].$swich['swich_board_f7value'].$swich['swich_board_f8value'];

 ?>
