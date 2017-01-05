<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        // 获取列表
        return view('admin.index.index');
    }

    /**
     * 用户登陆方法
     */
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            session(['admin'=> 1]);
            return redirect('/admin');
        } else {
            dump(session('admin'));
            return view('admin.auth.login');
        }
    }

    /**
     * 用户退出方法
     */
    public function logout()
    {

    }
    
    public function welcome()
    {
        return view('admin.index.welcome');
    }
}