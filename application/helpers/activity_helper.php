<?php 

function activity_log($tipe = "", $str = ""){
    $CI =& get_instance();

    if (strtolower($tipe) == "login"){
        $log_tipe   = 0;
        $log = "login";
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = 1;
        $log = "logout";
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = 2;
        $log = "add";
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe  = 3;
        $log = "edit";
    }
    elseif(strtolower($tipe) == "delete"){
        $log_tipe  = 4;
        $log = "delete";
    }
    else{
        $log_tipe  = 5;
        $log = "error/bug";
    }
 
    // paramter
    $param['log_akses']     = $CI->session->userdata('login_type');
    $param['log_user']      = $CI->session->userdata('login_user_id');
    $param['log_name']      = $CI->session->userdata('name');
    $param['log_tipe']      = $log;
    $param['log_desc']      = $str;
 
    //load model log
    $CI->load->model('Activity_model');
 
    //save to database
    $CI->Activity_model->save_log($param);
 
}

?>