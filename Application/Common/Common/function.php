<?php

function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
    $inststr = new \Org\Util\String();
    $msubstr = $inststr->msubstr($str, $start, $length);
    return $msubstr;
}
/*
function uti_substr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
    return    \Org\Util\String::msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true);
}

function fun_substr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
    $normal = new \Lib\Ypa\Normal();
    return $normal->mysubstr($str, $start, $length);
     
}


    function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true) {  
        return "me_called";
        if(function_exists("mb_substr")){  
            if($suffix)  
                 return mb_substr($str, $start, $length, $charset)."...";  
            else 
                 return mb_substr($str, $start, $length, $charset);  
        } elseif(function_exists('iconv_substr')) {  
            if($suffix)  
                 return iconv_substr($str,$start,$length,$charset)."...";  
            else 
                 return iconv_substr($str,$start,$length,$charset);  
        }  
        $re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";  
        $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";  
        $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";  
        $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";  
        preg_match_all($re[$charset], $str, $match);  
        $slice = join("",array_slice($match[0], $start, $length));  
        if($suffix) return $slice."…";  
        return $slice;
    }



function get_client_ip($type = 0) {
    return "me get_client_ip";
        $type = $type ? 1 : 0;
        static $ip = NULL;
        if ($ip !== NULL) {
            return $ip[$type];
        }
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos = array_search('unknown',$arr);
            if(false !== $pos){
                unset($arr[$pos]);
            }
            $ip = trim($arr[0]);
        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $long = ip2long($ip);
        $ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
        return $ip[$type];
}
*/

