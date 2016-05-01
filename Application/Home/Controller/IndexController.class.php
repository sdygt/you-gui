<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function add_queue()
    {
        if ( !IS_AJAX) {
            $this->error('请求错误');
        }
        $url = I('post.url');
        if ($url==''){
            $this->ajaxReturn(['message'=>'URL is empty']);
        }
        //TODO:URL合法性验证
        M('queue')->add(['url'=>$url]);
        $this->trigger();
    }

    protected function trigger()
    {
        //TODO:trig the async part
    }

}