<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $db = M('queue');
        dump($db);
        $this->display();
    }
}