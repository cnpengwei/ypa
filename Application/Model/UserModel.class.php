<?php
namespace Model;
use Think\Model;
class UserModel extends Model{
    protected $tableName = 'users'; 
    
    public function getTopUser($cnt){
    	echo "$cnt";
    }

    
    public function validate_input($data){        
        $arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
        echo json_encode($arr);
        #dump($arr); 
    }
 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   

    #查询分类数据
    #$data=D('goods_type')->field('goods_type_id,goods_type_fid,goods_type_name,concat(path,"-",id) as typepath')->order('typepath,id')->select();
    
    # if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
}

