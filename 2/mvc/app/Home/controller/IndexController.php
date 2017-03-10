<?php
/**
 * Created by PhpStorm.
 * User: jx
 * Date: 2017/3/10
 * Time: 17:09
 */

namespace app\Home\controller;

use app\Home\model\IndexModel;
use core\lib\Controller;

class IndexController extends Controller
{
    public function index() {
        $model = new IndexModel();
        $data = $model->getData();
        $this->assign('name', $data);
        $this->assign('title', 'hello, world');
        $this->display('index.php');
    }
}