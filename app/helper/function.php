<?php
function showError($errors,$nameInput){
    if ($errors->has($nameInput))
    {
        echo'<div class="notification-container"><div class="alert alert-danger bg-danger thongbao" role="alert"><strong>';
        echo  $errors->first($nameInput);   
        echo '</strong><i class="pull-right" style="cursor:pointer"><span class="glyphicon glyphicon-remove btn-remove"></span></i></div></div>';
    } 
}
function doimau($str,$tukhoa){
    return str_replace($tukhoa,"<span style='color:red;'>$tukhoa</span>",$str);
}
function slim_echo($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}