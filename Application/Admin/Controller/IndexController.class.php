<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        #echo "here index method of Index controller, of test(admin) module";
        #dump($_POST);

        #$this->show('here index method of IndexController, Admin module');
        #cookie('name', 'Hybrid汉字', array('expire'=>10,'prefix'=>'ypa_'));
        # U means URL 
        # /index.php/Admin/Index/index.html
        #echo U('Index/index');
        

        $this->display();
    }


    public function add_user(){
        $um = new \Model\UserModel();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
			$data['email']=$_POST['email'];
			$data['user_name'] = $_POST['user_name'];
			$data['pass_word'] = $_POST['pass_word'];
			$um->validate_input($data);
		}     
    }

    
    public function validate_user(){       
        $user_name = (isset($_GET['username']))?$_GET['username']:'zhangsan';
        $arr = array ('a'=>$user_name,'b'=>2,'c'=>3,'d'=>4,'e'=>5, 'err'=>0);
        echo json_encode($arr);

    }
/*
    public function add_user(){
        # insert ypa_users (email, user_name, pass_word) values('aaa@163.com', 'aaa', 'DDDDDDDDDDDDDDDDDDDDDDD111111111');
        #$model=new \Model\UsersModel()
        $us = M('users','ypa_');
        #dump($us);
        $data['email'] = 'aaa@126.com';
        $data['user_name'] = 'ThinkPHP'.mt_rand();
        $data['pass_word'] = MD5('ThinkPHP');
        $data['last_ip'] = '111.111.111.111';
        $result = $us->add($data);
        dump($result);
       # $user->add();
       
    }
*/
    public function conn_db(){
        #$mmm = md5('abcABC123');
        #$this->show($mmm);
        # INSERT INTO ypa_users(email,user_name,PASSWORD) VALUES('a@b.com','aa',MD5('abc'));
        $user = M('users','ypa_');
        $arr = $user->select(); 
        $cnt = count($arr);
        for($i=0;$i<$cnt;$i++){
           # echo $arr[i].'<br/>';
        }

        foreach($arr as $k=>$v){ 
            echo $k.$v['email'].'<br />'; 
        } 

        #print "$cnt <br/>";
        #$m = M('user');
        print "me run";
        #echo "error";
    }
}
