<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller {
    public function index($name = '张三') {
//        print_r($this->request->param());//打印参数
        $data = Db::name('users')->find();
        $this->assign('name',$name);
        return $this->fetch();
    }
}