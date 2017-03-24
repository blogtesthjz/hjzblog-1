<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

//require_once 'E:/code/php/blog/resources/org/code/Code.class.php';
require_once 'org/code/Code.class.php';
//require_once (__DIR__.'\Code.class.php');
class LoginController extends CommonController
{
    public function login()
    {
//        1、线判断验证码是否正确
        if ($input = Input::all())//如果用户提交过来的表单不为空  Input 可以取出表单中提出的数据
        {
            $code = new \Code;//去底层找code类
            $_code = $code->get();
            if ($_code != strtoupper($input['code']))
            {
                return back()->with('msg','验证码错误');//传参将错误信息返回给上一页面传回
            }
            echo 'ok';
        }
        else
            return view('admin.login');
    }
    public function code()
    {
        $code = new \Code;//去底层找code类
        $code->make();
    }
//    public function getcode()
//    {
//        return $_SESSION['code'];
//    }
}
