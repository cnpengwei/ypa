<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        
        header("Content-Type:text/html;charset=utf-8");

        $nav = M('nav');        
        $where['type']='top';
        $this->nav = $nav->where($where)->order('sort')->select();

        //首页链接分类
        $category=D('Category');
        $this->category=$category->where('cat_pid=0')->order('cat_sort')->relation(true)->select();

        //首页幻灯片
        $ad=M('Ad');
        $wheread['ad_type']='3';
        $wheread['ad_position']='2';
        $this->ad=$ad->where($wheread)->order('ad_sort desc')->limit(6)->select();
        
        //首页滚动幻灯片
        $wherescroll['ad_type']='2';
        $wherescroll['ad_position']='3';    
        $this->adscroll=$ad->where($wherescroll)->order('ad_sort desc')->select();
       

        //首页随机广告 ->limit(1)->select() 或者 find()都可以取出（一条）数据
        $whererand['ad_type']='2';
        $whererand['ad_position']='4';
        $whererand['ad_show']='1';
        $this->adrand=$ad->where($whererand)->order('rand()')->find();//这个T$this->adrand是要返回给前台用的

        //xx 快报
        $article=M("article");
        $this->article=$article->order('article_sort desc')->limit(8)->select();

   
        $this->display();   
    }

    public function listt(){
        echo "me";
        #$this->show('here list method of IndexController', 'utf-8');
    }


      

}



