<?php
/**
 * Created by PhpStorm.
 * User: jx
 * Date: 2017/3/10
 * Time: 17:37
 */

namespace app\Home\controller;


use core\lib\Controller;

class LoginController extends Controller
{
    public function index() {
        jsonReturn(200, "success");
    }
}