<?php
namespace Admin\Controller;
use Think\Controller;

class AppController extends Controller{
    public function treat_get_http(){
        echo 'got http get req';
    }
    
    public function treat_post_http(){
        $v_user_name = (isset($_POST['user_name']))? $_POST['user_name']:'NA';
        $v_pass_word = (isset($_POST['pass_word']))? $_POST['pass_word']:'NA';
        # TODO check with DB
        # if pass msg = 0
        $v_city = '北京';
        $arr = array('city' => $v_city, 'msg' => '0');
        # else msg = 'err msg'
        # $arr = array('user_name' => $v_user_name, 'msg' => '0');
        echo json_encode($arr);
        #echo 'got post request of http from app';
    }
}

