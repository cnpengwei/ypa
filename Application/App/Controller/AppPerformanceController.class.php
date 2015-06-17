<?php
namespace App\Controller;
use Think\Controller;


Class AppPerformanceController extends Controller{

    #index method
    public function index(){

    }
    
    # 显示当前所有记录
    # p means performance
    # j means the json data need to return to app
    public function list_performance(){
        $p = M('performances');        
        $p_list = $p->limit(20)->select();
        $j = '[';
        foreach($p_list as $k=>$v){
            $j .= $this->json_encode_ex($v).',';
            //echo  $k." --> ". $this->json_encode_ex($v)."\n"."<br />";
            //echo $k." --> ". json_encode($v, JSON_UNESCAPED_UNICODE)."\n"."<br />";
        }
        $j = rtrim($j,',');
        $j .= ']';
        echo $j;
        //dump($j);
        //echo $j;
        //dump($p_list);
        //$this->assign('performanceList', $performance_list);
        //$this->display();
    }    

    public function get_perf_list(){

    }

    function json_encode_ex( $value){
        if ( version_compare( PHP_VERSION,'5.4.0','<')) {
            $str = json_encode( $value);
            $str = preg_replace_callback("#\\\u([0-9a-f]{4})#i", function($matchs){ return iconv('UCS-2BE', 'UTF-8', pack('H4',$matchs[1]));}, $str );
            return  $str;
        } else {
            return json_encode( $value, JSON_UNESCAPED_UNICODE);
        }
    }

}
