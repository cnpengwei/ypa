<?php
namespace Admin\Controller;
use Think\Controller;
class PerformanceController extends Controller{
    public function index(){
        # $normal = new \Lib\Ypa\Normal();
        # dump($normal);
        # $result = $normal->mysubstr("要截取的很长的字符串", 1, 3); 
        # $result = mysubstr("要截取的很长的字符串", 1, 3);
        # $result = get_client_ip(0);
        
        echo $result;
        echo "here index method of index controller, admin module";
        $this->display();
    }
    
    # 显示当前所有记录
    public function list_performance(){
        $P = M('performances');        
        $count = $P->where('1=1')->count();
        $Page = new \Think\Page($count,25);
        $show = $Page->show();
        $list = $P->where('1=1')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        #$p_list = $p->limit('10,25')->select();
        #$this->assign('performanceList', $p_list);
        #$this->display();
    }

    # 添加一条记录
    # 用D方法实例化一个实例
    # 用create方法创建对应关系
    # 用add方法添加数据
    public function add_performance(){
        $perf_model = D('performance');
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $create_result = $perf_model->create();
            if(!$create_result){
                $this->error('添加失败');
            }else{
                $add_result = $perf_model->add();
                if(!$add_result){
                    $this->error('添加失败');
                }else{
                    $this->success('添加成功！','Performance/index');
                }
            }
        }
    }

}
