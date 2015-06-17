<?php
namespace Appc\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
 
           $this->show('here index method of Index controller of Appc module', 'utf-8');
    }
    
    public function validate_user(){
        $user_name = (isset($_GET['username']))?$_GET['username']:'zhangsan';
        $arr = array ('site'=>'lawyer','username'=>$user_name,'b'=>2,'c'=>3,'d'=>4,'e'=>5, 'err'=>0);
         echo json_encode($arr);
    }
}
