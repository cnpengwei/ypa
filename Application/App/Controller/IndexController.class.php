<?php
namespace App\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('here index method of Index Controller, App Module','utf-8');
        echo "<br />AppPerformance ";
        echo "<br />here show all controller....";
    }
}
