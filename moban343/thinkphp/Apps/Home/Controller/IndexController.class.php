<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $syb = M('syb13');
        $res = $syb->select();
//        dump($res);
        $this->assign('res',$res);
        $this->display();

    }

}